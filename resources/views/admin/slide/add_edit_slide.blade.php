@extends('admin.partials.master')
@section('title', 'Thêm')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>Thêm</h1>
                            <div class="options">
                                <div class="btn-toolbar">
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li>Trang chủ</li>
                            <li>Slide+Ảnh</li>
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
                                                        <label class="col-md-3 control-label">Tên</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Nhập tên" name="name_vi" value="{{ isset($slide->name_vi) ? $slide->name_vi : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Miêu tả</label>
                                                        <div class="col-md-8">
                                                            <textarea name="description_vi" class="form-control "
                                                    id="editor1">{{ isset($slide->description_vi) ? $slide->description_vi : '' }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Link chi tiết</label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Nhập tên" name="link" value="{{ isset($slide->link) ? $slide->link : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Vị trí: </label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control"
                                                                   placeholder="Nhập vị trí" name="position" value="{{ isset($slide->position) ? $slide->position : '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Ảnh bìa: </label>
                                                        <div class="col-md-8">
                                                            <input type="file" class="form-control" name="image">
                                                        </div>
                                                    </div>
                                                    @if(isset($slide->image))
                                                    <div class="form-group">
                                                        <div class="col-md-3"></div>
                                                        <div class="col-md-8">
                                                            <img src="{{ asset($slide->image) }}"
                                                                 style="height: 50px; width: 50px">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Trạng thái: </label>
                                                        <div class="btn-group" id="status" data-toggle="buttons" style="margin-left: 15px;">
                                                            <label class="btn btn-default btn-on btn-sm {{ isset($slide->status) && $slide->status == 1 ? 'active' : '' }}">
                                                                <input type="radio" value="1" name="status" {{ isset($slide->status) && $slide->status == 1 ? 'checked' : '' }}>ON</label>
                                                            <label class="btn btn-default btn-off btn-sm {{ isset($slide->status) && $slide->status == 0 ? 'active' : '' }}">
                                                                <input type="radio" value="0" name="status" {{ isset($slide->status) && $slide->status == 0 ? 'checked' : '' }}>OFF</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Danh mục: </label>
                                                        <div class="col-md-8">
                                                            <select class="form-control" name="display">
                                                                <option value="1" {{ isset($slide->display) && $slide->display == 1 ? 'selected' : '' }}>Slide</option>
                                                                <option value="2" {{ isset($slide->display) && $slide->display == 2 ? 'selected' : '' }}>Slogan</option>
                                                                <option value="3" {{ isset($slide->display) && $slide->display == 3 ? 'selected' : '' }}>Video</option>
                                                                <option value="4" {{ isset($slide->display) && $slide->display == 4 ? 'selected' : '' }}>Hãng</option>
                                                                <option value="5" {{ isset($slide->display) && $slide->display == 5 ? 'selected' : '' }}>Banner quảng cáo</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <button class="btn-success btn">Lưu</button>
                                                            <a class="btn-default btn"
                                                               href="{{ route('admin.slide.create') }}">
                                                                Hủy
                                                            </a>
                                                            <a class="btn-default btn" href="{{ route('admin.slide.index') }}">Quay lại</a>
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
@endsection
