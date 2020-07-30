@extends('admin.partials.master')
@section('title', 'Quản lý giới thiệu')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Giới thiệu</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>Trang chủ</li>
                <li>Quản lý Giới thiệu</li>
                <li class="active">Danh mục</li>
            </ol>
            {{-- <a href="{{ route('admin.intro.create') }}" class="btn btn-primary">
                <i class=" fa fa-fw fa-plus"></i>
                Thêm mới
            </a> --}}
        </section>
        <section class="content-header">
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        @include('errors.message')
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="options">
                                            </div>
                                        </div>
                                        <div class="panel-body" style="overflow-x:auto;">
                                            <table class="table table-striped table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tên</th>
                                                    <th>Trạng thái</th>
                                                    <th>Cập nhật</th>
                                                    <th>Xử lý</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($intro as $key => $c)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $c->name_vi }}</td>
                                                        <td>
                                                            @if($c->status == 1)
                                                                <a href="#" title="Ẩn" id="status" data-id="{{ $c->id }}">
                                                                    <span id="status{{ $c->id }}"><span class="label label-success">Hiện</span></span>
                                                                </a>
                                                            @else
                                                                <a href="#" title="Hiện" id="status" data-id="{{ $c->id }}">
                                                                    <span id="status{{ $c->id }}"><span class="label label-danger">Ẩn</span></span>
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>{{ $c->updated_at }}</td>
                                                        <td>
                                                            <a href="{{ route('admin.intro.update', $c->slug)}}">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{ $intro->links() }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div><!-- /.content-wrapper -->
@endsection
