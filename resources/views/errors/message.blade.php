@if(Session::has('success'))
    <div class="alert alert-success" style="margin-left: 30px; width: 95%;">{{ Session::get('success') }}</div>
@endif
@if(Session::has('error'))
    <div class="alert alert-warning" style="margin-left: 30px; width: 95%;">{{ Session::get('error') }}</div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Lỗi!</strong> Có lỗi trong quá trình nhập dữ liệu.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
