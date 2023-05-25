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
                          Danh sách hồ sơ giám định                                                
                        </h3>                        
                        @if (session('status'))
                        <span class="card-title fw-bolder text-dark alert alert-success">
                            {{ session('status') }}
                        </span>
                        @endif
                        <p class="p-5"><a href="{{route('ho-so-giam-dinh.create')}}" class="btn btn-light-primary">Thêm mới hồ sơ</a></p>
                       
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                        
                        <div class="table-responsive p-5">
                            <table class="table table-row-dashed table-row-gray-300 gy-7">
                                <thead>
                                    <tr class="fw-bolder fs-6 text-gray-800">
                                       
                                        <th>Số Quyết định trưng cầu</th>
                                        <th>Ngày quyết định trưng cầu</th>
                                        <th>Người giao</th>
                                        <th>Người nhận</th>
                                        <th>Đơn vị trưng cầu</th>
                                        <th>Lĩnh vực giám định</th>
                                        <th>Trạng thái hồ sơ</th>
                                        <th>Ngày nhận</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($hosogd as $hs)
                                     <tr>
                                    
                                        <td><a href="{{route('ho-so-giam-dinh.edit', $hs->id)}}"  rel="noopener noreferrer">{{$hs->soqd}}</td></a>
                                        <td>{{date('d/m/Y', strtotime($hs->ngayqd));}}</td>
                                        <td>{{$hs->nguoigiao}}</td>
                                        <td>{{$hs->nguoinhan}}</td>
                                        <td>{{$hs->donvitrungcau}}</td>
                                        <td>{{$hs->linhvucgiamdinh}}</td>
                                        <td>@if ($hs->trangthaihoso == 'Đã tiếp nhận')
                                            <span class="badge badge-light-primary">{{$hs->trangthaihoso}}</span>
                                        @elseif ($hs->trangthaihoso == 'Đã kết thúc')
                                        <span class="badge badge-light-success">{{$hs->trangthaihoso}}</span>
                                        @else
                                        <span class="badge badge-light-info">Không có thông tin</span>
                                        @endif
                                        
                                        </td>
                                        <td>{{date('d/m/Y', strtotime($hs->ngaynhan));}}</td>                                                                                
                                    </tr>  
                                  @endforeach
                                                                      
                                </tbody>
                            </table>
                            {!! $hosogd->links() !!}
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