<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AdminPresenceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(UserService $userService, $role)
    {
        // konversi role user for title
        $data['title'] = $userService->userRoleTitle($role);

        // for menu data diri
        $data['user'] = null;

        return view('pages.admin.presence', $data);
    }

    // process precensing / use tikcet
    public function presence(UserService $userService, Request $request, $role)
    {
        // get request
        $code = $request->code;
        $presenced = $request->presenced;

        // get user
        $user = $userService->show($code, $role);

        // get user role for title
        $title = $userService->userRoleTitle($role);

        // check code and button gunakan ticket not clicked
        if ($code && !$presenced) {
            // get user
            if ($user) :

                //  check if presenced
                if ($user->presence == "1") :
                    toast('Tiket Sudah Digunakan!', 'warning');
                    return redirect()->route('admin.presence', $role);
                endif;

                // if not presenced
                return view('pages.admin.presence', ['user' => $user, 'title' => $title]);

            endif;

            // if barcode not found
            toast('Barcode Tidak Ditemukan!', 'error');
            return redirect()->route('admin.presence', $role);
        }

        // presenced clicked
        if ($presenced) :
            // not presenced
            $userService->presenced($user);
            toast('Tiket Berhasil Digunakan!', 'success');

        endif;

        // return back
        return redirect()->route('admin.presence', $role);
    }
}
