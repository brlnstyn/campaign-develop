@extends('layouts.app')

@section('content')
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            User Details</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Database</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Show</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Content-->
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Row-->

                    <div class="row gy-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4 mb-xl-10">
                            <!--begin::Engage widget 1-->
                            <div class="card md-10">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column flex-center">
                                    <!--begin::Heading-->
                                    <div class="mb-2">
                                        <!--begin::Title-->
                                        <h3 class="fw-semibold text-gray-800 text-center lh-lg">
                                            User Detail
                                        </h3>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                </div>
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-user mx-3"></i>Name</h5>
                                        <p class="mx-5">{{ $data->respondent_name }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-envelope mx-3"></i>Email</h5>
                                        <p class="mx-5">{{ $data->email }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-hashtag mx-3"></i>Respondent Code</h5>
                                        <p class="mx-5">{{ $data->respondent_code }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-phone mx-3"></i>Phone Number</h5>
                                        <p class="mx-5">{{ $data->phone }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-location-dot mx-3"></i>Domicile</h5>
                                        <p class="mx-5">{{ $data->province }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-venus-mars mx-3"></i>Gender</h5>
                                        <p class="mx-5">{{ $data->gender }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-circle-user mx-3"></i>Age</h5>
                                        <p class="mx-5">{{ $data->age }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-briefcase mx-3"></i>Profession</h5>
                                        <p class="mx-5">{{ $data->occupation }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-map mx-3"></i>Address</h5>
                                        <p class="mx-5">{{ $data->address }}</p>
                                    </div>
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-ring mx-3"></i>Status</h5>
                                        <p class="mx-5">{{ $data->marital_status }}</p>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 1-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8 mb-5 mb-xl-10">
                            <!--begin::Table Widget 4-->
                            <div class="card card-flush xl-100">
                                <!--begin::Card header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">History Campaign</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Actions-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2">
                                    <!--begin::Table-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table id="kt_datatable_horizontal_scroll"
                                            class="table table-striped table-row-bordered gy-5 gs-7">
                                            <thead>
                                                <tr class="fw-semibold fs-6 text-gray-800">
                                                    <th class="min-w-150px">Campaign</th>
                                                    <th class="min-w-150px">Status</th>
                                                    <th class="min-w-150px">Client</th>
                                                    <th class="min-w-100px">Joined Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($campaign as $item)
                                                    <tr>
                                                        <td>{{ $item->campaign_name }}</td>
                                                        <td>
                                                            @switch($item)
                                                                @case($item->status == '1')
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-success">Completed</span>
                                                                @break

                                                                @default
                                                                    <span class="badge py-3 px-4 fs-7 badge-light-info">On
                                                                        Going</span>
                                                            @endswitch

                                                        </td>
                                                        <td>{{ $item->client_name }}</td>
                                                        <td>{{ $item->created_at->locale('id')->Format('d, M Y') }}</td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="10" class="text-center">Tidak Ada Data</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Table Widget 4-->
                            </div>
                            <!--end::Col-->
                        </div>
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
                <!--begin::Footer container-->
                <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-semibold me-1">2022&copy;</span>
                        <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                        <li class="menu-item">
                            <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                        </li>
                        <li class="menu-item">
                            <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                        </li>
                    </ul>
                    <!--end::Menu-->
                </div>
                <!--end::Footer container-->
            </div>
            <!--end::Footer-->
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#kt_datatable_horizontal_scroll").DataTable({
                    "scrollX": true
                });
            });
        </script>
    @endsection
