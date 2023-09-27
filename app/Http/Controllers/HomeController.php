<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use App\Services\SettingService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(SettingService $settingService, UserService $userService) {
        $countViewer = $userService->countUser('USR-V');
        $participant = $settingService->getWhere('1');
        $preSale = $settingService->getWhere('2');
        $sale = $settingService->getWhere('3');
        // echo $countViewer;
        return view('home',compact('participant','preSale','sale','countViewer'));
    }
    public function payment(Request $request, $id, UserService $userService) {
        $payment=$userService->payment($request,$id);
        if ($payment='1') {
            toast('Silahkan tunggu konfirmasi dari Admin!', 'success');
            return redirect()->route('home');
        }else{
            toast('Gagal!', 'error');
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
