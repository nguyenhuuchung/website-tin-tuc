<!DOCTYPE html>

<!--
  Theme Name: Enlight
  Theme URL: https://probootstrap.com/enlight-free-education-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="{{asset('public/fontend')}}/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giao Duc &mdash; Giao Duc24h</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    {{-- <div class="probootstrap-search" id="probootstrap-search">
      <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
      <form action="#">
        <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
      </form>
    </div> --}}

    <div class="">
      <!-- Fixed navbar -->

      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>Sư Phạm Kỹ Thuật Hưng Yên</span>
              <span><i class="icon-phone2"></i>0355689413</span>
              <span><i class="icon-mail"></i>thunga713@gmail.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-instagram2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
                <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <a class="" href="{{route('tc')}}" title="ProBootstrap:Enlight">
                <img style="width: 90px; margin-top: 10px;" src="https://iweb.tatthanh.com.vn/pic/3/blog/images/100-mau-logo-dep-ve-nganh-giao-duc(27).JPG" alt="">
            </a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top: 6px;">
              <li class="active"><a href="{{route('tc')}}">Trang Chủ</a></li>
              {{-- <li><a href="{{route('kh')}}">Các khóa học</a></li>
              <li><a href="{{route('gv')}}">Giáo viên</a></li>
              <li><a href="{{route('sk')}}">Sự kiện</a></li> --}}
                @foreach ($loaitins as $loaitin)
                <li class="active"><a href="{{asset('tintheoloai/'.$loaitin->id)}}">{{$loaitin->tenloaitin}}</a></li>
                @endforeach

              {{-- <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Trang</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('ab')}}">Về chúng tôi</a></li>
                  <li><a href="courses.html">Các khóa học</a></li>
                  <li><a href="course-single.html">Khóa học đơn</a></li>
                  <li><a href="gallery.html">Bộ sưu tập</a></li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a> --}}
                    {{-- <ul class="dropdown-menu">
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                      <li><a href="#">Second Level Menu</a></li>
                    </ul> --}}
                  {{-- </li> --}}
                  {{-- <li><a href="news.html">Tin Tức</a></li> --}}
                {{-- </ul>
              </li> --}}
              {{-- <li><a href="{{route('ct')}}">Tiếp xúc</a></li> --}}
            </ul>
          </div>
        </div>
      </nav>

      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url('https://tuyensinh.hunre.edu.vn/media/cache/data/Tuyen-sinh/tuyen-sinh-2020-B-1---Zalo-cr-1200x630.png')" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">

                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url('https://i2.wp.com/hanoi.fpt.edu.vn/wp-content/uploads/2021/01/Quy-ch%E1%BA%BF1900x900.png?fit=1900%2C900&ssl=1')" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">

                  </div>
                </div>
              </div>
            </div>

          </li>
          <li style="background-image: url('http://thituyensinh.edu.vn/wp-content/uploads/2019/01/banner-quang-cao-3.5-m.jpg')" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">

                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>


      <!-- main -->


      @yield('main')


      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Nhận nhập học của bạn ngay bây giờ!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">ghi danh</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Bài học về việc học tập</h3>
                <p> Đối với học sinh, sinh viên nhiệm vụ đầu tiên là học, học tốt và học giỏi, học để thành người hữu ích xây dựng xã hội, kiến thiết đất nước. Bác nói: “Nhiệm vụ chính của thanh niên là học”, đồng thời Bác yêu cầu: Phải hiểu rõ học thế nào? Học cái gì? Học để làm gì?</p>
                <h3>"Hồ Chí Minh"</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Liên kết</h3>
                <ul>
                  <li><a href="{{route('tc')}}">Trang Chủ</a></li>
                  <li><a href="{{route('kh')}}">Các Khóa Học</a></li>
                  <li><a href="{{route('gv')}}">Giao Viên</a></li>
                  <li><a href="{{route('sk')}}">Tin Tức</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Thông tin liên lạc</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Sư phạm kĩ thuật hưng yên</span></li>
                  <li><i class="icon-mail"></i><span>thunga713@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>0355689413</span></li>
                </ul>
              </div>
            </div>

          </div>
          <!-- END row -->

        </div>


      </footer>

    </div>
    <!-- END wrapper -->


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
