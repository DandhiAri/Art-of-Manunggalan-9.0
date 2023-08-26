<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UserService $userService, $role = 'participants')
    {
        // konversi role user for title
        $data['title'] = $userService->userRoleTitle($role);

        // konversi role user for database
        $userRole = $userService->userRole($role);

        // get data user unconfirmed
        $unconfirm = User::where('role', $userRole)
            ->whereNotNull('no_reference')
            ->whereNotNull('payment')
            ->where('confirm', 0)
            ->limit(5)
            ->get();

        // count data user
        $data['users'] = $userService->getWhere('users', $role)->count();
        $data['rejected'] = $userService->getWhere('rejected', $role)->count();
        $data['confirmed'] = $userService->getWhere('confirmed', $role)->count();
        $data['presenced'] = $userService->getWhere('presenced', $role)->count();

        $data['unconfirm'] = $unconfirm;

        return view('pages.admin.dashboard', $data);
    }
}
