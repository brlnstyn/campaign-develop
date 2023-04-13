@extends('layouts.app')

@section('content')

<!--begin::Main-->
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
                        Create Campaign</h1>
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
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">User Profile</li>
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
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item m-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Campaign Details</h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15 " data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Demographic</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Respondents</h3>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Messages</h3>
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->

                        <form action="{{ route('campaign.create.step.three.post') }}" method="POST" class="mx-auto w-100 mw-600px m-3">
                            @csrf
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark">Setup Respondents
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Info terkait Respondents</div>
                                        <!--end::Notice-->
                                        <div class="m-5 fv-row">
                                            <!--begin::Label-->
                                            <label class="required form-label mb-2">Target Respondents</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="setup_total_respondent" placeholder="" value="{{ $campaign->setup_total_respondent ?? '' }}" required autofocus />
                                            <!--end::Input-->
                                        </div>
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div>
                                                <a href="{{ route('campaign.create.step.two') }}" class="btn btn-secondary">Back</a>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-lg btn-primary">Continue
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                                                rx="1" transform="rotate(-180 18 13)"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon--></button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Actions-->
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Navbar-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->

@endsection
