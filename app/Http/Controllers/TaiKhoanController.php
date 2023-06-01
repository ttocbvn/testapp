<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Danh sách tài khoản";
        $taikhoan = TaiKhoan::orderBy('id', 'DESC')->paginate(10);
        return view('taikhoan.index',compact('taikhoan','title'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Đăng ký tài khoản";
        return view('taikhoan.dangkytaikhoan',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $taikhoan = new TaiKhoan();
        $taikhoan->hoten = $request->hoten;
        $taikhoan->tentaikhoan = $request->tentaikhoan;
        $taikhoan->matkhau = $request->matkhau;
        $taikhoan->sodienthoai = $request->sodienthoai;
        $taikhoan->doicongtac = $request->doicongtac;
        $taikhoan->chucvucongtac = $request->chucvucongtac;
        $taikhoan->capbac = $request->capbac;
        $taikhoan->chucdanhtuphap = $request->chucdanhtuphap;
        $taikhoan->linhvucgiamdinh = $request->linhvucgiamdinh;
        $taikhoan->sothegiamdinh = $request->sothegiamdinh;
        $taikhoan->noicapthegiamdinh = $request->noicapthegiamdinh;
        $taikhoan->ngaycapthegiamdinh = $request->ngaycapthegiamdinh;
        $get_pic = $request->avatar;
        $path = 'uploads/avatar';
        $get_name = $get_pic->getClientOriginalName();
        $name_pic = current(explode(".",$get_name));
        $new_name_pic = $name_pic.rand(0,99).".".$get_pic->getClientOriginalExtension();
        $get_pic -> move($path,$new_name_pic);
        $taikhoan->avatar = $new_name_pic;
        $taikhoan->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function XemThongTinTaiKhoan($id)
    {
        $taikhoan = TaiKhoan::find($id);
        return view('taikhoan.thongtintaikhoan',compact('taikhoan'));
    }
}
