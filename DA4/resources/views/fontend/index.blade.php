@extends('fontend.master.master')
@section('main')
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h2>Chào mừng bạn đến với trang web tin tức giáo dục</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="probootstrap-flex-block">
            <div class="probootstrap-text probootstrap-animate">
            @foreach ($tinbais as $tinbai)
              <h3>{{$tinbai->tentin}}</h3>
              <p>{{$tinbai->tieude}}</p>
              <p><a href="{{asset('chitiet/'.$tinbai->id)}}" class="btn btn-primary">Tìm Hiểu Thêm</a></p>
            @endforeach
            </div>
            @foreach ($tinbais as $tinbai)
            <div class="probootstrap-image probootstrap-animate" ><img weight="700px"; height="400px"; src="{{URL::asset('public/upload/image')}}/{{ $tinbai->hinhanh}}">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section" id="probootstrap-counter">
    <div class="container">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-users2"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="20203" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Học sinh đã đăng ký</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-user-tie"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="139" data-speed="5000" data-refresh-interval="50">1</span>
              </span>
              <span class="probootstrap-counter-label">Giáo viên được chứng nhận</span>
            </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block visible-xs-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-library"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="99" data-speed="5000" data-refresh-interval="50">1</span>%
              </span>
              <span class="probootstrap-counter-label">Thi đậu vào các trường đại học</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">

           <div class="probootstrap-counter-wrap">
            <div class="probootstrap-icon">
              <i class="icon-smile2"></i>
            </div>
            <div class="probootstrap-text">
              <span class="probootstrap-counter">
                <span class="js-counter" data-from="0" data-to="100" data-speed="5000" data-refresh-interval="50">1</span>%
              </span>
              <span class="probootstrap-counter-label">Sự hài lòng của phụ huynh</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/anh6.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center section-heading probootstrap-animate">
          <h2 class="mb0">Điểm nổi bật</h2>
        </div>
      </div>
    </div>
    <div class="probootstrap-tab-style-1">
      <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
        <li class="active"><a data-toggle="tab" href="#featured-news">tin tức nổi bật</a></li>
        <li><a data-toggle="tab" href="#upcoming-events">sự kiện sắp</a></li>
      </ul>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

          <div class="tab-content">

            <div id="featured-news" class="tab-pane fade in active">
              <div class="row">

                <div class="col-md-12">

                  <div class="owl-carousel" id="owl1">
                    @foreach ($tinbais1 as $tinbai)
                    <div class="item">

                      <a href="{{asset('chitiet/'.$tinbai->id)}}" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img weight="368px"; height="219px"; src="{{URL::asset('public/upload/image')}}/{{ $tinbai->hinhanh}}"></figure>
                        <div class="probootstrap-text">
                          <h3>{{$tinbai->tentin}}</h3>
                          <p>{{$tinbai->tieude}}</p>
                        </div>
                      </a>
                    {{-- </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh8.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>ĐH Sư phạm Hà Nội mở rộng phương thức xét tuyển thẳng</h3>
                          <p>Năm 2021, ĐH Sư phạm Hà Nội mở rộng phương thức xét tuyển thứ 2 với thí sinh đạt học lực giỏi, hạnh kiểm tốt và học sinh trường chuyên.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh9.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>THÔNG BÁO LỊCH XÉT CÔNG NHẬN ĐẠT TIÊU CHUẨN CHỨC DANH GIÁO SƯ, PHÓ GIÁO SƯ NĂM 2021.</h3>
                          <p>Thông báo lịch xét công nhận đạt tiêu chuẩn chức danh giáo sư, phó giáo sư năm 2021.</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh10.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>HỘI NGHỊ TỔNG KẾT KẾ HOẠCH HỖ TRỢ HỆ SINH THÁI KHỞI NGHIỆP ĐỔI MỚI SÁNG TẠO TỈNH HƯNG YÊN GIAI ĐOẠN 2017 – 2020</h3>
                          <p>Trường Đại học SPKT Hưng Yên phối hợp cùng Hội nghiên cứu biên tập công trình Khoa học và Công nghệ Việt Nam tổ chức Số đặc biệt của Hội nghị Quốc tế về Vật liệu, Máy và Phương pháp phát triển bền vững nhân dịp kỷ niệm 55 năm thành lập Trường Đại học Sư phạm Kỹ thuật Hưng Yên .</p>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>


                        </div>
                      </a>
                    </div> --}}
                    <!-- END item -->
                  </div>
                  @endforeach
                </div>

              </div>
              <!-- END row -->
              <div class="row">
                <div class="col-md-12 text-center">
                  <p><a href="#" class="btn btn-primary">Xem tất cả tin tức</a></p>
                </div>
              </div>
            </div>
            <div id="upcoming-events" class="tab-pane fade">
              <div class="row">
                <div class="col-md-12">
                  <div class="owl-carousel" id="owl2">
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh11.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Dịch COVID-19 tác động đến ngành GD&ĐT</h3>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                          <span class="probootstrap-location"><i class="icon-location2"></i>Bộ GD&ĐT TP.Hà Nội</span>
                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh12.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Thay đổi về kỳ thi THPT</h3>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                          <span class="probootstrap-location"><i class="icon-location2"></i>>Bộ GD&ĐT TP.Hà Nội</span>
                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh4.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>Thay đổi về kỳ thi THPT</h3>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                          <span class="probootstrap-location"><i class="icon-location2"></i>Bộ GD&ĐT TP.Hà Nội</span>
                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                    <div class="item">
                      <a href="#" class="probootstrap-featured-news-box">
                        <figure class="probootstrap-media"><img src="{{ url('public/fontend') }}/img/anh13.jpg" alt="Free Bootstrap Template by ProBootstrap.com" class="img-responsive"></figure>
                        <div class="probootstrap-text">
                          <h3>SGK lớp 1 bị phản ứng</h3>
                          <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                          <span class="probootstrap-location"><i class="icon-location2"></i>Bộ GD&ĐT TP.Hà Nội</span>
                        </div>
                      </a>
                    </div>
                    <!-- END item -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <p><a href="#" class="btn btn-primary">xem tất cả tin tức</a></p>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Những sự kiện nổi bật của chúng tôi</h2>
          <p class="lead">Những sự kiện nổi bật của giáo dục đại học năm năm qua</p>
        </div>
      </div>
      <!-- END row -->
      <div class="row">
          @foreach ($sukien as $item)
                <div class="col-md-6">
                        <div class="probootstrap-service-2 probootstrap-animate">
                            <div class="image">
                            <div class="image-bg">
                                <img src="{{URL::asset('public/upload/image')}}/{{ $item->hinhanh}}" alt="Free Bootstrap Template by ProBootstrap.com">
                            </div>
                            </div>
                            <div class="text">
                            <span class="probootstrap-meta"><i class="icon-calendar2"></i>{{$item->ngaydang}}</span>
                            <h3>{{$item->tentin}}</h3>
                            <p style="width: 300px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">{{$item->tieude}}</p>
                            <p><a href="{{asset('chitiet/'.$item->id)}}" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                        </div>
                    </div>
                </div>
        @endforeach
      </div>
    </div>
  </section>



  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Gặp gỡ giáo viên đủ điều kiện của chúng tôi</h2>
          <p class="lead">Những giáo viên có thành tích cao trong ngành giáo dục.</p>
        </div>
      </div>
      <!-- END row -->

      <div class="row">
        @foreach ($giaovien as $item)
              <div class="col-md-6">
                      <div class="probootstrap-service-2 probootstrap-animate">
                          <div class="image">
                          <div class="image-bg">
                              <img src="{{URL::asset('public/upload/image')}}/{{ $item->hinhanh}}" alt="Free Bootstrap Template by ProBootstrap.com">
                          </div>
                          </div>
                          <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i>{{$item->ngaydang}}</span>
                          <h3>{{$item->tentin}}</h3>
                          <p style="width: 300px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">{{$item->tieude}}</p>
                          <p><a href="{{asset('chitiet/'.$item->id)}}" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                      </div>
                  </div>
              </div>
      @endforeach



    </div>

    </div>
  </section>
  <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Lời chứng thực của cựu sinh viên.</h2>
          <p class="lead">Đôi lời tâm sự của những cựu sinh viên.</p>
        </div>
      </div>
      <!-- END row -->
      <div class="row">
        <div class="col-md-12 probootstrap-animate">
          <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
            <div class="item">

              <div class="probootstrap-testimony-wrap text-center">
                <figure>
                  <img src="{{ url('public/fontend') }}/img/anh19.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                </figure>
                <blockquote class="quote">&ldquo; Hãy tìm cách nói chuyện nhiều cùng bố mẹ để lắng nghe họ suy nghĩ gì.&rdquo; <cite class="author"> &mdash; <span>N.V.Toàn</span></cite></blockquote>
              </div>

            </div>
            <div class="item">
              <div class="probootstrap-testimony-wrap text-center">
                <figure>
                  <img src="{{ url('public/fontend') }}/img/anh20.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                </figure>
                <blockquote class="quote">&ldquo;Buổi gặp mặt cựu sinh viên YTCC K1 với các thầy cô là hoạt động có ý nghĩa trong việc gắn kết mối liên hệ giữa các cựu sinh viên và nhà trường..&rdquo; <cite class="author"> &mdash;<span>N.C.Phượng</span></cite></blockquote>
              </div>
            </div>
            <div class="item">
              <div class="probootstrap-testimony-wrap text-center">
                <figure>
                  <img src="{{ url('public/fontend') }}/img/anh14.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                </figure>
                <blockquote class="quote">&ldquo;Đó là sự biết ơn, trân trọng nhưng món quà quý giá nhất các em mang lại cho nhà trường, cho thầy cô chính là sự thành công của các em trong công việc, trong cuộc sống.&rdquo; <cite class="author">&mdash; <span>T.M.Vương</span></cite></blockquote>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- END row -->
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
          <h2>Tại sao nên học đại học.</h2>
          <p class="lead">Con đường để dẫn đến thành công thì rất nhiều, nhưng con đường ngắn nhất để dẫn đến thành công thì chỉ có học.</p>
        </div>
      </div>
      <div class="row">
          @foreach ($cauhoi as $item)
            <div class="col-md-6">
                <div class="service left-icon probootstrap-animate">
                    <div class="icon"><i class="icon-checkmark"></i></div>
                    <div class="text">
                    <h3>{{$item->tieude}}</h3>
                    <p>{{$item->noidung}}</p>
                    </div>
                </div>
            </div>
          @endforeach

      </div>
      <!-- END row -->
    </div>
  </section>
  <!-- end main -->
@endsection



