@extends('admin.partials.master')
@section('title', 'Sửa')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>Sửa</h1>
                            <div class="options">
                                <div class="btn-toolbar">
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li>Trang chủ</li>
                            <li>Giới thiệu</li>
                            <li class="active">Sửa</li>
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
                                                  action="{{ route('admin.intro.postUpdate', $intro->slug) }}"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tiêu đề: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Nhập tên" name="name_vi" value="{{ $intro->name_vi }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Vị trí: </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control" placeholder="Nhập vị trí"
                                                                   name="position" value="{{ $intro->position }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Nội dung: </label>
                                                        <div class="col-md-8">
                                                     <textarea class="form-control" placeholder="Miêu tả"
                                                               name="description_vi" id="editor1">{{ $intro->description_vi }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div style="margin-top: 20px;margin-bottom: 20px;">
                                                        <label class="col-md-3 control-label">Trạng thái: </label>
                                                        <div class="btn-group" id="status" data-toggle="buttons">
                                                            <label class="btn btn-default btn-on btn-sm {{ isset($intro->status) && $intro->status == 1 ? 'active' : '' }}">
                                                                <input type="radio" value="1" name="status" {{ isset($intro->status) && $intro->status == 1 ? 'checked' : '' }}>ON</label>
                                                            <label class="btn btn-default btn-off btn-sm {{ isset($intro->status) && $intro->status == 0 ? 'active' : '' }}">
                                                                <input type="radio" value="0" name="status" {{ isset($intro->status) && $intro->status == 0 ? 'checked' : '' }}>OFF</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Title_SEO: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Title SEO"
                                                                   name="title_seo" value="{{ $intro->title_seo_vi }}">
                                                            @if($errors->has('title_seo'))
                                                                <strong>
                                                            <span class="help-block">
                                                                {{ $errors->first('title_seo') }}
                                                            </span>
                                                                </strong>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_key: </label>
                                                        <div class="col-md-8">
                                                    <textarea type="text" class="form-control" placeholder="Meta_key"
                                                              name="meta_key">{{ $intro->meta_key_vi }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_des: </label>
                                                        <div class="col-md-8">
                                                    <textarea class="form-control" placeholder="Meta_Des"
                                                              name="meta_des">{{ $intro->meta_des_vi }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <button class="btn-success btn">Lưu</button>
                                                            <a class="btn-default btn"
                                                               href="{{ route('admin.intro.create') }}">
                                                                Hủy
                                                            </a>
                                                            <a class="btn-default btn" href="{{ route('admin.intro.index') }}">Quay lại</a>
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
        } );CKEDITOR.replace( 'editor3', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );CKEDITOR.replace( 'editor2', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );
    </script>
@endsection
