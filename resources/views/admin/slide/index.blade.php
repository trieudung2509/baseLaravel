@extends('admin.partials.master')
@section('title', 'Quản lý Ảnh+Slide+Ads')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Quản lý Ảnh+Slide</h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>Trang chủ</li>
                <li>Quản lý Ảnh+Slide</li>
            </ol>
            <a href="{{ route('admin.slide.create') }}" class="btn btn-primary">
                <i class=" fa fa-fw fa-plus"></i>
                Thêm mới
            </a>
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
                                                    <th>Ảnh</th>
                                                    <th>Xuất hiện</th>
                                                    <th>Vị trí</th>
                                                    <th>Trạng thái</th>
                                                    <th>Cập nhật</th>
                                                    <th>Xử lý</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($slide as $key => $c)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td style="width: 30%;">
                                                            <img src="{{ asset($c->image) }}" style="height: 60px; width: 120px;">
                                                        </td>
                                                        <td>
                                                            @if($c->display == 1)
                                                                {{ "Slide" }}
                                                            @elseif ($c->display == 2)
                                                                {{ "Slogan" }}
                                                            @elseif ($c->display == 3)
                                                                {{ "Video"}}
                                                            @elseif ($c->display == 4)
                                                                {{ "Hãng"}}
                                                            @elseif ($c->display == 5)
                                                                {{ "Banner quảng cáo"}}
                                                            @endif
                                                        </td>
                                                        <td>{{ $c->position }}</td>
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
                                                            <a href="{{ route('admin.slide.update', $c->id)}}">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a href="{{ route('admin.slide.destroy', $c->id) }}"
                                                               type="button"
                                                               onclick="return confirm('Bạn có muốn xóa không ?')">
                                                                <i class="fa fa-times-circle"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            {{ $slide->links() }}
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
