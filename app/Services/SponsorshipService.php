<?php
namespace App\Services;
use App\Models\Sponsorships;
class SponsorshipService{
    public function getData()
    {
        $sponsorships = Sponsorships::orderby('id','desc')->get();
        return $sponsorships;
    }
    public function getWhere($id)
    {
        $sponsorships = Sponsorships::where('id',$id)->get();
        return $sponsorships;
    }
    public function store($data)
    {
        $data->validate([
            'name'=>'required',
            'logo'=>'required|file|image|mimes:jpeg,jpg,png|max:1024',
        ]);
        $logo = $data->logo;
        // dd($logo);
        $filename = uniqid().".".$logo->extension();
        $dtUpload = new Sponsorships;
        $dtUpload->name = $data->name;
        $dtUpload->logo = '/img/logo/'.$filename;
        $save=$dtUpload->save();

        if ($save) {
            $logo->move(public_path().'/img/logo', $filename);
            return $store='1';
        }else{
            return $store='0';
        }
    }

    public function destroy($data)
    {
        $sponsorships=Sponsorships::findorfail($data);
        $file = public_path('/img/logo/').$sponsorships->logo;
        if (file_exists($file)) {
            @unlink($file);
        }
        $del=$sponsorships->delete();
        if ($del) {
           return $destroy='1';
        }else{
           return $destroy='0';

        }
    }
}
?>