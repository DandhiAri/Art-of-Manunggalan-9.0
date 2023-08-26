<?php

namespace App\Services;

use App\Mail\UserConfirmMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class UserService
{
    public function userRole($role)
    {
        switch ($role):
            case 'viewers':
                $role = 'USR-V';
                break;

            default:
                $role = 'USR-P';
                break;
        endswitch;

        return $role;
    }

    public function userRoleTitle($role)
    {
        switch ($role):
            case 'viewers':
                $title = 'Penonton';
                break;

            default:
                $title = 'Peserta';
                break;
        endswitch;

        return $title;
    }

    public function getWhere($status, $role)
    {
        $role = $this->userRole($role);

        switch ($status):
            case 'unconfirm':
                $user = User::where('role', $role)
                    ->whereNotNull('no_reference')
                    ->whereNotNull('payment')
                    ->where('confirm', 0)
                    ->get();
                break;
            case 'rejected':
                $user = User::where('role', $role)
                    ->where('confirm', 1)
                    ->get();
                break;
            case 'confirmed':
                $user = User::where('role', $role)
                    ->where('confirm', 2)
                    ->where('presence', 0)
                    ->get();
                break;
            case 'presenced':
                $user = User::where('role', $role)
                    ->where('confirm', 2)
                    ->where('presence', 1)
                    ->get();
                break;

                // users
            default:
                $user = User::where('role', $role)
                    ->whereNull('no_reference')
                    ->whereNull('payment')
                    ->whereNull('code')
                    ->where('confirm', 0)
                    ->get();
                break;
        endswitch;

        return $user;
    }

    public function show($code, $role)
    {
        // convertion role
        $role = $this->userRole($role);

        // get user by code and role
        $user = User::where('role', $role)
            ->where('code', $code)
            ->first();

        return $user;
    }

    public function confirm($user, $confirmCode)
    {
        // check confirm
        switch ($confirmCode):
                // rejected
            case 1:
                $user->no_reference = NULL;
                $user->payment = NULL;
                $user->code = NULL;
                break;
                // confirmed
            case 2:
                $user->code = strtoupper(substr(uniqid(), 6) . date('jny'));
                break;
        endswitch;

        $user->confirm = $confirmCode;
        $user->save();

        return $user;
    }

    public function presenced($user)
    {
        $user->presence = 1;
        $user->save();

        return $user;
    }

    public function payment($request, $id)
    {
        $request->validate([
            'no_reference' => 'required',
            'payment' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        $user = User::findorfail($id);
        $picture = uniqid() . "." . $request->payment->extension();
        $data = [
            'no_reference' => $request['no_reference'],
            'payment' => '/img/payment/' . $picture,
            'confirm' => 0,
        ];
        $pay = $user->update($data);
        if ($pay) {
            $request->payment->move(public_path() . '/img/payment', $picture);
            return $payment = '1';
        } else {
            return $payment = '0';
        }
    }


    public function sendUserConfirmMail($confirmCode, $dataEmail)
    {
        // check confirm code
        switch ($confirmCode):
            case 1:
                $dataEmail['message'] = 'Mohon maaf, Bukti pembayaran anda kami tolak, mohon cek kembali dan upload ulang no referensi dan bukti pembayaran anda';
                $dataEmail['button'] = 'Upload Ulang';
                break;

            default:
                $dataEmail['message'] = 'Selamat, Bukti pembayaran anda berhasil dikonfirmasi, mohon simpan tiket anda';
                $dataEmail['button'] = 'Lihat Tiket';
                break;
        endswitch;

        $send = Mail::to($dataEmail['email'])->send(new UserConfirmMail($dataEmail));

        return $send;
    }

    public function countUser($role)
    {
        $count = User::where('role','=',$role)->where('no_reference','!=', null)->count();

        return $count;
    }
}
