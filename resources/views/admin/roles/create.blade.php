@extends('admin.layouts.master')

@section('styles')
@endsection
@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Wrapper-->
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        {{ _($module_details['page_title']) }} List
                    </h1>
                    <!--end::Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../../index.html" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            User Management </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->

                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            {{ _($module_details['page_title']) }} </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-secondary fw-bold" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-6 text-muted me-1"><span class="path1"></span><span
                                    class="path2"></span>
                            </i>
                            Filter
                        </a>
                        <!--end::Menu toggle-->



                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_6512da0af0d59">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->


                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple data-kt-select2="true"
                                            data-close-on-select="false" data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_6512da0af0d59" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->

                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">
                                                Author
                                            </span>
                                        </label>
                                        <!--end::Options-->

                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked" />
                                            <span class="form-check-label">
                                                Customer
                                            </span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->

                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked />
                                        <label class="form-check-label">
                                            Enabled
                                        </label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>

                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->


                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->

                    <!--begin::Primary button-->
                    <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_create_app">
                        Create </a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Content-->
        <div id="kt_app_content" class="app-content  flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl">
                <form method="post" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="card card-flush py-4 mb-5">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Role Informations</h2>
                            </div>
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Role Title</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="role_title" class="form-control mb-2"
                                    placeholder="Enter role title" value="">
                                <!--end::Input-->

                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="required form-label">Guard</label>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" name="role_gaurd" class="form-control mb-2"
                                    placeholder="Enter Guard title" value="">
                                <!--end::Input-->

                                <!--begin::Description-->
                                <div class="text-muted fs-7">Enter Guard of Phase for Admin/Web.</div>
                                <!--end::Description-->
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Input group-->
                        </div>

                    </div>

                    <div class="card card-flush py-4">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Role Permissions</h2>
                            </div>
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <div class="scroll h-400px px-5">
                                <table class="table align-middle table-row-dashed fs-6 gy-5">
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-semibold">
                                        <!--begin::Table row-->
                                        <tr>
                                            <td class="text-gray-800">
                                                Administrator Access


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Allows a full access to the system"
                                                    data-bs-original-title="Allows a full access to the system"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span>
                                            </td>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="kt_roles_select_all">
                                                    <span class="form-check-label" for="kt_roles_select_all">
                                                        Select all
                                                    </span>
                                                </label>
                                                <!--end::Checkbox-->
                                            </td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">User Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="user_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="user_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="user_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Content Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="content_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="content_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="content_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Financial Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="financial_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="financial_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="financial_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Reporting</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="reporting_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="reporting_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="reporting_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Payroll</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="payroll_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="payroll_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="payroll_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Disputes Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="disputes_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="disputes_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="disputes_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">API Controls</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="api_controls_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="api_controls_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="api_controls_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Database Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="database_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="database_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="database_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <!--begin::Label-->
                                            <td class="text-gray-800">Repository Management</td>
                                            <!--end::Label-->

                                            <!--begin::Input group-->
                                            <td>
                                                <!--begin::Wrapper-->
                                                <div class="d-flex">
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="repository_management_read">
                                                        <span class="form-check-label">
                                                            Read
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="repository_management_write">
                                                        <span class="form-check-label">
                                                            Write
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->

                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            name="repository_management_create">
                                                        <span class="form-check-label">
                                                            Create
                                                        </span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </td>
                                            <!--end::Input group-->
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                        <!--end::Card header-->
                        <div class="card-footer d-flex justify-content-start py-6 px-9">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
    <!--end::Javascript-->
@endsection

@section('scripts')
@endsection
