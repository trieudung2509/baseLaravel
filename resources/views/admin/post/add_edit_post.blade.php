@extends('admin.partials.master')
@section('title', 'Thêm bài viết')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>Thêm bài viết</h1>
                            <div class="options">
                                <div class="btn-toolbar">
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li>Trang chủ</li>
                            <li>Quản lý bài viết</li>
                            <li>Bài viết</li>
                            <li class="active">Thêm</li>
                        </ol>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                        </div>
                                        @include('errors.message')
                                        <div class="panel-body">
                                            <form role="form" class="form-horizontal" method="POST"
                                                  action=""
                                                  enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tên bài viết: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Nhập tên" name="name_vi" value="{{ isset($post->name_vi) ? $post->name_vi : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tên bài viết_en: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Nhập tên" name="name_en" value="{{ isset($post->name_en) ? $post->name_en : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Ảnh đại diện: </label>
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                    @if(isset($post->image))
                                                    <div class="form-group">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-8">
                                                            <img src="{{ asset($post->image) }}"
                                                                 style="height: 50px; width: 50px">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Vị trí: </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control"
                                                                   placeholder="Nhập vị trí" name="position" value="{{ isset($post->position) ? $post->position : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Giới thiệu: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Giới thiệu"
                                                                   name="title_vi" value="{{ isset($post->title_vi) ? $post->title_vi : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Giới thiệu_en: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Giới thiệu"
                                                                   name="title_en" value="{{ isset($post->title_en) ? $post->title_en : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Miêu tả: </label>
                                                        <div class="col-md-8">
                                                            <textarea name="description_vi" class="form-control " id="editor1">{{ isset($post->description_vi) ? $post->description_vi : '' }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Miêu tả_en: </label>
                                                        <div class="col-md-8">
                                                            <textarea name="description_en" class="form-control " id="editor2">{{ isset($post->description_en) ? $post->description_en : '' }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Danh mục: </label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="cate_post_id">
                                                                    @if (isset($post->cate_post_id))
                                                                        @foreach ($data as $cate)
                                                                            @if ($post->cate_post_id == $cate['id'])
                                                                                <option value="{{ $post->cate_post_id }}" selected>---- {{ $cate['name_vi'] }} ----</option>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                    <option value="0">Chọn danh mục</option>
                                                                <?php  menu($data);?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div style="margin: 20px 0px 20px 10px;">
                                                        <label class="col-md-3 control-label">Trạng thái: </label>
                                                        <div class="btn-group" id="status" data-toggle="buttons">
                                                            <label class="btn btn-default btn-on btn-sm {{ isset($post->status) && $post->status == 1 ? 'active' : '' }}">
                                                                <input type="radio" value="1" name="status" {{ isset($post->status) && $post->status == 1 ? 'checked' : '' }}>ON</label>
                                                            <label class="btn btn-default btn-off btn-sm {{ isset($post->status) && $post->status == 0 ? 'active' : '' }}">
                                                                <input type="radio" value="0" name="status" {{ isset($post->status) && $post->status == 0 ? 'checked' : '' }}>OFF</label>
                                                        </div>
                                                    </div>

                                                    <div style="margin: 20px 0px 20px 10px;">
                                                        <label class="col-md-3 control-label">Tin hot: </label>
                                                        <div class="btn-group" id="status" data-toggle="buttons">
                                                            <label class="btn btn-default btn-on btn-sm {{ isset($post->is_hot) && $post->is_hot == 1 ? 'active' : '' }}">
                                                                <input type="radio" value="1" name="is_hot" {{ isset($post->is_hot) && $post->is_hot == 1 ? 'checked' : '' }}>ON</label>
                                                            <label class="btn btn-default btn-off btn-sm {{ isset($post->is_hot) && $post->is_hot == 0 ? 'active' : '' }}">
                                                                <input type="radio" value="0" name="is_hot" {{ isset($post->is_hot) && $post->is_hot == 0 ? 'checked' : '' }}>OFF</label>
                                                        </div>
                                                    </div>
                                                    <div style="margin: 20px 0px 20px 10px;">
                                                        <label class="col-md-3 control-label">Hiển thị trang chủ: </label>
                                                        <div class="btn-group" id="status" data-toggle="buttons">
                                                            <label class="btn btn-default btn-on btn-sm {{ isset($post->is_home) && $post->is_home == 1 ? 'active' : '' }}">
                                                                <input type="radio" value="1" name="is_home" {{ isset($post->is_home) && $post->is_home == 1 ? 'checked' : '' }}>ON</label>
                                                            <label class="btn btn-default btn-off btn-sm {{ isset($post->is_home) && $post->is_home == 0 ? 'active' : '' }}">
                                                                <input type="radio" value="0" name="is_home" {{ isset($post->is_home) && $post->is_home == 0 ? 'checked' : '' }}>OFF</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Title_SEO: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Title SEO"
                                                                   name="title_seo_vi" value="{{ isset($post->title_seo_vi) ? $post->title_seo_vi : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Title_SEO_en: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Title SEO"
                                                                   name="title_seo_en" value="{{ isset($post->title_seo_en) ? $post->title_seo_en : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_key: </label>
                                                        <div class="col-md-8">
                                                        <textarea class="form-control" placeholder="Meta_key" name="meta_key_vi">
                                                            {{ isset($post->meta_key_vi) ? $post->meta_key_vi : '' }}
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_key_en: </label>
                                                        <div class="col-md-8">
                                                        <textarea class="form-control" placeholder="Meta_key" name="meta_key_en">
                                                           {{ isset($post->meta_key_en) ? $post->meta_key_en : '' }}
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_Des: </label>
                                                        <div class="col-md-8">
                                                        <textarea class="form-control" placeholder="Meta_Des" name="meta_des_vi">
                                                            {{ isset($post->meta_des_vi) ? $post->meta_des_vi : '' }}
                                                        </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_Des_en: </label>
                                                        <div class="col-md-8">
                                                        <textarea class="form-control" placeholder="Meta_Des" name="meta_des_en">
                                                           {{ isset($post->meta_des_en) ? $post->meta_des_en : '' }}
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <button class="btn-success btn">Lưu</button>
                                                            <a class="btn-default btn" href="{{ route('admin.post.create') }}">Hủy</a>
                                                            <a class="btn-default btn" href='{{  route('admin.post.index') }}'>Quay lại</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );
    </script>
    <script>
        CKEDITOR.replace( 'editor2', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );
        CKEDITOR.replace( 'editor3', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );
    </script>
@endsection
