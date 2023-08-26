<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SponsorshipService;

class AdminSponsorshipsController extends Controller
{
    public function index(SponsorshipService $sponsorshipService)
    {
        
        $sponsorships = $sponsorshipService->getData();
       return view('pages.admin.sponsorships',compact('sponsorships'));
    }
    public function store(Request $request,SponsorshipService $sponsorshipService)
    {
        $store=$sponsorshipService->store($request);   
        if ($store=='1') {
            toast('Data berhasil ditambahkan!', 'success');
            return redirect()->back();
        }else{
            toast('Gagal!', 'error');
            return redirect()->back();
        }
    }

    // public function edit($id){
    //     $sponsorships=Sponsorships::where('id',$id);
    //    return view('pages.admin.sponsorship.edit',compact('sponsorships'));
    // }

    // public function update(Request $request){
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'logo' => 'required|file|image|mimes:jpeg,jpg,png|max:1024',
    //     ]);

    //     $sponsorships = Sponsorships::findorfail($id);
    //     $picture = uniqid().".".$request->logo->extension();
    //     $data = [
    //             'name' => $request['name'],
    //             'logo' => '/img/logo/'.$picture,
    //     ];
    //     $update=$sponsorships->update($data);
    //     if ($update) {
    //         $request->logo->move(public_path().'/img/logo', $picture);
            
    //         toast('Data berhasil diubah!', 'success');
    //         return redirect()->route('admin.sponsorship');
    //     }else{
    //         toast('Gagal!', 'error');
    //         return redirect()->back();
    //     }
    // }
    public function destroy($id, SponsorshipService $sponsorshipService)
    {
        $sponsorships=$sponsorshipService->destroy($id);
        if ($sponsorships=='1') {
            toast('Data berhasil dihapus!', 'success');
            return redirect()->back();
        }else{
            toast('Gagal', 'error');
            return redirect()->back();
        }
    }
}
