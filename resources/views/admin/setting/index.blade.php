@extends('admin.partials.master')
@section('title', 'Cấu hình web')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>Cấu hình web</h1>
                            <div class="options">
                                <div class="btn-toolbar">
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li>Trang chủ</li>
                            <li class="active">Cấu hình</li>
                        </ol>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                        </div>
                                        @include('errors.message')
                                        <div class="panel-body">
                                            <form role="form" class="form-horizontal" method="post"
                                                  action="{{ route('admin.setting.update') }}"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Title: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Tên công ty" name="name_vi" value="{{ $settings->name_vi }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email: </label>
                                                        <div class="col-md-8">
                                                            <input type="email" class="form-control"
                                                                   placeholder="Email" name="email" value="{{ $settings->email }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Địa chỉ: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Địa chỉ" name="address_vi" value="{{ $settings->address_vi }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Hotline: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Hotline" name="phone" value="{{ $settings->phone }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">website: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="website" name="website" value="{{ $settings->website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Facebook: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="fb" name="fb" value="{{ $settings->fb }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Slogan: </label>
                                                        <div class="col-md-8">
                                                            <textarea class="form-control" placeholder="Slogan" name="slogan">{{ $settings->slogan_vi }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">

                                                        <label class="col-md-3 control-label">Mô tả </label>

                                                        <div class="col-md-8">
                                                            <textarea class="form-control" placeholder="description" name="description" id="description">{{ $settings->description }}</textarea>
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Logo: </label>
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control" name="logo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-8">
                                                            <img src="{{asset($settings->logo)}}" style="width: 50px; height: 50px"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Icon: </label>
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control" name="icon">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-8">
                                                            <img src="{{asset($settings->icon)}}" style="width: 50px; height: 50px"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Title_SEO: </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" placeholder="Title SEO"
                                                                   name="title_seo" value="{{ $settings->title_seo }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_key: </label>
                                                        <div class="col-md-8">
                                          <textarea type="text" class="form-control" placeholder="Meta_key"
                                                    name="meta_key">{{ $settings->meta_key }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Meta_des: </label>
                                                        <div class="col-md-8">
                                          <textarea class="form-control" placeholder="Meta_Des"
                                                    name="meta_des">{{ $settings->meta_des }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <button class="btn-success btn">Lưu</button>
                                                            <a class="btn-default btn" href="{{ route('admin.setting') }}">Hủy</a>
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
        CKEDITOR.replace( 'description', {
            filebrowserBrowseUrl: '{{ route('ckfinder-customer') }}',
        } );
    </script>
@endsection
