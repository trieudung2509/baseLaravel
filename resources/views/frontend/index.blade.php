<!DOCTYPE html>
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><![endif]-->
    <title>Thương Gia 24h</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <!-- WEB FONTS-->
    <!-- STYLESHEETS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.min.css') }}">
    <!-- link(rel="stylesheet", href="temp/slick.min.css")-->
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
</head>

<body>
<div class="wrapper">
    <header class="main-header">
        <div class="header-top">
            <div class="box-tools d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-left">
                            <div class="txt-position"><span class="fas fa-map-marker-alt mr-1"></span>Hà nội</div>
                            <div class="txt-date">Today (Sunday 19 April 2020)</div>
                        </div>

                        <div class="col-12 col-md-6 col-right">
                            <div class="box-language dropdown">
                                <button class="btn-dropdown dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-language mr-1"></span>English<span class="fas fa-angle-down ml-1"></span></button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
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
                                <div class="img" style="background-image: url(frontend/images/img-banner-header-top.jpg)"></div>
                                <div class="box-search d-none d-lg-block">
                                    <input class="form-control" type="text">
                                    <button class="btn-search"><span class="fas fa-search"></span></button>
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
                            <li><a href="#"><span class="txt">Kinh tế</span></a></li>
                            <li><a href="#"><span class="txt">Doanh nghiệp</span></a></li>
                            <li><a href="#"><span class="txt">Doanh nhân</span></a></li>
                            <li><a href="#"><span class="txt">Văn hóa - Xã hội</span></a></li>
                            <li><a href="#"><span class="txt">Bất động sản</span></a></li>
                            <li><a href="#"><span class="txt">Thể thao - Du lịch</span></a></li>
                            <li><a href="#"><span class="txt">Video</span></a></li>
                            <li><a href="#"><span class="txt fas fa-ellipsis-h"></span></a>
                                <ul class="sub-menu">
                                    <li><a href="#"><span class="txt">Venom Power</span></a></li>
                                    <li><a href="#"><span class="txt">Haida</span></a></li>
                                    <li><a href="#"><span class="txt">UniGrip</span></a></li>
                                    <li><a href="#"><span class="txt">BFGoodrich</span></a></li>
                                    <li><a href="#"><span class="txt">RoadForce</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /.header-nav-->
    </header>
    <!-- /.main-header-->

    <div class="offcanvas">
        <div class="oc-inner">
            <div class="oc-header">
                <div class="txt-title-top">Menu</div>
                <button class="over btn-close toggle-offcanvas"><span class="fas fa-long-arrow-alt-right"></span></button>
            </div>
            <div class="oc-body">
                <nav class="main-nav-style">
                    <ul>
                        <li class="active"><a href="/"><span class="txt fas fa-home"></span></a></li>
                        <li><a href="#"><span class="txt">Kinh tế</span></a></li>
                        <li><a href="#"><span class="txt">Doanh nghiệp</span></a></li>
                        <li><a href="#"><span class="txt">Doanh nhân</span></a></li>
                        <li><a href="#"><span class="txt">Văn hóa - Xã hội</span></a></li>
                        <li><a href="#"><span class="txt">Bất động sản</span></a></li>
                        <li><a href="#"><span class="txt">Thể thao - Du lịch</span></a></li>
                        <li><a href="#"><span class="txt">Video</span></a></li>
                        <li><a href="#"><span class="txt fas fa-ellipsis-h"></span></a>
                            <ul class="sub-menu">
                                <li><a href="#"><span class="txt">Venom Power</span></a></li>
                                <li><a href="#"><span class="txt">Haida</span></a></li>
                                <li><a href="#"><span class="txt">UniGrip</span></a></li>
                                <li><a href="#"><span class="txt">BFGoodrich</span></a></li>
                                <li><a href="#"><span class="txt">RoadForce</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- /.offcanvas-->

    <section class="con-banner-top py-3">
        <div class="container"><a class="over" href="#"><img class="w-100" src="frontend/images/img-banner-top.jpg" alt="img-banner-top"></a></div>
    </section>
    <!-- /.con-banner-top-->

    <div class="con-contents-sidebar">
        <div class="container">
            <div class="row gutters-sm">
                <div class="col-12 col-md-8 col-contents">
                    <section class="con-news-sp d-block d-md-none">
                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/400/news?random=1" alt="demo"></a>
                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur</a></h4>
                        </div>

                        <div class="box-sub">
                            <ul class="row gutters-xs list">
                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                                <div class="col-6 item">
                                    <div class="box-inner"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                    </div>
                                </div>

                            </ul>
                        </div>
                    </section>
                    <div class="con-adv-sp bg-gray p-3 mt-2 d-block d-md-none"><a class="over" href="#"><img class="w-100" src="images/img-ad-02.jpg" alt="img-ad-02.jpg"></a></div>
                    <!-- /.con-news-sp-->
                    <section class="con-feature-sp d-block d-md-none">
                        <h3 class="txt-title-top">Đáng chú ý<span class="ic fas fa-caret-down ml-2"></span></h3>
                        <div class="box-list">
                            <ul class="list">
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit, amet consectetur adipisicing elit.</a></h4>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- /.con-feature-sp-->
                    <section class="con-economy">
                        <h3 class="heading-01"><span class="lg">Kinh tế</span></h3>
                        <div class="box-list">
                            <div class="row gutters-sm list">
                                <div class="col-12 col-md-6 col-feature">
                                    <div class="box-feature">
                                        <div class="item">
                                            <div class="row no-gutters">
                                                <div class="col-4 col-md-12"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a></div>
                                                <div class="col-8 col-md-12 col-detail">
                                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis modi repellat ea numquam quidem nobis maxime minus officia</a></h4>
                                                    <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-sub">
                                    <div class="row gutters-sm">
                                        <div class="col-12 col-md-6">
                                            <div class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Kinh tế - 12 giờ trước</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Kinh tế - 12 giờ trước</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Kinh tế - 12 giờ trước</div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Kinh tế - 12 giờ trước</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.con-economy-->
                    <section class="con-related d-none d-md-block">
                        <div class="box-list">
                            <div class="list">
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=3" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=4" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=5" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /con-related-->

                    <section class="con-enterprise">
                        <h3 class="heading-01"><span class="lg">Doanh nghiệp</span></h3>
                        <div class="box-list">
                            <div class="row gutters-xs list">
                                <div class="col-12 col-md-8 col-feature">
                                    <div class="item">
                                        <div class="box-inner row no-gutters">
                                            <div class="col-4 col-md-12"><a class="box-thumb" href="#">
                                                    <div class="img-thumb" style="background-image: url(https://loremflickr.com/500/320/news?random=1)"></div></a></div>
                                            <div class="col-8 col-md-12 col-detail">
                                                <div class="box-detail">
                                                    <div class="txt-meta d-none d-md-block">Đoàn Lan Hương<span class="date">20 April 2020</span></div>
                                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis modi repellat ea numquam quidem nobis maxime minus officia</a></h4>
                                                    <div class="txt-meta d-block d-md-none">20 April 2020</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-sub">
                                    <div class="item">
                                        <div class="box-inner"><a class="box-thumb d-none d-md-block" href="#">
                                                <div class="img-thumb" style="background-image: url(https://loremflickr.com/500/320/news?random=1)"></div></a>
                                            <div class="box-detail">
                                                <div class="txt-meta d-none d-md-block">Đoàn Lan Hương<span class="date">20 April 2020</span></div>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="box-inner"><a class="box-thumb d-none d-md-block" href="#">
                                                <div class="img-thumb" style="background-image: url(https://loremflickr.com/500/320/news?random=2)"></div></a>
                                            <div class="box-detail">
                                                <div class="txt-meta d-none d-md-block">Đoàn Lan Hương<span class="date">20 April 2020</span></div>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="box-inner"><a class="box-thumb d-none d-md-block" href="#">
                                                <div class="img-thumb" style="background-image: url(https://loremflickr.com/500/320/news?random=3)"></div></a>
                                            <div class="box-detail">
                                                <div class="txt-meta d-none d-md-block">Đoàn Lan Hương<span class="date">20 April 2020</span></div>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="box-inner"><a class="box-thumb d-none d-md-block" href="#">
                                                <div class="img-thumb" style="background-image: url(https://loremflickr.com/500/320/news?random=4)"></div></a>
                                            <div class="box-detail">
                                                <div class="txt-meta d-none d-md-block">Đoàn Lan Hương<span class="date">20 April 2020</span></div>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</a></h4>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.con-enterprise-->
                    <section class="con-related d-none d-md-block">
                        <div class="box-list">
                            <div class="list">
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=3" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=4" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=5" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /con-related-->

                    <div class="con-sponsor d-none d-md-block">
                        <div class="txt"><span>Nội dung được tài trợ</span></div>
                        <div class="box-dots"></div>
                    </div>
                    <!-- /.con-sponsor-->

                    <section class="con-business">
                        <!-- only show on mobile-->
                        <h3 class="heading-01 d-block d-md-none"><span class="lg">Doanh nhân</span></h3>
                        <div class="row gutters-sm">
                            <div class="col-12 col-md-6 col-main">
                                <!-- only show on pc-->
                                <h3 class="heading-02 d-none d-md-block"><span class="lg"><span class="ic fas fa-signal mr-2"></span>Doanh nhân</span></h3>
                                <!-- only show on pc-->
                                <div class="box-body d-none d-md-block">
                                    <div class="box-feature"><a href="#"><img class="img-feature" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a></div>
                                    <div class="box-list">
                                        <ul class="list">
                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- only show on mobile-->
                                <div class="box-feature-sp row no-gutters d-flex d-md-none">
                                    <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=45" alt="demo"></a></div>
                                    <div class="col-8 col-detail">
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        <div class="txt-meta">Doanh nhân - 12 giờ trước</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-sub">
                                <ul class="list">
                                    <li class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        <div class="txt-meta d-none d-md-block">Doanh nhân - 12 giờ trước</div>
                                    </li>

                                    <li class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        <div class="txt-meta d-none d-md-block">Doanh nhân - 12 giờ trước</div>
                                    </li>

                                    <li class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        <div class="txt-meta d-none d-md-block">Doanh nhân - 12 giờ trước</div>
                                    </li>

                                    <li class="item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></a>
                                        <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        <div class="txt-meta d-none d-md-block">Doanh nhân - 12 giờ trước</div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </section>
                    <!-- /.con-business-->
                    <section class="con-related d-none d-md-block">
                        <div class="box-list">
                            <div class="list">
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=3" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=4" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=5" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /con-related-->

                    <div class="con-sponsor d-none d-md-block">
                        <div class="txt"><span>Nội dung được tài trợ</span></div>
                        <div class="box-dots"></div>
                    </div>
                    <!-- /.con-sponsor-->

                    <section class="con-sociocultural">
                        <h3 class="heading-01"><span class="lg">Văn hóa xã hội</span></h3>
                        <!-- only show on mobile-->
                        <div class="box-feature-sp row no-gutters d-flex d-md-none">
                            <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a></div>
                            <div class="col-8 col-detail">
                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                <div class="txt-meta">Doanh nhân - 12 giờ trước</div>
                            </div>
                        </div>
                        <div class="box-list">
                            <ul class="row gutters-xs list">
                                <li class="col-12 col-md-4 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius, nam odio, cupiditate impedit atque ut autem, veritatis consectetur vel voluptatum error. </a></h4>
                                    <div class="txt-meta d-none d-md-block">Văn hóa xã hội - 12 giờ trước</div>
                                </li>

                                <li class="col-12 col-md-4 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></a>
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius, nam odio, cupiditate impedit atque ut autem, veritatis consectetur vel voluptatum error. </a></h4>
                                    <div class="txt-meta d-none d-md-block">Văn hóa xã hội - 12 giờ trước</div>
                                </li>

                                <li class="col-12 col-md-4 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></a>
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius, nam odio, cupiditate impedit atque ut autem, veritatis consectetur vel voluptatum error. </a></h4>
                                    <div class="txt-meta d-none d-md-block">Văn hóa xã hội - 12 giờ trước</div>
                                </li>

                                <li class="col-12 col-md-4 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></a>
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius, nam odio, cupiditate impedit atque ut autem, veritatis consectetur vel voluptatum error. </a></h4>
                                    <div class="txt-meta d-none d-md-block">Văn hóa xã hội - 12 giờ trước</div>
                                </li>

                                <li class="col-12 col-md-4 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=6" alt="demo"></a>
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius, nam odio, cupiditate impedit atque ut autem, veritatis consectetur vel voluptatum error. </a></h4>
                                    <div class="txt-meta d-none d-md-block">Văn hóa xã hội - 12 giờ trước</div>
                                </li>

                            </ul>
                        </div>
                    </section>
                    <!-- /.con-sociocultural-->
                    <section class="con-related d-none d-md-block">
                        <div class="box-list">
                            <div class="list">
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=3" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=4" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row gutters-sm">
                                        <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320?random=5" alt="demo"></a></div>
                                        <div class="col-8">
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium nam et obcaecati, consequatur fugit dolore amet soluta?</a></h4>
                                            <div class="txt-meta">Kinh tế - 12 giờ trước</div>
                                            <div class="content">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe molestias hic doloremque modi tenetur repudiandae quaerat! Itaque dignissimos, sed quae doloremque non labore! Iusto, sunt. Incidunt hic nam esse maxime?</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /con-related-->

                    <div class="con-sponsor d-none d-md-block">
                        <div class="txt"><span>Nội dung được tài trợ</span></div>
                        <div class="box-dots"></div>
                    </div>
                    <!-- /.con-sponsor-->

                    <div class="con-travel-sports">
                        <h3 class="heading-01"><span class="lg">Thể thao du lịch</span></h3>
                        <!-- only show on mobile-->
                        <div class="box-feature-sp row no-gutters d-flex d-md-none">
                            <div class="col-4"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a></div>
                            <div class="col-8 col-detail">
                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                <div class="txt-meta">Doanh nhân - 12 giờ trước</div>
                            </div>
                        </div>
                        <div class="box-slider slider-common travel-sports-slider-js">
                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=6" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb d-none d-md-block"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=7" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta d-none d-md-block">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                        </div>
                    </div>
                    <!-- /.con-travel-sports-->
                    <div class="con-sponsor d-none d-md-block">
                        <div class="txt"><span>Nội dung được tài trợ</span></div>
                        <div class="box-dots"></div>
                    </div>
                    <!-- /.con-sponsor-->

                    <section class="con-real-estate">
                        <h3 class="heading-01"><span class="lg">Bất động sản</span></h3>
                        <div class="box-list">
                            <div class="row gutters-sm">
                                <div class="col-12 col-md-7 col-lg-8 col-main">
                                    <div class="box-feature">
                                        <div class="list">
                                            <div class="item row no-gutters">
                                                <div class="col-4 col-md-12"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a></div>
                                                <div class="col-8 col-md-12 col-detail">
                                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis modi repellat ea numquam quidem nobis maxime minus officia</a></h4>
                                                    <div class="txt-meta">Bất động sản - 12 giờ trước</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-sub">
                                        <div class="row gutters-sm list">
                                            <div class="col-12 col-md-6 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Bất động sản - 12 giờ trước</div>
                                            </div>

                                            <div class="col-12 col-md-6 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Bất động sản - 12 giờ trước</div>
                                            </div>

                                            <div class="col-12 col-md-6 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Bất động sản - 12 giờ trước</div>
                                            </div>

                                            <div class="col-12 col-md-6 item"><a class="box-thumb d-none d-md-block" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></a>
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                                <div class="txt-meta d-none d-md-block">Bất động sản - 12 giờ trước</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5 col-lg-4 col-related d-none d-md-block">
                                    <div class="box-related">
                                        <ul class="list">
                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                            <li class="item">
                                                <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /.con-real-estate-->
                    <div class="con-sponsor d-none d-md-block">
                        <div class="txt"><span>Nội dung được tài trợ</span></div>
                        <div class="box-dots"></div>
                    </div>
                    <!-- /.con-sponsor-->

                    <div class="con-video-slider d-block d-md-none">
                        <h3 class="heading-01"><span class="lg">Video</span></h3>
                        <div class="box-slider slider-common con-video-slider-js">
                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=2" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=3" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=4" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=5" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=6" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                            <div class="slide-item"><a class="inner-item" href="#">
                                    <div class="box-thumb"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=7" alt="demo"></div>
                                    <div class="box-detail">
                                        <h4 class="txt-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam molestiae voluptatibus repudiandae rem consequatur omnis</h4>
                                        <div class="txt-meta">Thể thao du lịch - 12 giờ trước</div>
                                    </div></a></div>

                        </div>
                    </div>
                    <!-- /.con-video-slider-->
                </div>

                <div class="col-12 col-md-4 col-sidebar d-none d-md-block">
                    <aside class="con-aside-news">
                        <h3 class="heading-02 orange"><span class="lg"><span class="ic fas fa-align-left mr-2"></span>Tin mới</span></h3>

                        <div class="box-list">
                            <ul class="list">
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                                <li class="item">
                                    <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa eius</a><br><span class="badge badge-danger label-hot">HOT</span></h4>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- /.con-aside-news--><a class="over" href="#"><img class="w-100 mt-3" src="frontend/images/img-ad-01.jpg" alt="img-ad-01.jpg"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="con-videos d-none d-md-block"><img class="w-100" src="images/img-video.jpg" alt=""></div>

    <div class="con-sponsor d-none d-md-block">
        <div class="container">
            <div class="txt"><span>Nội dung được tài trợ</span></div>
            <div class="box-dots"></div>
        </div>
    </div>
    <!-- /.con-sponsor-->

    <div class="con-contents-sidebar d-none d-md-block">
        <div class="container">
            <div class="row gutters-sm">
                <div class="col-12 col-md-8 col-contents">
                    <div class="con-category-boxs">
                        <div class="box-list">
                            <ul class="row list">
                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Trang chủ</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Doanh nhân</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Doanh nghiệp</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Tài chính ngân hàng</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Văn hòa xã hội</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Kinh tế quốc tế</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Bất động sản</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Hội thảo doanh nghiệp</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Thể thao</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Chuyên gia tư vấn</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Hoạt động XH</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Chuyên mục đầu tư</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Sự kiện kinh doanh</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Góc nhìn</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top"><span class="fas fa-video mr-2"></span>Video</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-12 col-sm-6 item">
                                    <div class="box-inner">
                                        <h3 class="txt-title-top">Việc làm</h3>
                                        <div class="box-feature"><a class="box-thumb" href="#"><img class="img-thumb" src="https://loremflickr.com/500/320/news?random=1" alt="demo"></a>
                                            <h4 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h4>
                                        </div>
                                        <div class="box-related">
                                            <ul>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                                <li>
                                                    <h5 class="txt-title"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quam illo</a></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /.con-category-boxs-->
                </div>

                <div class="col-12 col-md-4 col-sidebar"></div>
            </div>
        </div>
    </div>
    <div class="my-3 d-block d-md-none"><a class="over my-3" href="#"><img class="w-100" src="images/img-banner-top.jpg" alt="img-banner-top"></a></div>

    <footer class="main-footer">
        <div class="box-nav d-none d-md-block">
            <div class="container">
                <nav class="main-nav-style">
                    <ul>
                        <li class="active"><a href="/"><span class="txt fas fa-home"></span></a></li>
                        <li><a href="#"><span class="txt">Kinh tế</span></a></li>
                        <li><a href="#"><span class="txt">Doanh nghiệp</span></a></li>
                        <li><a href="#"><span class="txt">Doanh nhân</span></a></li>
                        <li><a href="#"><span class="txt">Văn hóa - Xã hội</span></a></li>
                        <li><a href="#"><span class="txt">Bất động sản</span></a></li>
                        <li><a href="#"><span class="txt">Thể thao - Du lịch</span></a></li>
                        <li><a href="#"><span class="txt">Video</span></a></li>
                        <li><a href="#"><span class="txt fas fa-ellipsis-h"></span></a>
                            <ul class="sub-menu">
                                <li><a href="#"><span class="txt">Venom Power</span></a></li>
                                <li><a href="#"><span class="txt">Haida</span></a></li>
                                <li><a href="#"><span class="txt">UniGrip</span></a></li>
                                <li><a href="#"><span class="txt">BFGoodrich</span></a></li>
                                <li><a href="#"><span class="txt">RoadForce</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <button class="btn btn-primary btn-block rounded-0 text-left d-block d-md-none go-to-top-js">Lên đầu trang<span class="ic fas fa-angle-up ml-2"></span></button>
        <div class="box-nav-sp d-block d-md-none">
            <ul class="row gutters-sm">
                <li class="col-6"><a href="#">Trang chủ</a></li>
                <li class="col-6"><a href="#">Doanh nhân</a></li>
                <li class="col-6"><a href="#">Doanh nghiệp</a></li>
                <li class="col-6"><a href="#">Tài chính - Ngân hàng</a></li>
                <li class="col-6"><a href="#">Văn hóa - Xã hội</a></li>
                <li class="col-6"><a href="#">Kinh tế Quốc tế</a></li>
                <li class="col-6"><a href="#">Bất động sản</a></li>
                <li class="col-6"><a href="#">Hội thảo Doanh nghiệp</a></li>
                <li class="col-6"><a href="#">Thể thao</a></li>
                <li class="col-6"><a href="#">Chuyên gia tư vấn</a></li>
                <li class="col-6"><a href="#">Hoạt động XH</a></li>
                <li class="col-6"><a href="#">Chuyên mục đầu tư</a></li>
                <li class="col-6"><a href="#">Sự kiện kinh doanh</a></li>
                <li class="col-6"><a href="#">Góc nhìn</a></li>
                <li class="col-6"><a href="#">Video</a></li>
                <li class="col-6"><a href="#">Việc làm</a></li>
            </ul>
        </div>
        <div class="box-main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 col-footer order-md-3">
                        <div class="txt-title-top text-uppercase">VIETNAM GREEN LIFE GROUP.,JSC</div>
                        <div class="content">Số 80, phố Mễ Trì Hạ, Mễ Trì, Nam Từ Liêm, Hà Nội<br>Giấy phép trang thông tin điện tử số: /GP...................................</div>
                    </div>
                    <div class="col-12 col-md-4 col-footer order-md-1">
                        <div class="txt-title-top">Ban biên tập Thuonggia24h</div>
                        <div class="content">Địa chỉ: Tòa nhà 23 ngõ 82 phố Mễ Trì Hạ, Mễ Trì, Nam Từ Liêm, Hà Nội, Việt Nam<br>Điện thoại:
                            &nbsp<a href="tel:0976968838">0976.968.838</a>&nbsp
                            -
                            &nbsp<a href="tel:0965546807">096.554.6807</a><br>Email:
                            &nbsp<a href="mailto:contact@thuonggia24h.vn">contact@thuonggia24h.vn</a><br>Chịu trách nhiệm quản lý nội dung<br>Ông Nguyễn Thái Bình
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-adv col-footer order-md-2">
                        <div class="txt-title-top">Liên hệ quảng cáo</div>
                        <div class="content">Liên hệ quảng cáo<br>Hotline 24/7:
                            &nbsp<a href="tel:0968905704">0968.905.704</a>&nbsp
                            -
                            &nbsp<a href="tel:0981633298">0981.633.298</a><br>Email:
                            &nbsp<a href="mailto:contact@thuonggia24h.vn">contact@thuonggia24h.vn</a><br>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary rounded-0"><span class="fas fa-comment-dots mr-2"></span>CHAT VỚI BAN BIÊN TẬP</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 col-share-content d-none d-md-block"><a href="#"><strong>Thỏa thuận chia sẻ nội dung</strong></a></div>
                    <div class="col-12 col-md-6 col-credit">Ghi rõ nguồn "<strong>thuonggia24h.vn</strong>" khi phát hành lại thông tin từ kênh thông tin này</div>
                    <div class="col-12 col-md-3 col-info-policy d-none d-md-block"><a href="#"><strong>Chính sách thông tin</strong></a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /.main-footer-->
</div>

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
