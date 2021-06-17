@extends('fontend.master.master')
@section('main')
      {{-- <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">Enlight</a>
          </div>
        </div>
      </nav> --}}

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Các khóa học của chúng tôi.</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
              @foreach ($tinbais1 as $tinbai)
              <div class="col-md-12">
                <div class="probootstrap-flex-block">
                  <div class="probootstrap-text probootstrap-animate">
                    <div class="text-uppercase probootstrap-uppercase">Khóa học nổi bật</div>
                    <h3>{{$tinbai->tentin}}</h3>
                    <p>{{$tinbai->tieude}}</p>
                    <p><a href="{{asset('chitiet/'.$tinbai->id)}}" class="btn btn-primary">Đăng ký ngay bây giờ</a></p>
                  </div>
                  <div class="probootstrap-image probootstrap-animate fadeInUp probootstrap-animated" >
                    <img src="{{URL::asset('public/upload/image')}}/{{ $tinbai->hinhanh}}" style="weight:720px; height:280px"><i class="icon-play3"></i></a>
                  </div>
                </div>
              </div>
              @endforeach

          </div>
        </div>
      </section>

    <section>
        <div class="container">
          <div class="row">
              @foreach ($tinbais as $item)
              <div class="col-md-6">
                <div class="probootstrap-service-2 probootstrap-animate">
                  <div class="image">
                    <div class="image-bg">
                      <img src="{{URL::asset('public/upload/image')}}/{{ $item->hinhanh}}">
                    </div>
                  </div>
                  <div class="text">
                    <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{$item->ngaydang}}</span>
                    <h3>{{$item->tentin}}</h3>
                    <p style="width: 300px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">{{$item->tieude}}</p>
                    <p><a href="{{asset('chitiet/'.$item->id)}}" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">7,202 sinh viên đăng ký</span></p>
                  </div>
                </div>
              </div>

              @endforeach

          </div>
        </div>
      </section>
      {{-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh5.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> 1-1-2020</span>
                  <h3>Thiết kế ứng dụng</h3>
                  <p> Hiện nay, số người sử dụng app mobile đang ngày càng gia tăng. Chính vì vậy, đây là nguồn tiềm năng lớn mà nhiều doanh nghiệp đang hướng tới. Họ nắm bắt được xu hướng này và thiết kế app riêng dành cho mình để áp dụng vào lĩnh vực, ngành nghề như: thương mại điện tử, làm đẹp, buôn bán, vận chuyển, giáo dục,…</p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">2,928 sinh viên đăng ký</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh10.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Kỹ thuật hóa học</h3>
                  <p>NTTU - Trong xu thế phát triển công nghiệp hóa hiện đại hóa, công nghệ kỹ thuật hóa học ngày càng giữ vai trò quan trọng, trở thành vị trí không thể thiếu trong lĩnh vực sản xuất, thu hút lượng lớn nguồn lao động</p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">7,202 sinh viên đăng ký</span></p>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh10.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Chuyên ngành Toán học</h3>
                  <p>Toán ứng dụng là ngành học ứng dụng các phương pháp, mô hình toán học vào giải quyết các vấn đề trong khoa học, kỹ thuật, kinh tế, tài chính, bảo hiểm, khoa học máy tính và công nghiệp…</p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">12,582 sinh viên đăng ký</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh21.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Chuyên ngành tiếng Anh</h3>
                  <p>Tiếng Anh chuyên ngành sẽ bao gồm cả từ vựng chuyên ngành cùng với những yếu tố quan trọng khác như ngữ pháp, văn phạm, cấu trúc câu, phong cách viết và diễn đạt…</p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">9,582 sinh viên đăng ký</span></p>
                </div>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh16.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Thiết kế ứng dụng</h3>
                  <p>Chương trình Cử nhân Thiết kế (Thiết kế ứng dụng sáng tạo) chú trọng phương pháp học tập mang tính cộng tác thông qua các bài tập dự án thiết kế, hội thảo chuyên đề cũng như các môn học tích hợp môi trường làm việc thật.</p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">2,928 sinh viên đăng ký</span></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/anh22.jpg" alt="Free Bootstrap Template by ProBootstrap.com">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Cong nghệ thông tin</h3>
                  <p>Công nghệ thông tin là một trong những ngành rất phát triển hiện nay. Là xu hướng phát triển của tương lai. Với nhu cầu nhân lực ngày một tăng lên, có nhiều cơ hội khi ra trường nên ngành công nghệ thông tin thu hút không ít học sinh và sinh viên theo học. </p>
                  <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">9,582 sinh viên đăng ký</span></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section> --}}



      {{-- <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Gặp gỡ giáo viên đủ điều kiện của chúng tôi</h2>
              <p class="lead">Những giáo viên nổi bật trong năm qua</p>
            </div>
          </div> --}}
          <!-- END row -->

          {{-- <div class="row">
            @foreach ($giaovien as $item)
                  <div class="col-md-6">
                          <div class="probootstrap-service-2 probootstrap-animate">
                              <div class="image">
                              <div class="image-bg">
                                  <img src="{{$item->hinhanh}}" alt="Free Bootstrap Template by ProBootstrap.com">
                              </div>
                              </div>
                              <div class="text">
                              <span class="probootstrap-meta"><i class="icon-calendar2"></i>{{$item->ngaydang}}</span>
                              <h3>{{$item->tentin}}</h3>
                              <p style="width: 300px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">{{$item->tieude}}</p>
                              <p><a href="{{route('ct1')}}" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">2,928 students enrolled</span></p>
                          </div>
                      </div>
                  </div>
          @endforeach --}}


{{--
        </div>

        </div>
      </section> --}}
     @endsection
