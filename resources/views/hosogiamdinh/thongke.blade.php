@extends('layout')
@section('taomoihoso')
    <!-- Phần trang nội dung -->
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Row-->
                <div class="row card">
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">
                            Thống kê
                        </h3>
                    </div>
                    <!-- Block -->
                    <form action="{{ route('ThongKeHoSoGiamDinh') }}" method="GET">
                        <div class="row p-5">
                            
                            <!-- bắt đầu cột trái -->
                            <div class="p-2 col-lg-5 col-sm-12 rounded">
                                <div class="p-2">
                                    <label class="form-label">
                                        <h6 class="text-dark required">
                                            Từ ngày:
                                        </h6>
                                    </label>
                                    <input type="date" class="form-control" required
                                        name="tungay" value="{{ request()->input('tungay', old('tungay')) }}" />
                                    @error('soqd')
                                        <p><span style="color: red">{{ $message }}</span></p>
                                    @enderror
                                </div>
                            </div>
                            <!-- Kết thúc cột trái -->
                            <!-- bắt đầu cột phải -->
                            <div class="p-2 col-lg-5 col-sm-12 rounded">
                                <div class="p-2">
                                    <label class="form-label">
                                        <h6 class="text-dark required">
                                            Đến ngày:
                                        </h6>
                                    </label>
                                    <input class="form-control" type="date" name="denngay" value="{{ request()->input('denngay', old('denngay')) }}"
                                        id="example-date-input" />
                                    @error('ngayqd')
                                        <p><span style="color: red">{{ $message }}</span></p>
                                    @enderror
                                </div>
                            </div>
                            <div class="p-2 col-lg-2 col-sm-12 rounded ">
                                <div class="mt-10 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Thống kê</button>
                                </div>
                            </div>
                            <!-- Kết thúc cột phải -->
                    </form>
                </div>
                <!-- End Block -->

            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row gy-5 g-xl-12 mt-6 mt-xl-9 ">
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Summary-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bolder mb-1">Tổng số vụ giám định</h3>

                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <a href="#example" class="btn btn-light btn-sm">Danh sách</a>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                    @if (!empty($trangthaihoso)) 
                                <!--end::Chart-->
                                <!--begin::Chart-->
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">                                    
                                    <div
                                        class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                        <div class="d-flex flex-center h-150px w-150px me-9 mb-5"><canvas
                                                id="myChart"></canvas></div>
                                        <span class="fs-2qx fw-bolder">{{ $count }}</span>
                                        <span class="fs-6 fw-bold text-gray-400">Tổng số vụ</span>

                                    </div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    @php
                                        $ran = ['bg-success', 'bg-danger', 'bg-gray-300', 'bg-primary'];
                                    @endphp
                                    <!--begin::Label-->
                                    @foreach ($trangthaihoso as $item)
                                        @php
                                            $randomElement = $ran[array_rand($ran, 1)];
                                        @endphp
                                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                            <div class="bullet {{ $randomElement }} me-3"></div>
                                            <div class="text-gray-400">{{ $item->trangthaihoso }}</div>
                                            <div class="ms-auto fw-bolder text-gray-700">{{ $item->tongso }}</div>
                                        </div>
                                    @endforeach
                                    <!--end::Label-->

                                </div>
                                <!--end::Labels-->
                                @else
                                        Không có dữ liệu
                                @endif
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-lg-6">
                    <!--begin::Summary-->
                    <div class="card card-flush h-lg-100">
                        <!--begin::Card header-->
                        <div class="card-header mt-6">
                            <!--begin::Card title-->
                            <div class="card-title flex-column">
                                <h3 class="fw-bolder mb-1">Tổng số mẫu giám định</h3>

                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <a href="#example" class="btn btn-light btn-sm">Danh sách</a>
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body p-9 pt-5">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                    @if (!empty($somaugiamdinh)) 
                                <!--end::Chart-->
                                <!--begin::Chart-->
                                <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">                                    
                                    <div
                                        class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                            <div class="d-flex flex-center h-150px w-150px me-9 mb-5">
                                                <canvas
                                                id="myChart2"></canvas>
                                            </div>
                                        <span class="fs-2qx fw-bolder">{{ $tongsomaugiamdinh }}</span>
                                        <span class="fs-6 fw-bold text-gray-400">Tổng số mẫu giám định</span>

                                    </div>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    @php
                                        $ran = ['bg-success', 'bg-danger', 'bg-gray-300', 'bg-primary'];
                                    @endphp
                                    <!--begin::Label-->
                                    @foreach ($somaugiamdinh as $item)
                                        @php
                                            $randomElement = $ran[array_rand($ran, 1)];
                                        @endphp
                                        <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                            <div class="bullet {{ $randomElement }} me-3"></div>
                                            <div class="text-gray-400">{{ $item->linhvucgiamdinh}}</div>
                                            <div class="ms-auto fw-bolder text-gray-700">{{ $item->soluong }}</div>
                                        </div>
                                    @endforeach
                                    <!--end::Label-->

                                </div>
                                <!--end::Labels-->
                                @else
                                        Không có dữ liệu
                                @endif
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Summary-->
                </div>
                <!--end::Col-->
               
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-12 card card-flush mt-6 mt-xl-9">
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
                            <p class="p-5"><a href="{{ route('ho-so-giam-dinh.create') }}"
                                    class="btn btn-light-primary">Thêm mới hồ sơ</a></p>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->

                        <div class="table-responsive p-5">
                            <table id="example" class="table table-row-bordered gy-5">
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
                                            <td><a href="{{ route('ho-so-giam-dinh.edit', $hs->id) }}"
                                                    rel="noopener noreferrer">{{ $hs->soqd }}</td></a>
                                            <td>{{ date('d/m/Y', strtotime($hs->ngayqd)) }}</td>
                                            <td>{{ $hs->nguoigiao }}</td>
                                            <td>{{ $hs->nguoinhan }}</td>
                                            <td>{{ $hs->donvitrungcau }}</td>
                                            <td>{{ $hs->linhvucgiamdinh }}</td>
                                            <td>
                                                @if ($hs->trangthaihoso == 'Đã tiếp nhận')
                                                    <span
                                                        class="badge badge-light-primary">{{ $hs->trangthaihoso }}</span>
                                                @elseif ($hs->trangthaihoso == 'Đã kết thúc')
                                                    <span
                                                        class="badge badge-light-success">{{ $hs->trangthaihoso }}</span>
                                                @else
                                                    <span class="badge badge-light-info">Không có thông tin</span>
                                                @endif

                                            </td>
                                            <td>{{ date('d/m/Y', strtotime($hs->ngaynhan)) }}</td>
                                        </tr>
                                    @endforeach

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
    @push('custom-scripts')
        <script>
            $("#example").DataTable();
        </script>
        {{-- <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [
                        @foreach ($trangthaihoso as $item)
                            '{{ $item->trangthaihoso }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Số lượng',
                        data: [
                            @foreach ($trangthaihoso as $item)
                                '{{ $item->tongso }}',
                            @endforeach
                        ],
                    }]
                },
                options: {
                    plugins: {
                        legend: false // Hide legend
                    },
                }
            });
        </script>
        <script>            
            const ctx = document.getElementById('myChart2').getContext('2d');
            const myChart2 = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: [
                        @foreach ($somaugiamdinh as $item)
                            '{{ $item->linhvucgiamdinh  }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Số lượng',
                        data: [
                            @foreach ($somaugiamdinh as $item)
                                '{{ $item->soluong }}',
                            @endforeach
                        ],
                    }]
                },
                options: {
                    plugins: {
                        legend: false // Hide legend
                    },
                }
            });
        </script> --}}

<script>
    $(function () {
        var ctx = document.getElementById("myChart").getContext('2d');
        var data = {
            datasets: [{
                label: 'Số lượng',
                data: [@foreach ($trangthaihoso as $item)
                                '{{ $item->tongso }}',
                            @endforeach],
                
            }],
            labels: [@foreach ($trangthaihoso as $item)
                            '{{ $item->trangthaihoso }}',
                        @endforeach
            ],
            
        };
        
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                        legend: false // Hide legend
                    },
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 12
                    }
                }
            }
        });

        var ctx_2 = document.getElementById("myChart2").getContext('2d');
        var data_2 = {
            datasets: [{
                data: [@foreach ($somaugiamdinh as $item)
                            '{{ $item->soluong  }}',
                        @endforeach],
                
            }],
            labels: [@foreach ($somaugiamdinh as $item)
                            '{{ $item->linhvucgiamdinh  }}',
                        @endforeach
            ]
        };
        var myDoughnutChart_2 = new Chart(ctx_2, {
            type: 'doughnut',
            data: data_2,
            options: {
                plugins: {
                        legend: false // Hide legend
                    },
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    labels: {
                        boxWidth: 12
                    }
                }
            }
        });
    });

</script>
    @endpush
@endsection
