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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên loại tin</th>
                                <th>Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt=1;
                            ?>
                            @foreach ($loaitins as $loaitin)
                            <tr class="odd gradeX" align="center">
                                <td>{{$stt++}}</td>
                                <td>{{$loaitin->tenloaitin}}</td>
                                <td>{{$loaitin->mota}}</td>
                                {{-- <td>Hiện</td> --}}
                                <td class="center">
                                    <form method="POST" action="{{route('dllt',['id'=>$loaitin->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="border: none;"><i class="fa fa-trash-o  fa-fw"></i>Xóa</button>
                                    </form>
                                </td>

                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('slt',['id'=>$loaitin->id])}}">Sửa</a></td>
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
