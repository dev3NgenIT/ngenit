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
                        <span class="breadcrumb-item active">Revised Deal Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addrevisedDeal">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Revised Deal</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table whatWeDoDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="10%">Id</th>
                            <th width="30%">Rfq Code</th>
                            <th width="50%">Message</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($revisedDeals)
                            @foreach ($revisedDeals as $key => $revisedDeal)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ App\Models\Admin\Rfq::where('id', $revisedDeal->rfq_id)->value('name') }}</td>
                                    <td>{{ $revisedDeal->rfq_code }}</td>
                                    <td>{{ $revisedDeal->message }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#editSuccess">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('revised-deal.destroy', [$revisedDeal->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>
                                        {{-- Edit Success Modal --}}
                                        <div id="editSuccess" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit Success Form</h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('revised-deal.update', $revisedDeal->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Rfq Name</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="rfq_id"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose rfq">
                                                                            <option></option>
                                                                            @foreach ($rfqs as $rfq)
                                                                                <option @selected($rfq->id == $revisedDeal->rfq_id)
                                                                                    value="{{ $rfq->id }}">
                                                                                    {{ $rfq->name }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Rfq Type</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="rfq_type" class="form-control select"
                                                                            data-placeholder="Chose rfq type">
                                                                            <option></option>
                                                                            <option @selected($revisedDeal->rfq_type == 'rfq')
                                                                                value="rfq">Rfq</option>
                                                                            <option @selected($revisedDeal->rfq_type == 'deal')
                                                                                value="deal">Deal</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Rfq Code</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text"
                                                                            value="{{ $revisedDeal->rfq_code }}"
                                                                            name="rfq_code"
                                                                            class="form-control form-control-sm"
                                                                            maxlength="30" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4">
                                                                        <span>Message</span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <textarea name="description" id="" class="form-control" cols="30" rows="3">{{ $revisedDeal->message }}</textarea>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addrevisedDeal" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Revised Deal</h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="{{ route('revised-deal.store') }}">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Rfq Name </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="rfq_id" class="form-control form-control-sm select"
                                            data-placeholder="Chose rfq">
                                            <option></option>
                                            @foreach ($rfqs as $rfq)
                                                <option value="{{ $rfq->id }}">{{ $rfq->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Rfq Type </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="rfq_type" class="form-control select"
                                            data-placeholder="Chose rfq type">
                                            <option></option>
                                            <option value="rfq">Rfq</option>
                                            <option value="deal">Deal</option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Rfq Code </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="rfq_code" class="form-control form-control-sm"
                                            maxlength="30" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4">
                                        <span>Messag </span>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea name="description" id="" class="form-control" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.whatWeDoDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
