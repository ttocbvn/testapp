@extends('layout')
@section('taomoihoso')
     <!-- Phần trang nội dung -->
          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content">
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container">
                <!--begin::Row-->

                <div class="row gy-5 g-xl-12">
                  <!--begin::Col-->
                  <div class="col-xl-12">
                    <!--begin::List Widget 3-->
                    <div class="card card-xl-stretch mb-xl-2">
                      <!--begin::Header-->
                      <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                          Người giao nhận quyết định trưng cầu giám định
                        </h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            Vui lòng kiểm tra lại dữ liệu
                        </div>
                    @endif
                        <p class="p-5"><a href="{{route('ho-so-giam-dinh.index')}}" class="btn btn-light-primary">Quản lý hồ sơ</a></p>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <form action="{{route('ho-so-giam-dinh.update', $hoso->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <!-- Block -->
                        <div class="row p-5">
                          <!-- bắt đầu cột trái -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Số quyết định trưng cầu:
                                </h6></label
                              >
                              <input
                                type="text"
                                class="form-control"
                                required
                                value="{{$hoso->soqd}}"
                                placeholder="VD: 01/QĐ-TCGĐ" name="soqd" />
                              <span class="form-text text-muted"
                                >Điền đẩy đủ theo quyết định</span
                              >
                              @error('soqd')
                                  <p><span style="color: red">{{$message}}</span></p>
                              @enderror
                            </div>
                          </div>
                          <!-- Kết thúc cột trái -->
                          <!-- bắt đầu cột phải -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Ngày quyết định:
                                </h6></label
                              >
                              <input
                                class="form-control"
                                type="date"
                                name="ngayqd"
                                value="{{$hoso->ngayqd}}"
                                id="example-date-input" />
                              <span class="form-text text-muted"
                                >Định dạng: ngày/tháng/năm</span
                              >
                              @error('ngayqd')
                                  <p><span style="color: red">{{$message}}</span></p>
                              @enderror
                            </div>
                          </div>
                          <!-- Kết thúc cột phải -->
                        </div>
                        <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                          <!-- bắt đầu cột trái -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Người giao:
                                </h6></label
                              >
                              <input
                                type="text"
                                class="form-control"
                                value="{{$hoso->nguoigiao}}"
                                name="nguoigiao"
                                placeholder="VD: Nguyễn Văn Nam" />
                              <span class="form-text text-muted"
                                >Điền đầy đủ Họ và tên (không viết tắt)</span
                              >
                              @error('nguoigiao')
                                  <p><span style="color: red">{{$message}}</span></p>
                              @enderror
                            </div>
                          </div>
                          <!-- Kết thúc cột trái -->
                          <!-- bắt đầu cột phải -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Chức vụ người giao:
                                </h6></label
                              >
                              <select
                                class="form-select"
                                id="exampleSelect1"
                                name="chucvunguoigiao">
                                @php
                                   $mangchucvu = ['Điều tra viên','Cán bộ','Phó đội trưởng','Đội trưởng','Phó trưởng phòng','Trưởng phòng']; 
                                @endphp
                                
                                @foreach($mangchucvu as $item)
                                    <option value="{{ $item }}" @if($hoso->chucvunguoigiao=== $item) selected='selected' @endif> {{ $item }}</option>
                                @endforeach                               
                                @error('chucvunguoigiao')
                                  <p><span style="color: red">{{$message}}</span></p>
                              @enderror
                              </select>
                            </div>
                          </div>
                          <!-- Kết thúc cột phải -->
                        </div>
                        <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                          <!-- bắt đầu cột trái -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Người nhận:
                                </h6></label
                              >
                              <input
                                type="text"
                                class="form-control"
                                value="{{$hoso->nguoinhan}}"
                                name="nguoinhan"
                                placeholder="VD: Nguyễn Văn Nam" />
                              <span class="form-text text-muted"
                                >Điền đầy đủ Họ và tên (không viết tắt)</span
                              >
                            </div>
                          </div>
                          <!-- Kết thúc cột trái -->
                          <!-- bắt đầu cột phải -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Chức vụ người nhận:
                                </h6></label
                              >
                              <select
                                class="form-select"
                                id="exampleSelect1"
                                name="chucvunguoinhan">
                                @php
                                   $mangchucvu = ['Giám định viên','Cán bộ','Phó đội trưởng','Đội trưởng','Phó trưởng phòng','Trưởng phòng']; 
                                @endphp
                                
                                @foreach($mangchucvu as $item)
                                    <option value="{{ $item }}" @if($hoso->chucvunguoinhan=== $item) selected='selected' @endif> {{ $item }}</option>
                                @endforeach                            
                              </select>
                            </div>
                          </div>
                          <!-- Kết thúc cột phải -->
                        </div>
                        <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                          <!-- bắt đầu cột trái -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Cơ quan trưng cầu giám định:
                                </h6></label
                              >
                              <select
                                class="form-select"
                                id="exampleSelect1"
                                name="donvitrungcau">
                                @php
                                   $mangchucvu = [
                                      'Cơ quan Cảnh sát điều tra Công an tỉnh Cao Bằng',
                                      'Cơ quan Cảnh sát điều tra Công an thành phố Cao Bằng',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Hòa An',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Hà Quảng',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Nguyên Bình',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Bảo Lạc',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Bảo Lâm',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Quảng Hòa',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Trùng Khánh',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Hạ Lang',
                                      'Cơ quan Cảnh sát điều tra Công an huyện Thạch An'
                                    ]; 
                                @endphp                                
                                @foreach($mangchucvu as $item)
                                    <option value="{{ $item }}" @if($hoso->donvitrungcau=== $item) selected='selected' @endif> {{ $item }}</option>
                                @endforeach                                
                              </select>
                            </div>
                          </div>
                          <!-- Kết thúc cột trái -->
                          <!-- bắt đầu cột phải -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Người ký quyết định:
                                </h6></label
                              >
                              <input
                                type="text"
                                class="form-control"
                                name="nguoikyqd"
                                value="{{$hoso->nguoikyqd}}"
                                placeholder="VD: Nguyễn Văn Nam" />

                              <span class="form-text text-muted"
                                >Điền đầy đủ Họ và tên (không viết tắt)</span
                              >
                            </div>
                          </div>
                          <!-- Kết thúc cột phải -->
                        </div>
                        <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                          <!-- bắt đầu cột trái -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Số lượng mẫu giám định:
                                </h6></label
                              >
                              <input class="form-control" type="number" name="soluongmaugiamdinh" min="1" value="{{$hoso->soluongmaugiamdinh}}" id="example-number-input" />
                            </div>
                          </div>
                          <!-- Kết thúc cột trái -->
                          <!-- bắt đầu cột phải -->
                          <div class="p-2 col-lg-6 col-sm-12 rounded">
                            <div class="p-2">
                              <label class="form-label"
                                ><h6 class="text-dark required">
                                  Lĩnh vực giám định:
                                </h6></label
                              >
                              <select class="form-control" id="exampleSelect1" name="linhvucgiamdinh"> 
                                @if ($hoso->linhvucgiamdinh == "Giám định hình ảnh video")
                                    <option selected value="Giám định hình ảnh video">Giám định hình ảnh và video</option>
                                    <option value="Giám định Điện thoại">Giám định Điện thoại</option>                                                                    
                                    <option value="Giám định Dữ liệu bộ nhớ">Giám định Dữ liệu bộ nhớ</option> 
                                @elseif($hoso->linhvucgiamdinh == "Giám định Điện thoại")
                                    <option value="Giám định hình ảnh video">Giám định hình ảnh và video</option>
                                    <option selected value="Giám định Điện thoại">Giám định Điện thoại</option>                                                                    
                                    <option value="Giám định Dữ liệu bộ nhớ">Giám định Dữ liệu bộ nhớ</option> 
                                @elseif($hoso->linhvucgiamdinh == "Giám định Dữ liệu bộ nhớ")
                                    <option value="Giám định hình ảnh video">Giám định hình ảnh và video</option>
                                    <option value="Giám định Điện thoại">Giám định Điện thoại</option>                                                                    
                                    <option selected value="Giám định Dữ liệu bộ nhớ">Giám định Dữ liệu bộ nhớ</option> 
                                @endif                                                                   
                                                                                                   
                              </select>
                            </div>
                          </div>
                          <!-- Kết thúc cột phải -->
                        </div>
                        <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                            <!-- bắt đầu cột trái -->
                            <div class="p-2 col-lg-6 col-sm-12 rounded">
                                <div class="p-2">
                                    <label class="form-label"
                                      ><h6 class="text-dark required">
                                        Tình trạng hồ sơ:
                                      </h6></label
                                    >
                                    <select class="form-select" id="exampleSelect1" name="trangthaihoso">
                                        @if ($hoso->trangthaihoso == "Đã tiếp nhận")
                                            <option selected value="Đã tiếp nhận">Đã tiếp nhận</option>
                                            <option value="Đã kết thúc">Đã kết thúc</option>
                                        @else
                                            <option value="Đã tiếp nhận">Đã tiếp nhận</option>
                                            <option selected value="Đã kết thúc">Đã kết thúc</option>
                                        @endif
                                                                           
                                    </select>
                                  </div>
                            </div>
                            <!-- Kết thúc cột trái -->
                            <!-- bắt đầu cột phải -->
                            <div class="p-2 col-lg-6 col-sm-12 rounded">
                              
                            </div>
                            <!-- Kết thúc cột phải -->
                          </div>
                          <!-- End Block -->
                        <!-- Block -->
                        <div class="row p-5">
                          <label class="form-label"
                                ><h6 class="text-dark required">
                                  Tình trạng đối tượng giám định:
                                </h6></label
                              >
                              
                          <textarea class="form-control" data-provide="markdown" id="kt_docs_ckeditor_classic" cols="100" rows="10" name="tinhtrangdoituonggiamdinh">{{$hoso->tinhtrangdoituonggiamdinh}}</textarea>
                          <style> .ck.ck-editor {width: 1000px; padding: 15px; text-align: center} </style>
                          <div class="card-footer">
                            <div class="row">
                              <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2" name="save">Cập nhật</button>
                                <button type="submit" formaction="{{route('WordEdit',$hoso->id)}}" class="btn btn-primary mr-2" name="download">Tải file</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                              </div>														
                            </div>
                          </div>
                        </div>
                        <!-- End Block -->
                      </form>
                      <!--end::Body-->
                    </div>
                    <!--end:List Widget 3-->
                  </div>
                  <!--end::Col-->
                </div>

                <!--end::Row-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>
          <!--end::Content-->
          <!-- Phần cuối trang nội dung -->
@endsection
@push('custom-scripts')
<script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script>
  ClassicEditor
.create(document.querySelector('#kt_docs_ckeditor_classic'),{
  fontFamily: {
        options: [
          "Times New Roman", 'Times', 'serif',
        ],
        toolbar: [
        'heading', 'bulletedList', 'numberedList', 'fontFamily', 'undo', 'redo'
        ]
  }
})
.then(editor => {
    console.log(editor);
   
})
.catch(error => {
    console.error(error);
});
</script>
@endpush