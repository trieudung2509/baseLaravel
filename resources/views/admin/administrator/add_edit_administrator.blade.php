@extends('admin.partials.master')
@section('title', 'Thêm admin')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <div class="page-heading">
                            <h1>Thêm admin</h1>
                            <div class="options">
                                <div class="btn-toolbar">
                                </div>
                            </div>
                        </div>
                        <ol class="breadcrumb">
                            <li>Trang chủ</li>
                            <li>Quản lý admin</li>
                            <li class="active">Thêm</li>
                        </ol>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                        </div>
                                        @include('errors.message')
                                        <div class="panel-body">
                                            <form role="form" class="form-horizontal" method="POST"
                                                  action="" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tên <span style="color: red;">*</span></label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Name" name="name" value="{{ isset($administrator->name) ? $administrator->name : '' }}" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Email </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Name" name="email" value="{{ isset($administrator->email) ? $administrator->email : '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="password" class="col-md-3 control-label">Password</label>
                                                        <div class="col-md-8">
                                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ isset($administrator->password) ? 'Nếu bạn muốn đổi mật khẩu hay nhập lại mật khẩu' : '' }}" name="password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

                                                        <div class="col-md-8">
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="xác nhận mật khẩu">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Trạng thái: </label>
                                                    <div class="btn-group" id="status" data-toggle="buttons">
                                                        <label class="btn btn-default btn-on btn-sm {{ isset($administrator->status) && $administrator->status == 1 ? 'active' : '' }}">
                                                            <input type="radio" value="1" name="status" {{ isset($administrator->status) && $administrator->status == 1 ? 'checked' : '' }}>ON</label>
                                                        <label class="btn btn-default btn-off btn-sm {{ isset($administrator->status) && $administrator->status == 0 ? 'active' : '' }}">
                                                            <input type="radio" value="0" name="status" {{ isset($administrator->status) && $administrator->status == 0 ? 'checked' : '' }}>OFF</label>
                                                    </div>
                                                </div>
                                                <div class="panel-footer">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-sm-offset-2">
                                                            <button class="btn-success btn">Lưu</button>
                                                            <a class="btn-default btn"
                                                               href="{{ route('admin.administrator.create') }}">
                                                                Hủy
                                                            </a>
                                                            <a class="btn-default btn" href="{{ route('admin.administrator.home') }}">Quay lại</a>
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
        <!-- Main content -->
    </div><!-- /.content-wrapper -->
@endsection
