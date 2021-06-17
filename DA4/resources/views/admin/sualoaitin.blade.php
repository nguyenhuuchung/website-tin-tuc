@extends('admin.master.master')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Sửa loại tin</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('udlt', ['id'=>$loaitin->id])}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên loại tin</label>
                                <input type="text" class="form-control" name="tenloaitin" value="{{$loaitin->tenloaitin}}" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input type="text" class="form-control" name="mota" value="{{$loaitin->mota}}" />
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Trở về</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@stop
