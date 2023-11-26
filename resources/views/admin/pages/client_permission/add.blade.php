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
                        <span class="breadcrumb-item active">Contact Management</span>
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
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="#js-tab1" class="nav-link active" data-bs-toggle="tab">
                                        Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab2" class="nav-link" data-bs-toggle="tab">
                                        Sub Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab3" class="nav-link" data-bs-toggle="tab">
                                        Sub Sub Category
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#js-tab4" class="nav-link" data-bs-toggle="tab">
                                        Sub Sub Sub Category
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-lg-3">
                        <label class="text-center" for="category">Chose from the dropdown</label>
                        <select onchange="dropdownCategory(value)" id="dropdownCategory" name="category"
                            class="form-control select col-lg-2 category" data-width="250"
                            data-minimum-results-for-search="Infinity">
                            <option value="table1">Category</option>
                            <option value="table2">Sub Category</option>
                            <option value="table3">Sub Sub Category</option>
                            <option value="table4">Sub Sub Sub Category</option>
                        </select>
                    </div> --}}
                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('clientPermission.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Contact
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Contact Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('clientPermission.store') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">First Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="fname" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Last Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="lname" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Phone </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="phone" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">State </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="state" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Country </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="country" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="email" name="email" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Message Type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="msg_type" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose msg_type ">
                                                    <option></option>
                                                    <option value="Account creation problem">Account creation problem
                                                    </option>
                                                    <option value="Cannot login">Cannot login</option>
                                                    <option value="Client feedback entry">Client feedback entry</option>
                                                    <option value="General web issue">General web issue</option>
                                                    <option value="Order return request">Order return request</option>
                                                    <option value="Order tracking/history">Order tracking/history</option>
                                                    <option value="Product information request">Product information request
                                                    </option>
                                                    <option value="Update my account/email information">Update my
                                                        account/email information</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Message</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="message" id="" class="form-control" cols="30" rows="10"></textarea>
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
