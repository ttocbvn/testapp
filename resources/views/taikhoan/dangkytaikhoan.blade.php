@extends('layout')
@section('dangkytaikhoan')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Đăng ký tài khoản
                        </h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                Vui lòng kiểm tra lại dữ liệu
                            </div>
                        @endif
                        <p class="p-5 card-toolbar"><a href="{{ route('ho-so-giam-dinh.index') }}"
                                class="btn btn-light-primary">Quản lý hồ sơ</a></p>
                    </div>
                    <!--end::Header-->
                    <!--begin::Content-->
                    <div id="kt_account_profile_details" class="collapse show">
                        <!--begin::Form-->
                        <form id="kt_account_profile_details_form" class="form" method="POST">
                            @csrf
                            <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url(assets/media/avatars/blank.png)">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Tên tài khoản</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="tentaikhoan"
                                            class="form-control form-control-lg form-control-solid" placeholder="Username"
                                            value="{{ old('tentaikhoan') }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Mật khẩu:</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="password"
                                            class="form-control form-control-lg form-control-solid" name="matkhau"
                                            placeholder="" value="" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">Số điện thoại</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Số điện thoại đang sử dụng"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="tel"
                                            class="form-control form-control-lg form-control-solid" name="sodienthoai"
                                            placeholder="Nhập số điện thoại" value="{{ old('sodienthoai') }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">Đội công tác</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Lựa chọn đội đang công tác"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select form-select-solid form-select-lg" id="exampleSelect1"
                                            name="doicongtac">
                                            <option value="Khám nghiệm hiện trường">
                                                Khám nghiệm hiện trường
                                            </option>
                                            <option value="Giám định">Giám định</option>
                                            <option value="Kỹ thuật phòng chống tội phạm">
                                                Kỹ thuật phòng chống tội phạm
                                            </option>                                         
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                  <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">Chức vụ:</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select form-select-solid form-select-lg" id="exampleSelect1"
                                            name="chucvucongtac">                                            
                                            <option value="Cán bộ">Cán bộ</option>
                                            <option value="Phó đội trưởng">Phó đội trưởng</option>
                                            <option value="Đội trưởng">Đội trưởng</option>
                                            <option value="Phó trưởng phòng">Phó trưởng phòng</option>
                                            <option value="Trưởng phòng">Trưởng phòng</option>                                      
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="required">Cấp bậc:</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select form-select-solid form-select-lg" id="exampleSelect1"
                                            name="capbac">                                            
                                            <option value="Thiếu úy">Thiếu úy</option>
                                            <option value="Trung úy">Trung úy</option>
                                            <option value="Thượng úy">Thượng úy</option>
                                            <option value="Đại úy">Đại úy</option>
                                            <option value="Thiếu tá">Thiếu tá</option>
                                            <option value="Trung tá">Trung tá</option>
                                            <option value="Thượng tá">Thượng tá</option>
                                            <option value="Đại tá">Đại tá</option>                                                                                
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="">Chức danh tư pháp:</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select form-select-solid form-select-lg" id="exampleSelect1"
                                            name="chucdanhtuphap">                                            
                                            <option value="Giám định viên tư pháp">Giám định viên tư pháp</option>
                                            <option value="Kỹ thuật viên">Kỹ thuật viên</option>
                                            <option value="Trợ lý giám định">Trợ lý giám định</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="">Lĩnh vực giám định:</span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <select class="form-select form-select-solid form-select-lg" id="exampleSelect1"
                                            name="chucdanhtuphap">                                            
                                            <option value="Giám định Kỹ thuật số và điện tử">Giám định Kỹ thuật số và điện tử</option>
                                            <option value="Giám định Kỹ thuật">Giám định Kỹ thuật</option>
                                            <option value="Giám định Tài liệu">Giám định Tài liệu</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                 <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="">Số thẻ giám định</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Điền vào số thẻ (nếu có)"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" 
                                            class="form-control form-control-lg form-control-solid" name="sothegiamdinh"
                                            placeholder="Nhập vào số thẻ giám định viên (nếu có)" value="{{ old('sothegiamdinh') }}" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                 <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="">Nơi cấp:</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Sửa đổi thông tin (nếu sai)"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" 
                                            class="form-control form-control-lg form-control-solid" name="noicapthegiamdinh"
                                            value="Ủy ban nhân dân tỉnh Cao Bằng" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                 <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                        <span class="">Ngày cấp:</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Điền vào ngày cấp (nếu có)"></i>                                       
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input class="form-control form-control-lg form-control-solid" type="date" name="ngaycapthegiamdinh"
                                                value="{{ old('ngayqd') }}" id="example-date-input" />
                                            <span class="form-text text-muted">Định dạng: ngày/tháng/năm</span>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->




                                
                            </div>
                            <!--end::Card body-->
                            <!--begin::Actions-->
                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">Save Changes</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Basic info-->
            </div>
        </div>
    </div>
@endsection
