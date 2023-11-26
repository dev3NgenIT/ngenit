@extends('admin.master')
@section('content')
    <style>
        .accordion {
            --accordion-border-width: 0px !important;
        }

        .section-border {
            border-bottom: 0.5px solid #24739763;
        }
    </style>
    <div class="content-wrapper">
        <div class="content p-0">


            <!-- Page header -->
            <section class="shadow-sm">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- Page Destination/ BreadCrumb --}}
                    <div class="page-header-content d-lg-flex ">
                        <div class="d-flex px-2">
                            <div class="breadcrumb py-2">
                                <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                <a href="{{ route('hr-and-admin.index') }}" class="breadcrumb-item"><span
                                        class="breadcrumb-item active">Hr and Admin</span></a>
                            </div>
                            <a href="#breadcrumb_elements"
                                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                data-bs-toggle="collapse">
                                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                            </a>
                        </div>
                    </div>
                    {{-- Inner Page Tab --}}

                    <!-- Basic tabs -->
                    <div class="px-3">
                        <a href="{{ route('employee.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Employees</span>
                            </div>

                        </a>
                        <a href="{{ route('leaveApplications') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Leave Applications</span>
                            </div>

                        </a>
                        <a href="{{ route('job.index') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Job Post</span>
                            </div>

                        </a>
                        <a href="{{ route('job.regiserUser') }}" class="btn navigation_btn">
                            <div class="d-flex align-items-center ">
                                <i class="fa-solid fa-users me-1" style="font-size: 12px;"></i>
                                <span>Job Applier's List</span>
                            </div>

                        </a>
                        {{-- <a href="{{ route('marketing-dashboard.index') }}" class="btn navigation_btn">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-business-time me-1" style="font-size: 12px;"></i>
                                    <span> Business</span>
                                </div>
                            </a> --}}
                    </div>
            </section>
            <!-- /page header -->

            <!-- Sales Chain Page -->
            <div class="content pt-2">
                <div class="container-fluid ">
                    <div class="col-lg-12">
                        <h4 class="mb-3 text-center page_titles w-25">Welcome to HRM [Admin]
                        </h4>
                    </div>
                    <!-- Row End -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-body p-4 pt-3">
                                <div class="d-flex align-items-center">
                                    <i class="ph-users-three ph-2x text-success me-3"></i>

                                    <a href="{{ route('employee.index') }}">
                                        <div class="flex-fill text-end">
                                            <h1 class="mb-0 main_color">{{ App\Models\User::count() }}</h1>
                                            <span class="fw-bold">Total Employees</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 border-0 shadow-lg p-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="p-0 m-0 fw-bold main_color">MY EVENTS</p>
                                        <p class="p-0 m-0">
                                            <a href="" class="btn btn-info text-white">Add Clocking</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-lg-12 pt-2">
                                        <table class="table datatable-scroll-y data_event mt-2 mb-4 border pt-2"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Event</th>
                                                    <th>Time</th>
                                                    <th>Clocking Point</th>
                                                    <th>Comment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Marth</td>
                                                    <td><a href="#">Enright</a></td>
                                                    <td><a href="#">Enright</a></td>
                                                    <td><a href="#">Enright</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Marth</td>
                                                    <td><a href="#">Enright</a></td>
                                                    <td><a href="#">Enright</a></td>
                                                    <td><a href="#">Enright</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="card rounded-0">
                                <div class="card-header rounded-0 border-0 shadow-lg p-2">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <p class="p-0 m-0 fw-bold main_color">All Events of this Month</p>

                                    </div>
                                </div>
                                <div class="card-body">
                                    @include('admin.pages.HrandAdmin.partials.event_table')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sales Chain Page -->



        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // public/js/events.js
        $(document).ready(function() {
            $('#category_filter').change(function() {
                var categoryId = $(this).val();
                $.ajax({
                    url: '/filter-events',
                    type: 'GET',
                    data: {
                        category_id: categoryId
                    },
                    success: function(data) {
                        $('#events-table').html(data);
                    }
                });
            });
        });
    </script>
@endpush
