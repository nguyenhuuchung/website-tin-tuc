@extends('admin.master.master')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Tin
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('stlt')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên loại tin</label>
                                <input class="form-control" name="tenloaitin" placeholder="Nhập tên loại tin" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input class="form-control" name="mota" placeholder="Thêm mô tả" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            {{-- <button type="reset" class="btn btn-default">Reset</button> --}}
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
@stop
