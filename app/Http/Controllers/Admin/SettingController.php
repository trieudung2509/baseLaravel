<?php

namespace App\Http\Controllers\Admin;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image,File;

class SettingController extends Controller {
    public function index() {
        $settings = Setting::first();
        if ($settings == null) {
            $settings = new Setting;
            $settings->name_vi = 'Nhập tên công ty';
            $settings->save();
        }
        return view('admin.setting.index', compact('settings'));
    }
    public function update(Request $req) {
        $settings               = Setting::first();
        $settings->name_vi      = $req['name_vi'];
        $settings->email        = $req['email'];
        $settings->address_vi   = $req['address_vi'];
        $settings->slogan       = $req['slogan'];
        $settings->website      = $req['website'];
        $settings->phone        = $req['phone'];
        $settings->fb           =  $req['fb'];
        $settings->title_seo    = $req['title_seo'];
        $settings->meta_des     = $req['meta_des'];
        $settings->meta_key     = $req['meta_key'];
        if ($req->hasFile('logo')) {
            if (file_exists($settings->logo)) {
                unlink($settings->logo);
            }
            $logo = $req->file('logo');
            $filename = date('Y_d_m_H_i_s').'-'. $logo->getClientOriginalName();
            Image::make($logo)->save(public_path('upload/settings/'.$filename));
            $settings->logo = ('upload/settings/'.$filename);
        }
        if ($req->hasFile('icon')) {
            if(file_exists($settings->icon)) {
                unlink($settings->icon);
            }
            $icon = $req->file('icon');
            $filename = date('Y_d_m_H_i_s').'-'. $icon->getClientOriginalName();
            Image::make($icon)->save(public_path('upload/settings/'.$filename));
            $settings->icon = ('upload/settings/'.$filename);
        }
        $settings->save();
        return redirect()->route('admin.setting');
    }
}
