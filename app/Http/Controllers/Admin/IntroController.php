<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Intro;
use App\Http\Requests\IntroRequest;
use Image;
use Illuminate\Support\Facades\Validator;

class IntroController extends Controller
{
    public function index()
    {
        $intro = Intro::paginate(10);

        return view('admin.intro.index', compact('intro'));
    }
    public function update($slug)
    {
        $intro = Intro::where('slug', $slug)->first();
        return view('admin.intro.edit', compact('intro'));
    }

    public function postUpdate($slug, Request $req) {
        $intro              = Intro::where('slug', $slug)->first();
        $intro->name_vi        = $req['name_vi'];
        $intro->slug        = str_slug($req['name_vi']);
        $intro->position    = $req['position'];
        $intro->status      = $req['status'] == 1 ? 1 : 0;
        $intro->description_vi = $req['description_vi'];
        $intro->title_seo_vi   = $req['title_seo'];
        $intro->meta_key_vi    = $req['meta_key'];
        $intro->meta_des_vi    = $req['meta_des'];
        $validatedData = $req->validate([
            'name_vi'     => 'required|unique:intros,name_vi,' .$intro->id,
        ]);
        $intro->save();
        return redirect()->route('admin.intro.index')->with('success', 'Sửa thành công');
    }
}
