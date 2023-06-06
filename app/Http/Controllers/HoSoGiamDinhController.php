<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoSoGiamDinh;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $title = 'Danh sách hồ sơ giám định';
        $hosogd = HoSoGiamDinh::orderBy('id', 'DESC')->paginate(10);
        return view('hosogiamdinh.index', compact('hosogd', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Tiếp nhận hồ sơ giám định';
        return view('hosogiamdinh.tiepnhan', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation thông tin điền form
        $rules = [
            'soqd' => ['required', 'max:255'],
            'ngayqd' => ['required', 'date'],
            'nguoigiao' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'chucvunguoigiao' => ['required', 'in:Điều tra viên,Cán bộ,Phó đội trưởng,Đội trưởng,Phó trưởng phòng,Trưởng phòng'],
            'nguoinhan' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'chucvunguoinhan' => ['required', 'in:Giám định viên,Cán bộ,Phó đội trưởng,Đội trưởng,Phó trưởng phòng,Trưởng phòng'],
            'donvitrungcau' => ['required','in:Cơ quan Cảnh sát điều tra Công an tỉnh Cao Bằng,Cơ quan Cảnh sát điều tra Công an thành phố Cao Bằng,Cơ quan Cảnh sát điều tra Công an huyện Hòa An,Cơ quan Cảnh sát điều tra Công an huyện Hà Quảng,Cơ quan Cảnh sát điều tra Công an huyện Nguyên Bình,Cơ quan Cảnh sát điều tra Công an huyện Bảo Lạc,Cơ quan Cảnh sát điều tra Công an huyện Bảo Lâm,Cơ quan Cảnh sát điều tra Công an huyện Quảng Hòa,Cơ quan Cảnh sát điều tra Công an huyện Trùng Khánh,Cơ quan Cảnh sát điều tra Công an huyện Hạ Lang,Cơ quan Cảnh sát điều tra Công an huyện Thạch An'],
            'nguoikyqd' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềếềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'soluongmaugiamdinh' => ['required', 'numeric'],
            'linhvucgiamdinh' => ['required'],
            'tinhtrangdoituonggiamdinh' => ['required'],
        ];
        $messenger = [
            'soqd.required' => 'Bạn không được để trống số Quyết định',
            'soqd.max' => 'Số quyết định không được nhiều hơn :max ký tự',
            'ngayqd.required' => 'Bạn không được để trống ngày của Quyết định',
            'ngayqd.date' => 'Ngày quyết định phải có định dạng ngày/tháng/năm',
            'nguoigiao.required' => 'Bạn không được để trống tên người giao mẫu',
            'nguoigiao.regex' => 'Tên người giao mẫu phải là chữ (không có số và ký tự đặc biệt)',
            'chucvunguoigiao.required' => 'Bạn không được để trống chức vụ người giao mẫu',
            'chucvunguoigiao.in' => 'Chức vụ không hợp lệ',
            'nguoinhan.required' => 'Bạn không được để trống tên người nhận mẫu',
            'nguoinhan.regex' => 'Tên người nhận mẫu phải là chữ (không có số và ký tự đặc biệt)',
            'chucvunguoinhan.required' => 'Bạn không được để trống chức vụ người nhận mẫu',
            'chucvunguoinhan.in' => 'Chức vụ không hợp lệ',
            'donvitrungcau.required' => 'Bạn không được để trống đơn vị trưng cầu giám định',
            'donvitrungcau.in' => 'Đơn vị không hợp lệ',
            'nguoikyqd.required' => 'Bạn không được để trống tên người ký quyết định trưng cầu',
            'nguoikyqd.regex' => 'Tên người ký quyết định phải là chữ (không có số và ký tự đặc biệt)',
            'soluongmaugiamdinh.required' => 'Không được để trống số lượng mẫu giám định',
            'soluongmaugiamdinh.numeric' => 'Số lượng mẫu phải ở định dạng số',
            'linhvucgiamdinh.required' => 'Bạn không được để trống lĩnh vực trưng cầu',
            'tinhtrangdoituonggiamdinh.required' => 'Bạn không được để trống tình trạng đối tượng giám định',
        ];
        $request->validate($rules, $messenger);

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
        return redirect()
            ->route('ho-so-giam-dinh.index')
            ->with('status', 'Thêm thành công');
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
        $title = 'Cập nhật hồ sơ giám định';
        $hoso = HoSoGiamDinh::find($id);
        return view('hosogiamdinh.suatiepnhan', compact('hoso', 'title'));
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

        //Validation thông tin điền form
        $rules = [
            'soqd' => ['required', 'max:255'],
            'ngayqd' => ['required', 'date'],
            'nguoigiao' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'chucvunguoigiao' => ['required', 'in:Điều tra viên,Cán bộ,Phó đội trưởng,Đội trưởng,Phó trưởng phòng,Trưởng phòng'],
            'nguoinhan' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'chucvunguoinhan' => ['required', 'in:Giám định viên,Cán bộ,Phó đội trưởng,Đội trưởng,Phó trưởng phòng,Trưởng phòng'],
            'donvitrungcau' => ['required','in:Cơ quan Cảnh sát điều tra Công an tỉnh Cao Bằng,Cơ quan Cảnh sát điều tra Công an thành phố Cao Bằng,Cơ quan Cảnh sát điều tra Công an huyện Hòa An,Cơ quan Cảnh sát điều tra Công an huyện Hà Quảng,Cơ quan Cảnh sát điều tra Công an huyện Nguyên Bình,Cơ quan Cảnh sát điều tra Công an huyện Bảo Lạc,Cơ quan Cảnh sát điều tra Công an huyện Bảo Lâm,Cơ quan Cảnh sát điều tra Công an huyện Quảng Hòa,Cơ quan Cảnh sát điều tra Công an huyện Trùng Khánh,Cơ quan Cảnh sát điều tra Công an huyện Hạ Lang,Cơ quan Cảnh sát điều tra Công an huyện Thạch An'],
            'nguoikyqd' => ['required', 'regex:/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềếểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s ]+$/'],
            'soluongmaugiamdinh' => ['required', 'numeric'],
            'linhvucgiamdinh' => ['required'],
            'tinhtrangdoituonggiamdinh' => ['required'],
        ];
        $messenger = [
            'soqd.required' => 'Bạn không được để trống số Quyết định',
            'soqd.max' => 'Số quyết định không được nhiều hơn :max ký tự',
            'ngayqd.required' => 'Bạn không được để trống ngày của Quyết định',
            'ngayqd.date' => 'Ngày quyết định phải có định dạng ngày/tháng/năm',
            'nguoigiao.required' => 'Bạn không được để trống tên người giao mẫu',
            'nguoigiao.regex' => 'Tên người giao mẫu phải là chữ (không có số và ký tự đặc biệt)',
            'chucvunguoigiao.required' => 'Bạn không được để trống chức vụ người giao mẫu',
            'chucvunguoigiao.in' => 'Chức vụ không hợp lệ',
            'nguoinhan.required' => 'Bạn không được để trống tên người nhận mẫu',
            'nguoinhan.regex' => 'Tên người nhận mẫu phải là chữ (không có số và ký tự đặc biệt)',
            'chucvunguoinhan.required' => 'Bạn không được để trống chức vụ người nhận mẫu',
            'chucvunguoinhan.in' => 'Chức vụ không hợp lệ',
            'donvitrungcau.required' => 'Bạn không được để trống đơn vị trưng cầu giám định',
            'donvitrungcau.in' => 'Đơn vị không hợp lệ',
            'nguoikyqd.required' => 'Bạn không được để trống tên người ký quyết định trưng cầu',
            'nguoikyqd.regex' => 'Tên người ký quyết định phải là chữ (không có số và ký tự đặc biệt)',
            'soluongmaugiamdinh.required' => 'Không được để trống số lượng mẫu giám định',
            'soluongmaugiamdinh.numeric' => 'Số lượng mẫu phải ở định dạng số',
            'linhvucgiamdinh.required' => 'Bạn không được để trống lĩnh vực trưng cầu',
            'tinhtrangdoituonggiamdinh.required' => 'Bạn không được để trống tình trạng đối tượng giám định',
        ];
        $request->validate($rules, $messenger);

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
        return redirect()
            ->route('ho-so-giam-dinh.index')
            ->with('status', 'Cập nhật thành công');
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
        $phutketthuc = $phuthientai + 15;
        if ($phutketthuc > 60) {
            $phutketthuc = $phutketthuc - 10;
        }
        $ngayhientai = date('d');
        $thanghientai = date('m');
        $namhientai = date('Y');
        $soqd = $request->soqd;
        $date = date_create($request->ngayqd);
        $ngayqd = date_format($date, 'd/m/Y');
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

    public function WordEdit(Request $request, $id)
    {
        $hoso = HoSoGiamDinh::find($id);
        $ngaynhan = date_create($hoso->ngaynhan);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $giohientai = date('H');
        $phuthientai = date('i');
        $phutketthuc = $phuthientai + 15;
        if ($phutketthuc > 60) {
            $phutketthuc = $phutketthuc - 10;
        }
        $ngayhientai = date_format($ngaynhan, 'd');
        $thanghientai = date_format($ngaynhan, 'm');
        $namhientai = date_format($ngaynhan, 'Y');
        $soqd = $request->soqd;
        $date = date_create($request->ngayqd);
        $ngayqd = date_format($date, 'd/m/Y');
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

    public function ThongKeHoSoGiamDinh(Request $Request)
    {
        $title = 'Thống kê hồ sơ giám định';

        if ($Request->has('tungay') && $Request->has('denngay')) {
            $tungay = $Request->tungay;
            $denngay = $Request->denngay;
            $hosogd = HoSoGiamDinh::whereBetween('ngaynhan', [$tungay, $denngay])
                ->orderBy('id', 'DESC')
                ->get();
            $count = $hosogd->count();
            $trangthaihoso = HoSoGiamDinh::whereBetween('ngaynhan', [$tungay, $denngay])
                ->select(DB::raw('count(trangthaihoso) as tongso, trangthaihoso'))
                ->groupBy('trangthaihoso')
                ->get();

            $somaugiamdinh = HoSoGiamDinh::whereBetween('ngaynhan', [$tungay, $denngay])
                ->select(DB::raw('SUM(soluongmaugiamdinh) as soluong, linhvucgiamdinh'))
                ->groupBy('linhvucgiamdinh')
                ->get();
            $tongsomaugiamdinh = $hosogd->sum('soluongmaugiamdinh');
            $donvitrungcau = HoSoGiamDinh::whereBetween('ngaynhan', [$tungay, $denngay])->select(DB::raw('count(donvitrungcau) as tongso, donvitrungcau'))    
            ->groupBy('donvitrungcau')    
            ->get();
        } else {
            $hosogd = HoSoGiamDinh::orderBy('id', 'DESC')->get();
            $count = $hosogd->count();
            $trangthaihoso = HoSoGiamDinh::select(DB::raw('count(trangthaihoso) as tongso, trangthaihoso'))
                ->groupBy('trangthaihoso')
                ->get();
            $somaugiamdinh = HoSoGiamDinh::select(DB::raw('SUM(soluongmaugiamdinh) as soluong, linhvucgiamdinh'))
                ->groupBy('linhvucgiamdinh')
                ->get();
            $tongsomaugiamdinh = $hosogd->sum('soluongmaugiamdinh');
            $donvitrungcau = HoSoGiamDinh::select(DB::raw('count(donvitrungcau) as tongso, donvitrungcau'))    
            ->groupBy('donvitrungcau')    
            ->get();
        }

        // dd($hosogd);
        return view('hosogiamdinh.thongke', compact('hosogd', 'title', 'count', 'trangthaihoso', 'somaugiamdinh', 'tongsomaugiamdinh','donvitrungcau'));
    }
}
