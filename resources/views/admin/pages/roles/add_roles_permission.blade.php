@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style type="text/css">
        .form-check-label {
            text-transform: capitalize;
        }
    </style>

    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Roles & Permission Management</span>
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
        <!--end breadcrumb-->

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card p-0 py-1 mt-1">
                    <div class="card-body p-0 px-2">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="text-center  p-0 py-1">Add Roles Permission</h5>
                            </div>

                            <div class="col-lg-5">
                                <a href="{{ route('all.roles.permission') }}" type="button"
                                    class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-eye"></i>
                                    </span>
                                    All Roles with permission
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form id="myForm" method="post" action="{{ route('role.permission.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Roles Name</h6>
                                </div>
                                <div class="form-group col-sm-6 text-secondary">
                                    <select name="role_id" class="form-select mb-3" aria-label="Default select example">
                                        <option selected="">Open this select menu</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultAll">
                                <label class="form-check-label" for="flexCheckDefaultAll">Permission All</label>
                            </div>


                            <hr>

                            @foreach ($permission_groups as $group)
                                <div class="row">
                                    <!--  // Start row  -->
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label"
                                                for="flexCheckDefault">{{ $group->group_name }}</label>
                                        </div>
                                    </div>




                                    <div class="col-9">

                                        @php
                                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                        @endphp

                                        @foreach ($permissions as $permission)
                                            <div class="form-check">
                                                <input class="form-check-input" name="permission[]" type="checkbox"
                                                    value="{{ $permission->id }}"
                                                    id="flexCheckDefault{{ $permission->id }}">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault{{ $permission->id }}">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                        <br>
                                    </div>

                                </div><!--  // end row  -->
                            @endforeach

                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-4 text-secondary">
                                    <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                            class="ph-paper-plane-tilt ms-2"></i></button>

                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script type="text/javascript">
        $('#flexCheckDefaultAll').click(function() {
            if ($(this).is(':checked')) {
                $('input[type = checkbox]').prop('checked', true);
            } else {
                $('input[type = checkbox]').prop('checked', false);
            }
        });
    </script>
@endsection
