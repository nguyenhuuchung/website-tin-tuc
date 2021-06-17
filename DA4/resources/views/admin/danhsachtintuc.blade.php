@extends('admin.master.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tin Tức
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="table1">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên tin</th>
                                <th>Tiêu đề</th>
                                <th>Hình ảnh</th>
                                <th>Ngày đăng</th>
                                <th>Loại tin id</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt=1;
                            ?>
                            @foreach ($tintucs as $tintuc)
                            <tr class="odd gradeX" align="center">
                                <td>{{$stt++}}</td>
                                <td>{{$tintuc->tentin}}</td>
                                <td>{{$tintuc->tieude}}</td>

                                <td><img height="120px" width="120px" src=" {{URL::asset('public/upload/image')}}/{{ $tintuc->hinhanh}}" alt="" /></td>></td>
                                <td>{{$tintuc->ngaydang}}</td>
                                <td>{{$tintuc->loaitinid}}</td>
                                {{-- <td>Hiện</td> --}}
                                <td class="center">
                                    <form method="POST" action="{{route('dltt',['id'=>$tintuc->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="border: none;"><i class="fa fa-trash-o  fa-fw"></i>Xóa</button>
                                    </form>
                                </td>

                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('stt',['id'=>$tintuc->id])}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop
@section('script')
<script>
$(document).ready(function() {
    $('#table1').DataTable({
        "lengthMenu": [
            [5, 10, 25, -1],
            [5, 10, 25, "All"]
        ],
        "language": {
            "search": "Tìm kiếm: ",
            "searchPlaceholder": "Nhập từ khóa...",
            "lengthMenu": "Hiển thị _MENU_ bản ghi",
            "info": "Trang hiện tại _PAGE_ / _PAGES_",
            "infoEmpty": "Không có bản ghi trả về!",
            "zeroRecords": "Không tìm thấy bản ghi",
            "infoFiltered": "(tìm kiếm trong _MAX_ bản ghi)",
            "paginate": {
                "first": "Đầu trang",
                "last": "Cuối trang",
                "previous": "<i class='fas fa-angle-left'  color: orangered;'></i>",
                "next": "<i class='fas fa-angle-right'  color: orangered;'></i>"
            }
        },
        "pagingType": "full_numbers",
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [-1, -2]
        }]

    });
});
var btn_id
var btn_delte=document.querySelector('.btn-delete')
var form_delete=document.querySelector('.form-delete')
$('#btn-delete-Cate').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
btn_id = button.data('id')
})
btn_delte.onclick=function()
{
form_delete.action="danhmuc/"+btn_id
form_delete.submit()

}
</script>
@stop
