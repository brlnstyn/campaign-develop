@extends('pages.campaign.index')

@section('contentsecond')
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="fw-bold my-2">Profile Details
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
                    <h4 class="mb-0 fs-4">Full Name</h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->respondent_name }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Respondent Code</h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->respondent_code }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Entry Date</h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->entry_date }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Email</h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->email }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Phone Number</h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->phone }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Gender </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->gender }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Age </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->age }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Profession </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->occupation }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Address </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->address }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Sub district </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->ward }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">District </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->districts }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Regency </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->district }}
                    </p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Province </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->province }}
                    </p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Last Education </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->education }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Status </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->marital_status }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Total of Family Members
                    </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->family_members }}</p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Monthly House Spending
                    </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->expense }}
                    </p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Source of House Drinking Water
                    </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->source_water }}
                    </p>
                </div>
                <div class="col-xl-6 mb-15 mb-xl-0 pe-5">
                    <h4 class="mb-0">Energy source for Cooking
                    </h4>
                    <p class="fs-6 fw-semibold text-gray-600 py-4 m-0">{{ $value->source_energy }}
                    </p>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Overview-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Row-->
@endsection
