<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SponsorshipService;

class WelcomeController extends Controller
{
    public function index(SponsorshipService $sponsorshipService) {
        $sponsorships=$sponsorshipService->getData();
        return view('welcome',compact('sponsorships'));
    }
    public function test(SponsorshipService $sponsorshipService) {
        $sponsorships=$sponsorshipService->getData();
        return view('landing',compact('sponsorships'));
    }
    public function about() {
        return view('about');
    }
}
