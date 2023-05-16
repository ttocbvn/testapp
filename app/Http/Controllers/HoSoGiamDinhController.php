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

    public function WordCreate(Request $request)
    {
       
       
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $giohientai = date('H'); 
        $phuthientai = date('i');
        $phutketthuc = $phuthientai+15;
        if($phutketthuc>60){
            $phutketthuc = $phutketthuc - 10;
        } 
        $ngayhientai = date('d'); 
        $thanghientai = date('m'); 
        $namhientai = date('Y'); 
        $soqd = $request->soqd;
        $date=date_create($request->ngayqd);
        $ngayqd= date_format($date,'d/m/Y');        
        $donvitrungcau = $request->donvitrungcau;
        $nguoigiao = $request->nguoigiao;
        $nguoinhan = $request->nguoinhan;
        $chucvunguoigiao = $request->chucvunguoigiao;
        $chucvunguoinhan = $request->chucvunguoinhan;
        $tinhtrangdoituonggiamdinh = $request->tinhtrangdoituonggiamdinh;

        //Gắn thông tin sang file mẫu
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('filemau.docx');
        $templateProcessor->setValue('giohientai', $giohientai);
        $templateProcessor->setValue('phuthientai', $phuthientai);
        $templateProcessor->setValue('ngayhientai', $ngayhientai);
        $templateProcessor->setValue('thanghientai', $thanghientai);
        $templateProcessor->setValue('namhientai', $namhientai);
        $templateProcessor->setValue('soqd', $soqd);
        $templateProcessor->setValue('ngayqd', $ngayqd);
        $templateProcessor->setValue('donvitrungcau', $donvitrungcau);
        $templateProcessor->setValue('nguoigiao', $nguoigiao);
        $templateProcessor->setValue('chucvunguoigiao', $chucvunguoigiao);
        $templateProcessor->setValue('nguoinhan', $nguoinhan);
        $templateProcessor->setValue('chucvunguoinhan', $chucvunguoinhan);
      //  $templateProcessor->setValue('tinhtrangdoituonggiamdinh', $tinhtrangdoituonggiamdinh);
        $templateProcessor->setValue('phutketthuc', $phutketthuc);        
        $templateProcessor->setHtmlBlockValue('tinhtrangdoituonggiamdinh', $tinhtrangdoituonggiamdinh); 
        //tạo fie mới       
        $pathToSave = 'ketqua.docx';
        $templateProcessor->saveAs($pathToSave);
        
        $name = 'Giao nhan.docx';
        return response()->download($pathToSave, $name);

    }

}
