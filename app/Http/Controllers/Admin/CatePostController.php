<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cate_postRequest;
use App\Models\Cate_post;
use Illuminate\Http\Request;
use Image,File;
class CatePostController extends Controller
{
    public function index() {
        $cate_post = Cate_post::orderBy('created_at','desc')->get();
        return view('admin.cate_post.index',compact('cate_post'));
    }
    public function create()
    {
        $data=Cate_post::select('id','name_vi','parent_id')->get()->toArray();
        return view('admin.cate_post.add_edit_cate_post', compact('data'));
    }

    public function postCreate(Cate_postRequest $req){
        $cate_post                 = new Cate_post;
        $cate_post->name_vi        = $req['name_vi'];
        $cate_post->name_en        = $req['name_en'];
        $cate_post->parent_id      = $req->parent_id;
        $cate_post->slug_vi        = str_slug($cate_post->name_vi);
        $cate_post->slug_en        = str_slug($cate_post->name_en);
        $cate_post->description_vi = $req['description_vi'];
        $cate_post->description_en = $req['description_en'];
        $cate_post->position       = $req['position'];
        $cate_post->status         = $req['status'] == 1 ? 1 : 0;
        $cate_post->title_seo_vi   = $req['title_seo_vi'];
        $cate_post->title_seo_en   = $req['title_seo_en'];
        $cate_post->meta_key_vi    = $req['meta_key_vi'];
        $cate_post->meta_key_en    = $req['meta_key_en'];
        $cate_post->meta_des_vi    = $req['meta_des_vi'];
        $cate_post->meta_des_en    = $req['meta_des_en'];

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/catepost/'.$filename));
            $cate_post->image = ('upload/catepost/'.$filename);
        } else {
            $cate_post->image = ('upload/catepost/avatar5.png');
        }
        $cate_post->save();
        return redirect()->route('admin.cate_post.home')->with('success','Thêm thành công');
    }
    public function update($id)
    {
        $data      = Cate_post::select('id','name_vi','parent_id')->get();
        $cate_post = Cate_post::findOrFail($id);
        return view('admin.cate_post.add_edit_cate_post', compact('cate_post', 'data'));
    }

    public function postUpdate($id, Request $req)
    {
        $cate_post                 = Cate_post::findOrFail($id);
        $cate_post->name_vi        = $req['name_vi'];
        $cate_post->name_en        = $req['name_en'];
        $cate_post->parent_id      = $req->parent_id;
        $cate_post->slug_vi        = str_slug($cate_post->name_vi);
        $cate_post->slug_en        = str_slug($cate_post->name_en);
        $cate_post->description_vi = $req['description_vi'];
        $cate_post->description_en = $req['description_en'];
        $cate_post->position       = $req['position'];
        $cate_post->status         = $req['status'] == 1 ? 1 : 0;
        $cate_post->title_seo_vi   = $req['title_seo_vi'];
        $cate_post->title_seo_en   = $req['title_seo_en'];
        $cate_post->meta_key_vi    = $req['meta_key_vi'];
        $cate_post->meta_key_en    = $req['meta_key_en'];
        $cate_post->meta_des_vi    = $req['meta_des_vi'];
        $cate_post->meta_des_en    = $req['meta_des_en'];
        if($req->hasFile('image')){
            if(file_exists($cate_post->image))
            {
                unlink($cate_post->image);
            }
            $image    = $req->file('image');
            $filename = date('Y_d_m_H_i_s').'-'. $image->getClientOriginalName();
            Image::make($image)->save(public_path('upload/catepost/'.$filename));

            $cate_post->image = ('upload/catepost/'.$filename);

        }
        $req->validate([
            'name_vi'     => 'required|unique:cate_posts,name_vi,' .$cate_post->id
        ]);
        $cate_post->save();

        return redirect()->route('admin.cate_post.home')->with('success','Sửa thành công');
    }

    public function destroy($id) {
        $result = Cate_post::findOrFail($id);
        $result2 = Cate_post::where('parent_id', $id)->first();
        if (file_exists($result->image))
        {
            unlink($result->image);
        }
        if (isset($result2))
        {
            if(file_exists($result2->image))
            {
                unlink($result2->image);
            }
            $result2->delete();
        }
        $result->delete();

        return redirect()->back()->with('success', 'Xóa danh mục thành công');
    }

    public function status(Request $req) {
        if ($req->ajax()) {
            $result = Cate_post::find($req->id);
            if ($result->status == 0)
            {
                $result->status = 1;
            } else {
                $result->status = 0;
            }
            $result->save();

            return response($result);
        }
    }
}
