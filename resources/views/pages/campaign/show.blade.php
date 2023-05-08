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
                            Overview</h1>
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
                            <li class="breadcrumb-item text-muted">Campaign</li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Campaign Details</li>
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
                    <!--begin::Navbar-->
                    <div class="card mb-6">
                        <div class="card-body pt-9 pb-0">
                            <!--begin::Details-->
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="../asset/media/svg/files/fil001.svg" alt="image" />
                                        <div
                                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                        </div>
                                    </div>
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#"
                                                    class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $data->campaign_name }}</a>
                                                <a href="#">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->

                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-5 mb-4 pe-2">
                                                <p class="text-gray-400 fw-semibold fs-6">Instrument that assists companies
                                                    in measuring the level of customer
                                                    satisfaction, for a product/service</p>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->

                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold" data-kt-countup="true">
                                                            {{ $data->created_at->Format('d, M Y') }}</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Start Date</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold" data-kt-countup="true">
                                                            {{ $data->client_name }}</div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Client</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold" data-kt-countup="true">23 hours 30 minutes
                                                        </div>
                                                    </div>
                                                    <!--end::Number-->
                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-gray-400">Time on Campaign</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Progress-->
                                        {{-- <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
                                                <span class="fw-bold fs-6">50%</span>
                                            </div>
                                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                <div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div> --}}
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    {{-- <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ url('overview') }}">Overview</a>
                                --}}
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2 ">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ request()->is('campaign/campaign') ? 'active' : '' }} "
                                        href="{{ url('campaign/campaign') }}">Campaigns</a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ request()->is('campaign/overview') ? 'active' : '' }}"
                                        href="{{ url('campaign/overview') }}">Overview</a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 {{ request()->is('campaign/history') ? 'active' : '' }}"
                                        href="{{ url('campaign/history') }}">History</a>
                                </li>
                                <!--end::Nav item-->
                                <li class="nav-item mt-2">
                                    {{-- <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('history') }}">History</a>
                                --}}
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                    <!--end::Navbar-->

                    @yield('contentsecond')

                </div>
                <!--end::Content container-->
            </div>
            <div class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <!--begin::Toolbar-->
                    <div class="d-flex flex-wrap flex-stack mb-6">
                        <!--begin::Title-->
                        <h3 class="fw-bold my-2">Campaign Details
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Row-->
                    <div class="card mb-2 mb-xl-10">
                        <!--begin::Body-->
                        <div class="card-body py-10">
                            <!--begin::Overview-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-xl-6 mb-10 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h4><i class="fa-regular fa-user mx-3"></i>Client Name</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->client_name }}</h4>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-envelope mx-3"></i>Start Date</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->setup_age_start }}</h4>

                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h5><i class="fa-regular fa-hashtag mx-3"></i>Time on Campaign</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">23 hours 30 minutes </h4>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h4><i class="fa-solid fa-phone mx-3"></i>Sent by</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->client_name }} </h4>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h4><i class="fa-solid fa-location-dot mx-3"></i>Domicile</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->setup_domicile }} </h4>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h5><i class="fa-solid fa-venus-mars mx-3"></i>Target Respondents</h5>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->setup_total_respondent }} </h4>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <div class="row mb-2">
                                        <h4><i class="fa-regular fa-circle-user mx-3"></i>Blasted Count</h4>
                                    </div>
                                </div>
                                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                                    <h4 class="mb-0">{{ $data->total_blasting }}</h4>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Overview-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2022&copy;</span>
                    <a href="https://keenthemes.com" target="_blank"
                        class="text-gray-800 text-hover-primary">Keenthemes</a>
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
