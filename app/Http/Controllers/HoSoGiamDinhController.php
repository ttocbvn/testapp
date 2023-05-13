<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoSoGiamDinh;
use Carbon\Carbon;
class HoSoGiamDinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hosogd = HoSoGiamDinh::orderBy('id', 'DESC')->paginate(10);
        return view('hosogiamdinh.index',compact('hosogd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('hosogiamdinh.tiepnhan');
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
        $hoso = new HoSoGiamDinh();
        $hoso->soqd = $request->soqd;
        $hoso->ngayqd = $request->ngayqd;
        $hoso->nguoigiao = $request->nguoigiao;
        $hoso->chucvunguoigiao = $request->chucvunguoigiao;
        $hoso->nguoinhan = $request->nguoinhan;
        $hoso->chucvunguoinhan = $request->chucvunguoinhan;
        $hoso->donvitrungcau = $request->donvitrungcau;
        $hoso->nguoikyqd = $request->nguoikyqd;
        $hoso->soluongmaugiamdinh = $request->soluongmaugiamdinh;
        $hoso->linhvucgiamdinh = $request->linhvucgiamdinh;
        $hoso->tinhtrangdoituonggiamdinh = $request->tinhtrangdoituonggiamdinh;
        $hoso->trangthaihoso = 'Đã tiếp nhận';
        $mytime = Carbon::now();
        $hoso->ngaynhan = $mytime;
        $hoso->save();
        return redirect()->route('ho-so-giam-dinh.index')->with('status','Thêm thành công');
        

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
        $hoso = HoSoGiamDinh::find($id);
        return view('hosogiamdinh.suatiepnhan',compact('hoso'));
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
        $hoso = HoSoGiamDinh::find($id);
        $hoso->soqd = $request->soqd;
        $hoso->ngayqd = $request->ngayqd;
        $hoso->nguoigiao = $request->nguoigiao;
        $hoso->chucvunguoigiao = $request->chucvunguoigiao;
        $hoso->nguoinhan = $request->nguoinhan;
        $hoso->chucvunguoinhan = $request->chucvunguoinhan;
        $hoso->donvitrungcau = $request->donvitrungcau;
        $hoso->nguoikyqd = $request->nguoikyqd;
        $hoso->soluongmaugiamdinh = $request->soluongmaugiamdinh;
        $hoso->linhvucgiamdinh = $request->linhvucgiamdinh;
        $hoso->tinhtrangdoituonggiamdinh = $request->tinhtrangdoituonggiamdinh;
        $hoso->trangthaihoso = $request->trangthaihoso;
        // $mytime = Carbon::now();
        // $hoso->ngaynhan = $mytime;
        $hoso->save();
        return redirect()->route('ho-so-giam-dinh.index')->with('status','Cập nhật thành công');
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
}
