@extends('pages.campaign.index')

@section('contentsecond')
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="fw-bold my-2">My Campaigns
            <span class="fs-6 text-gray-400 fw-semibold ms-1"></span>
        </h3>
        <!--end::Title-->
        <!--begin::Controls-->
        <div class="d-flex align-items-center my-2">
            <a href="{{ route('campaign.create.step.one') }}" class="btn btn-sm fw-bold btn-primary">New Campaign</a>
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9">
        <!--begin::Col-->
        @foreach ($campaign as $data)
            <div class="col-md-6 col-xl-4">
                <!--begin::Card-->
                <a href="{{ route('campaign.show', $data->id) }}" class="card border-hover-primary">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="asset/media/svg/files/fil001.svg" alt="image" class="p-3" />
                            </div>
                            <p>{{ $data->campaign_name }}</p>
                            <!--end::Avatar-->
                        </div>
                    </div>
                    <!--end:: Card header-->
                    <!--begin:: Card body-->

                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <!--end::Name-->
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-semibold fs-5 mt-1">{{ $data->client_name }}</p>
                        <p class="text-gray-400 fw-semibold fs-5 mt-1">{{ $data->created_at }}</p>
                        {{-- <p class="text-gray-400 fw-semibold fs-5 mt-1">23 hours 30 minutes</p> --}}
                        <!--end::Description-->

                    </div>
                    <!--end:: Card body-->
                </a>
                <!--end::Card-->
            </div>
        @endforeach
    </div>
    <!--end::Row-->
@endsection
