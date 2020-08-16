<header class="main-header">
    <div class="header-top">
        <div class="box-tools d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-left">
                        <div class="txt-position"><span class="fas fa-map-marker-alt mr-1"></span>Hà nội</div>
                        <div class="txt-date">Today ({{ date('D j F Y') }}) </div>
                    </div>

                    <div class="col-12 col-md-6 col-right">
                        <div class="box-language dropdown">
                            <button class="btn-dropdown dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-language mr-1"></span>VN<span class="fas fa-angle-down ml-1"></span></button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">VN</a><a class="dropdown-item" href="#">ENG</a></div>
                        </div>

                        <div class="box-social">
                            <ul>
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li><a href="#"><span class="fas fa-rss"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-logo">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-4 col-logo pr-0"><a class="over" href="/"><img src="frontend/images/img-logo.png" alt="Thương Gia 24h"></a></div>
                    <div class="col-6 col-sm-6 col-md-8 col-banner">
                        <div class="box-banner">
                            <div class="img d-none d-md-block" style="background-image: url(frontend/images/img-banner-header-top.jpg)"></div>
                            <div class="box-lang-sp d-block d-md-none">
                                <div class="btn-group">
                                    <button class="btn active" type="button"><span>VN</span></button>
                                    <button class="btn" type="button"><span>ENG</span></button>
                                </div>
                            </div>
                            <div class="box-search">
                                <input class="form-control" type="text">
                                <div class="btn-search btn-toggle-search-sp d-block d-md-none"><span class="fas fa-search"></span></div>
                                <button class="btn-search d-none d-md-block"><span class="fas fa-search"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.header-top-->

    <div class="header-nav">
        <div class="container">
            <nav class="main-nav-style on-sp d-block d-lg-none">
                <ul>
                    <li class="active"><a href="/"><span class="ic fas fa-home"></span><span class="txt">Home</span></a></li>
                    <li><a href="#"><span class="ic fas fa-newspaper"></span><span class="txt">Tin mới</span></a></li>
                    <li><a href="#"><span class="ic fas fa-chart-bar"></span><span class="txt">Kinh tế</span></a></li>
                    <li><a href="#"><span class="ic fas fa-calendar-alt"></span><span class="txt">VH - XH</span></a></li>
                    <li><a class="toggle-offcanvas" href="#"><span class="ic fas fa-bars"></span><span class="txt">Mở rộng</span></a></li>
                </ul>
            </nav>
            <div class="d-none d-lg-block">
                <nav class="main-nav-style">
                    <ul>
                        <li class="active"><a href="/"><span class="txt fas fa-home"></span></a></li>
                        @foreach ($categories as $key => $cate)
                            @if ($key > 6)
                                <li>
``                                  <a href="#"><span class="txt fas fa-ellipsis-h"></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#"><span class="txt">{{ $cate->name_vi }}</span></a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href=""><span class="txt">{{ $cate->name_vi }}</span></a></li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /.header-nav-->
</header>
