<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Http\Requests\SlideRequest;
use Image;
use Illuminate\Support\Facades\Validator;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::orderBy('created_at','desc')->paginate(10);

        return view('admin.slide.index', compact('slide'));
    }

    public function create()
    {
        return view('admin.slide.add_edit_slide');
    }

    public function postCreate(SlideRequest $req)
    {
        $slide              = new Slide;
        $slide->name_vi        = $req['name_vi'];
        $slide->slug           = str_slug($req['name_vi']);
        $slide->description_vi = $req['description_vi'];
        $slide->link        = $req['link'];
        $slide->position    = $req['position'];
        $slide->display      = $req['display'];
        $slide->status      = $req['status'] == 1 ? 1 : 0;
        if($req->hasFile('image')){
            $image    = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/slide/'.$filename));
            $slide->image = ('upload/slide/'.$filename);
        }
        $slide->save();
        return redirect()->route('admin.slide.index');
    }

    public function update($id)
    {
        $slide = Slide::where('id', $id)->first();
        return view('admin.slide.add_edit_slide', compact('slide'));
    }
    public function postUpdate($id, Request $req)
    {
        $slide              = Slide::where('id', $id)->first();
        $slide->name_vi        = $req['name_vi'];
        $slide->description_vi = $req['description_vi'];
        $slide->link        = $req['link'];
        $slide->position    = $req['position'];
        $slide->display      = $req['display'];
        $slide->status      = $req['status'] == 1 ? 1 : 0;
        if($req->hasFile('image'))
        {
            if(file_exists($slide->image))
            {
                unlink($slide->image);
            }
            $image    = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/slide/'.$filename));
            $slide->image = ('upload/slide/'.$filename);
        }
        $req->validate([
            'position' => 'numeric|nullable|min:0|unique:slides,position,' .$slide->id,
        ]);
        $slide->save();
        return redirect()->route('admin.slide.index')->with('success', 'Sửa thành công');
    }

    public function destroy($id)
    {
        $result = Slide::findOrFail($id);
        if(file_exists($result->image))
        {
            unlink($result->image);
        }
        $result->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

