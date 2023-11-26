@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Client Database Management</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Add Client Database Form</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('client-database.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Client Database
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8">
                            <div id="table1" class="card cardTd">

                                <div class="card-body">
                                    <form method="post" action="{{ route('client-database.store') }}">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sector</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="sector" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sub Sector</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sub_sector" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose Sub Sector ">
                                                    <option></option>
                                                    @foreach ($industrys as $industry)
                                                        <option value="{{ $industry->id }}">{{ $industry->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Company Name</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="company_name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="address" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Area</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="area" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Contact Person</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="contact_person" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Designation</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="designation" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Department</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="department" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Official Phone</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="official_phone"
                                                    class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="phone" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="email" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client Status</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="client_status" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Tier</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="tier" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Comments</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="comments" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
