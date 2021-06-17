<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;
use App\tinbai;

class HomeController extends Controller
{
    public function getHome()
    {
        $data['loaitins']=danhmuc::take(3)->get();
        $data['tinbais']=tinbai::take(1)->get();
        $data['tinbais1']=tinbai::paginate(3);
        $data['giaovien']=tinbai::where('loaitinid','2')->get();
        $data['sukien']=tinbai::where('loaitinid','3')->get();
        $data['cauhoi']=tinbai::where('loaitinid','4')->take(6)->get();
        return view('fontend.index', $data);
    }
    public function tintheoloai($id)
    {
        $data['loaitins']=danhmuc::take(3)->get();
        $data['tinbais1']=tinbai::take(1)->get();
        $data['tinbais']=tinbai::where('loaitinid', $id)->get();
        return view('fontend.courses', $data);
    }

    // public function getcackhoahoc()
    // {
    //     $data['loaitins']=danhmuc::take(3)->get();
    //     $data['giaovien']=tinbai::where('loaitinid','2')->get();
    //     return view('fontend.courses', $data);
    // }
    // public function getgiaovien()
    // {
    //     $data['giaovien']=danhmuc::where('loaitinid','2')->get();
    //     //dd($data['loaitins']);
    //     return view('fontend.teachers',$data);
    // }
    // public function getevents()
    // {
    //     $data['sukien']=danhmuc::where('loaitinid','3')->get();
    //     return view('fontend.events', $data);
    // }
    public function getchitiet1($id)
    {
        $data['loaitins']=danhmuc::take(3)->get();
        $data['chitiet']=tinbai::where('id', $id)->get();
        return view('fontend.chitiet1', $data);
    }
    // public function getdanhsachloaitin()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.danhsachloaitin', $data);
    // }
    // public function getthemloaitin()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.themloaitin', $data);
    // }
    // public function getsualoaitin()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.sualoaitin', $data);
    // }
    // public function getdanhsachtintuc()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.danhsachtintuc', $data);
    // }
    // public function getthemtintuc()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.themtintuc', $data);
    // }
    // public function getsuatintuc()
    // {
    //     $data['loaitin']=danhmuc::take(3)->get();
    //     return view('fontend.suatintuc', $data);
    // }
    public function getdanhsachtaikhoan()
    {
        $data['loaitin']=danhmuc::take(3)->get();
        return view('fontend.danhsachtaikhoan', $data);
    }
    public function getthemtaikhoan()
    {
        $data['loaitin']=danhmuc::take(3)->get();
        return view('fontend.themtaikhoan', $data);
    }
    public function getsuataikhoan()
    {
        $data['loaitin']=danhmuc::take(3)->get();
        return view('fontend.suataikhoan', $data);
    }
    public function getlogin()
    {
        return view('fontend.login');
    }
    public function hienthi()
    {
        return view('admin.master.master');
    }
}
