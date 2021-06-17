@extends('fontend.master.master')
@section('main')
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-left section-heading probootstrap-animate">
          <h1>Giao viên của chúng tôi</h1>
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
              <h3>Chúng tôi đã mời được những giáo viên có chất lượng tốt về giảng dạy</h3>
              <p>chúng tôi đã mời được những giáo viên có chất lượng tốt về giảng dạy, họ là những người có kinh nghiệm lâu năm trong ngành giáo dục và có những thành tựu nhất định trong lĩnh vực mà mình giảng dạy.</p>
              <p><a href="#" class="btn btn-primary">Tìm hiểu thêm</a></p>
            </div>
            <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/anh16.jpg)">
              <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
          @foreach ($giaovien as $item)
          <div class="col-md-6">
            <div class="probootstrap-service-2 probootstrap-animate">
              <div class="image">
                <div class="image-bg">
                  <img src="{{$item->hinhanh}}">
                </div>
              </div>
              <div class="text">
                <span class="probootstrap-meta"><i class="icon-calendar2"></i> {{$item->ngaydang}}</span>
                <h3>{{$item->tentin}}</h3>
                <p>{{$item->tieude}}</p>
                <p><a href="{{route('ct1')}}" class="btn btn-primary">Đăng ký ngay bây giờ.</a> <span class="enrolled-count">7,202 sinh viên đăng ký</span></p>
              </div>
            </div>
          </div>

          @endforeach

      </div>
    </div>
  </section>

  <section class="probootstrap-cta">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
@endsection
