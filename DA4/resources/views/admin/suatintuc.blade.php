@extends('admin.master.master')
@section('content')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Sửa tin tức</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('udtt', ['id'=>$tintuc->id])}}" method="POST" enctype="multipart/form-data" id="theform">
                            @csrf
                            <div class="form-group">
                                <label>Tên tin</label>
                                <input type="text" class="form-control" name="tentin" id="tentin" value="{{$tintuc->tentin}}"  />
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" class="form-control" name="tieude" id="tieude" value="{{$tintuc->tieude}}"  />
                            </div>
                            <div class="form-group">
                                <label>Nội Dung</label>
                                <div class="">
                                    <textarea class='ckeditor' required  name="noidung" id="name" cols="70" rows="10">{{$tintuc->noidung}}</textarea>
                                    <script type="text/javascript">
                                        var editor = CKEDITOR.replace('noidung',{
                                            language:'vi',
                                            filebrowserImageBrowseUrl:'../../public/admin/ckfinder/ckfinder.html?Type=Images',
                                            filebrowserFlashBrowseUrl:'../../public/admin/ckfinder/ckfinder.html?Type=Flash',
                                            filebrowserImageUploadUrl:'../../public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl:'../../public/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        })
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label class="control-label small" for="file_img">Chọn ảnh:
                                        (jpg/png):</label> <input onchange="get_img()" id="img" class="file_img" type="file" name="image">
                                <div class="">
                                    <img style="width: 150px;height: 150px;" id="blah">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ngày đăng</label>
                                <input type="date" class="form-control" name="ngaydang" id="ngaydang" value="{{$tintuc->ngaydang}}" />
                            </div>
                            <div class="form-group">
                                <label>Loại tin</label>
                                <div class="">
                                    <select name="loaitinid" class="form-control">
                                        <option value="0">--Chọn loại tin--</option>
                                        @foreach ($parents as $parent )
                                        <option value="{{$parent->id}}" style="font-size:18px; font-weight:500;">{{$parent->tenloaitin}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
@section('script')
<script>
    $(document).ready(function () {


$("#theform").on("submit", function () {
    var hvalue = $('.ql-editor').html();
    // $(this).append("<textarea name='desc' style='display:none'>" + hvalue + "</textarea>");
    $(this).submit();
});
//CKEDITOR.replace('desc');
// document.querySelector('.ql-editor').onkeyup = function () {
//     var complieValue = document.getElementById('convert-desc')
//     complieValue.value = document.querySelector('.ql-editor').innerHTML
// }
// document.getElementById('convert-desc').onkeyup = function () {
//     var complieValue = document.querySelector('.ql-editor')
//     complieValue.innerHTML = document.getElementById('convert-desc').value
// }

var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],

    [{ 'header': 1 }, { 'header': 2 }],               // custom button values
    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
    [{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction

    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],

    ['clean'],                                         // remove formatting button
    ['image']
];

var quill = new Quill('#full', {
    theme: 'snow',
    modules: {
        toolbar: {
            container: toolbarOptions,
            handlers: {
                image: imageHandler
            }
        }
    },
});
function imageHandler() {
    var range = this.quill.getSelection();
    var value = prompt('What is the image URL');
    if (value) {
        this.quill.insertEmbed(range.index, 'image', value, Quill.sources.USER);
    }
}

})
$(document).ready(function(){
        $('#blah').css('display', 'none');
    })
    function get_img() {
     var input = document.getElementById("img");
     var fReader = new FileReader();
     fReader.readAsDataURL(input.files[0]);
     fReader.onloadend = function (event) {
         var img = document.getElementById("blah");
         img.src = event.target.result;
         $('#blah').css('display', 'block');
     }
 }
</script>
@stop
