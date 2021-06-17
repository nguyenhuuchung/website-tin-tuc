@extends('fontend.master.master')
@section('main')

      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Sự kiện của trường</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
              @foreach ($sukien as $item)
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
                    <p style="width: 300px; overflow: hidden;white-space: nowrap; text-overflow: ellipsis;">{{$item->tieude}}</p>
                    <p><a href="#" class="btn btn-primary">Đăng ký ngay bây giờ</a> <span class="enrolled-count">7,202 sinh viên đăng ký</span></p>
                  </div>
                </div>
              </div>

              @endforeach

          </div>
        </div>
      </section>
@endsection
