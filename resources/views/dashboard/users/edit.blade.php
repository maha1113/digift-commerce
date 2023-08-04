@extends('dashboard.index')
@section('content')
@if (session('flashMessage'))
    <div class="alert alert-success">{{ session('flashMessage') }}</div>
@endif
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bold m-0">Add User</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form action="{{ route('admin.users.store') }}"  method="post" id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->

                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">{{ __('ar/app.name') }}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Name" value="{{ $user->name }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    <!--end::Col-->
                </div>
                @error('name')

                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-semibold fs-6">{{ __('ar/app.email') }}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ $user->email }}">
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    <!--end::Col-->
                </div>
                @error('email')

                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                        <span class="required">{{ __('ar/app.password') }}</span>
                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Password" data-bs-original-title="Password" data-kt-initialized="1"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="tel" name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" value="{{ $user->password }}" >
                    <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    <!--end::Col-->
                </div>
                @error('password')

                <p class="text-danger">{{ $message }}</p>
                @enderror
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-semibold fs-6">{{ __('ar/app.type') }}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <input type="text" name="type" class="form-control form-control-lg form-control-solid" placeholder="role" value="{{ $user->type }}">
                    </div>
                    <!--end::Col-->
                    @error('type')

                    <p class="text-danger">{{ $message }}</p>
                    @enderror

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('ar/app.create user') }}</button>
                  </div>
                <!--end::Input group-->
                <!--begin::Input group-->







@endsection
