<?php

namespace App\Http\Controllers;

use App\Mail\UserConfirmMail;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUsersController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(UserService $userService, Request $request, $role)
    {
        $status =  $request->query('status') ?: 'users';

        // get role for title
        $data['title'] = $userService->userRoleTitle($role);

        // get data user
        $data['user'] = $userService->getWhere($status, $role);

        return view('pages.admin.users', $data);
    }


    public function confirm(UserService $userService, Request $request, User $user)
    {
        // get request
        $confirmCode = $request->confirm;

        // proccess confirm user
        $userService->confirm($user, $confirmCode);

        // data email
        $dataEmail = [
            'name' => $user->name,
            'email' => $user->email,
            'url' => route('home')
        ];

        // check confirm code
        switch ($confirmCode):
            case 1:
                toast('User Berhasil Ditolak!', 'success');
                break;

            default:
                toast('User Berhasil Dikonfirmasi!', 'success');
                break;
        endswitch;

        // send email
        $userService->sendUserConfirmMail($confirmCode, $dataEmail);

        return redirect()->back();
    }
}
