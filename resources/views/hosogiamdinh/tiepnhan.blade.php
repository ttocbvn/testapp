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
                        <p class="p-5"><a href="{{route('ho-so-giam-dinh.index')}}" class="btn btn-light-primary">Quản lý hồ sơ</a></p>
                      </div>
                      <!--end::Header-->
                      <!--begin::Body-->
                      <!-- Block -->
                      <div class="row p-5">
                        <!-- bắt đầu cột trái -->
                        <div class="p-2 col-lg-6 col-sm-12 rounded">
                          <div class="p-2">
                            <label class="form-label"
                              ><h6 class="text-dark">
                                Số quyết định trưng cầu: (*):
                              </h6></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              required
                              placeholder="VD: 01/QĐ-TCGĐ" />
                            <span class="form-text text-muted"
                              >Điền đẩy đủ theo quyết định</span
                            >
                          </div>
                        </div>
                        <!-- Kết thúc cột trái -->
                        <!-- bắt đầu cột phải -->
                        <div class="p-2 col-lg-6 col-sm-12 rounded">
                          <div class="p-2">
                            <label class="form-label"
                              ><h6 class="text-dark">
                                Ngày quyết định (*):
                              </h6></label
                            >
                            <input
                              class="form-control"
                              type="date"
                              name="ngayqd"
                              value=""
                              id="example-date-input" />
                            <span class="form-text text-muted"
                              >Định dạng: ngày/tháng/năm</span
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
                              ><h6 class="text-dark">
                                Người giao: (*):
                              </h6></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              name="nguoigiao"
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
                              ><h6 class="text-dark">
                                Chức vụ người giao (*):
                              </h6></label
                            >
                            <select
                              class="form-select"
                              id="exampleSelect1"
                              name="chucvunguoigiao">
                              <option value="Điều tra viên">
                                Điều tra viên
                              </option>
                              <option value="Cán bộ">Cán bộ</option>
                              <option value="Phó đội trưởng">
                                Phó đội trưởng
                              </option>
                              <option value="Đội trưởng">Đội trưởng</option>
                              <option value="Phó trưởng phòng">
                                Phó trưởng phòng
                              </option>
                              <option value="Trưởng phòng">Trưởng phòng</option>
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
                              ><h6 class="text-dark">
                                Người nhận: (*):
                              </h6></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              name="nguoigiao"
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
                              ><h6 class="text-dark">
                                Chức vụ người nhận (*):
                              </h6></label
                            >
                            <select
                              class="form-select"
                              id="exampleSelect1"
                              name="chucvunguoinhan">
                              <option value="Điều tra viên">
                                Điều tra viên
                              </option>
                              <option value="Cán bộ">Cán bộ</option>
                              <option value="Phó đội trưởng">
                                Phó đội trưởng
                              </option>
                              <option value="Đội trưởng">Đội trưởng</option>
                              <option value="Phó trưởng phòng">
                                Phó trưởng phòng
                              </option>
                              <option value="Trưởng phòng">Trưởng phòng</option>
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
                              ><h6 class="text-dark">
                                Cơ quan trưng cầu giám định: (*):
                              </h6></label
                            >
                            <select
                              class="form-select"
                              id="exampleSelect1"
                              name="donvitrungcau">
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an tỉnh Cao Bằng">
                                Cơ quan Cảnh sát điều tra Công an tỉnh Cao Bằng
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an thành phố Cao Bằng">
                                Cơ quan Cảnh sát điều tra Công an thành phố Cao
                                Bằng
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Hòa An">
                                Cơ quan Cảnh sát điều tra Công an huyện Hòa An
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Hà Quảng">
                                Cơ quan Cảnh sát điều tra Công an huyện Hà Quảng
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Nguyên Bình">
                                Cơ quan Cảnh sát điều tra Công an huyện Nguyên
                                Bình
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Bảo Lạc">
                                Cơ quan Cảnh sát điều tra Công an huyện Bảo Lạc
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Bảo Lâm">
                                Cơ quan Cảnh sát điều tra Công an huyện Bảo Lâm
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Quảng Hòa">
                                Cơ quan Cảnh sát điều tra Công an huyện Quảng
                                Hòa
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Trùng Khánh">
                                Cơ quan Cảnh sát điều tra Công an huyện Trùng
                                Khánh
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Hạ Lang">
                                Cơ quan Cảnh sát điều tra Công an huyện Hạ Lang
                              </option>
                              <option
                                value="Cơ quan Cảnh sát điều tra Công an huyện Thạch An">
                                Cơ quan Cảnh sát điều tra Công an huyện Thạch An
                              </option>
                            </select>
                          </div>
                        </div>
                        <!-- Kết thúc cột trái -->
                        <!-- bắt đầu cột phải -->
                        <div class="p-2 col-lg-6 col-sm-12 rounded">
                          <div class="p-2">
                            <label class="form-label"
                              ><h6 class="text-dark">
                                Người ký quyết định (*):
                              </h6></label
                            >
                            <input
                              type="text"
                              class="form-control"
                              name="nguoikyqd"
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
                              ><h6 class="text-dark">
                                Số lượng mẫu giám định: (*):
                              </h6></label
                            >
                            <input class="form-control" type="number" name="soluongmaugiamdinh" min="1" value="1" id="example-number-input" />
                          </div>
                        </div>
                        <!-- Kết thúc cột trái -->
                        <!-- bắt đầu cột phải -->
                        <div class="p-2 col-lg-6 col-sm-12 rounded">
                          <div class="p-2">
                            <label class="form-label"
                              ><h6 class="text-dark">
                                Lĩnh vực giám định (*):
                              </h6></label
                            >
                            <select class="form-control" id="exampleSelect1" name="linhvucgiamdinh">                                                                    
                              <option value="Giám định hình ảnh video">Giám định hình ảnh và video</option>
                              <option value="Giám định Điện thoại">Giám định Điện thoại</option>                                                                    
                              <option value="Giám định Dữ liệu bộ nhớ">Giám định Dữ liệu bộ nhớ</option>                                                                    
                            </select>
                          </div>
                        </div>
                        <!-- Kết thúc cột phải -->
                      </div>
                      <!-- End Block -->
                      <!-- Block -->
                      <div class="row p-5">
                        <label class="form-label"
                              ><h6 class="text-dark">
                                Tình trạng đối tượng giám định (*):
                              </h6></label
                            >
                            
                        <textarea class="form-control" data-provide="markdown" id="kt_docs_ckeditor_classic" cols="100" rows="10" name="tinhtrangdoituonggiamdinh"></textarea>
                        <style> .ck.ck-editor {width: 1000px; padding: 15px; text-align: center} </style>
                        <div class="card-footer">
													<div class="row">
														<div class="col-lg-6">
															<button type="submit" class="btn btn-primary mr-2" name="save">Lưu</button>
															<button type="submit" class="btn btn-primary mr-2" name="download">Tải file</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>														
													</div>
												</div>
                      </div>
                      <!-- End Block -->

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