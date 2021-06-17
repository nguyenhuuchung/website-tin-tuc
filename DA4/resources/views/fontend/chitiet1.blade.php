@extends('fontend.master.master')
<style>
    .detailnews {
        overflow: hidden;
        width: 1140px;
        margin: 30px auto;
        height: auto;
    }
    .clearboth{
        clear: both;
    }
    .tieude {
        font-size: 24px;
        font-weight: bold;
    }
    .image {
        width: 100%;
    }
    .detail {
        margin-top: 20px;
        text-align: justify
    }
</style>
@section('main')

<div class="detailnews">
    <div class="col-md-12">
        @foreach ($chitiet as $item)
            <div ><p class="tieude">{{$item->tieude}} (Ngày đăng: {{$item->thoigiandangbai}})</p></div>
            <div class="clearboth"></div>
            <div class="image"><img src=" {{URL::asset('public/upload/image')}}/{{ $item->hinhanh}}" alt="Hình ảnh"></div>
            <div class="clearboth"></div>
            <div><p class="detail">{{$item->noidung}}</p></div>
        @endforeach
        <div class="well">
            <h4>Viết bình luận ...</h4>
            <form role="form">
                <div class="form-group">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>

        <hr>

        <!-- Posted Comments -->

        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <p style="font-size:16px;color:#000000;font-weight:600;" class="media-heading">Nguyễn Văn A
                    {{-- <small>August 25, 2014 at 9:30 PM</small> --}}
                </p>
                Thật là hữu ích, cảm ơn Thầy.
            </div>
        </div>

        <!-- Comment -->
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <p style="font-size:16px;color:#000000;font-weight:600;" class="media-heading">Nguyễn văn B
                    {{-- <small>August 25, 2014 at 9:30 PM</small> --}}
                </p>
                Bên cạnh đó, học sinh cũng cần chú ý thêm các câu hỏi liên quan đến giá trị tuyệt đối, ứng dụng thực tế mặc dù các chủ đề này cũng ít được khai thác trong những năm gần đây.
            </div>
        </div>
    </div>
</div>


</div>

@endsection


