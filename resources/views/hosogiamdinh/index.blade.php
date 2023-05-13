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
                        <p class="p-5"><a href="{{route('ho-so-giam-dinh.create')}}" class="btn btn-light-primary">Thêm mới hồ sơ</a></p>
                       
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                        
                        <div class="table-responsive p-5">
                            <table class="table table-row-dashed table-row-gray-300 gy-7">
                                <thead>
                                    <tr class="fw-bolder fs-6 text-gray-800">
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th>Salary</th>
                                        <th>Salary</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                        <td>$170,750</td>
                                    </tr>
                                </tbody>
                            </table>
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