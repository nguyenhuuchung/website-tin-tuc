<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\tinbai;
use App\danhmuc;
use Illuminate\Support\Str;

class TintucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tintucs']=tinbai::all();
        return view('admin.danhsachtintuc', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = danhmuc::all();
        return view('admin.themtintuc', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->image)
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload/image'), $imageName);
        }
        tinbai::create([
            'tentin'=>$request->tentin,
            'tieude'=>$request->tieude,
            'noidung'=>$request->noidung,
            'hinhanh'=>$imageName,
            'ngaydang'=>$request->ngaydang,
            'loaitinid'=>$request->loaitinid,
        ]);
        return redirect()->route('dstt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tintuc=tinbai::find($id);
        $parents=danhmuc::all();
        return view('admin.suatintuc',[
            'tintuc'=>$tintuc,
            'parents'=>$parents,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->image)
        {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('upload/image'), $imageName);
        }
        $tintuc=tinbai::find($id);
        $tintuc->update([
            'tentin'=>$request->tentin,
            'tieude'=>$request->tieude,
            'noidung'=>$request->noidung,
            'hinhanh'=>$imageName,
            'ngaydang'=>$request->ngaydang,
            'loaitinid'=>$request->loaitinid,
        ]);
        $tintuc->save();

        return redirect()->route('dstt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tintuc=tinbai::find($id);
        $tintuc->delete();
        return back();
    }
}
