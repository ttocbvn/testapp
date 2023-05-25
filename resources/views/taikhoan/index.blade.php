@extends('layout')
@section('thongtintaikhoan')
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
                          Danh sách tài khoản                                               
                        </h3>                        
                        @if (session('status'))
                        <span class="card-title fw-bolder text-dark alert alert-success">
                            {{ session('status') }}
                        </span>
                        @endif
                        <p class="p-5"><a href="{{route('thong-tin-tai-khoan.create')}}" class="btn btn-light-primary">Đăng ký tài khoản</a></p>
                       
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                        
                        <div class="table-responsive p-5">
                            <table class="table table-row-dashed table-row-gray-300 gy-7">
                                <thead>
                                    <tr class="fw-bolder fs-6 text-gray-800">                                       
                                        <th class="text-center">Họ tên</th>
                                        <th class="text-center">Cấp bậc</th>                                        
                                        <th class="text-center">Chức vụ</th>
                                        <th class="text-center">Đội công tác</th>
                                        <th class="text-center">Chức danh tư pháp</th>
                                        <th class="text-center">Lĩnh vực giám định</th>
                                        <th class="text-center">Số điện thoại</th>                                                                             
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($taikhoan as $tk)
                                     <tr>                                    
                                        <td><a href="{{route('XemThongTinTaiKhoan', $tk->id)}}"  rel="noopener noreferrer">{{$tk->hoten}}</td></a>
                                        <td>{{$tk->capbac}}</td>
                                        <td>{{$tk->chucvucongtac}}</td>
                                        <td>{{$tk->doicongtac}}</td>
                                        <td>{{$tk->chucdanhtuphap}}</td>                                        
                                        <td>{{$tk->linhvucgiamdinh}}</td>                                        
                                        <td>{{$tk->sodienthoai}}</td>                                        
                                                                                                                     
                                    </tr>  
                                  @endforeach
                                                                      
                                </tbody>
                            </table>
                            {!! $taikhoan->links() !!}
                        </div>
                        
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