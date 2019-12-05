@extends('admin.layouts.app', ['menu' => 'Conatact Info', 'sub_menu' => ''])

@section('adminCss')
<link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/assets/extra-libs/multicheck/multicheck.css') }}">
<link href="{{ asset('admin-assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endsection

@section('adminContent')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card">Contact Info Management</h5>
                    <div class="table-responsive">
                        <table id="siteinfo-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>URL</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                    <th>Week Start</th>
                                    <th>Week End</th>
                                    <th>Hour Start</th>
                                    <th>Hour End</th>
                                    <th>Rest Day</th>
                                    <th>Rest Day 2</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $siteinfo->id }}</td>
                                    <td>{{ $siteinfo->fname }}</td>
                                    <td>{{ $siteinfo->lname }}</td>
                                    <td>{{ $siteinfo->email }}</td>
                                    <td>{{ $siteinfo->phone }}</td>
                                    <td>{{ $siteinfo->url }}</td>
                                    <td>{{ $siteinfo->companyname }}</td>
                                    <td>{{ $siteinfo->address }}</td>
                                    <td>{{ $siteinfo->city }}</td>
                                    <td>{{ $siteinfo->postcode }}</td>
                                    <td>{{ $siteinfo->country }}</td>
                                    <td>{{ $siteinfo->weekstart }}</td>
                                    <td>{{ $siteinfo->weekend }}</td>
                                    <td>{{ $siteinfo->hourstart }}</td>
                                    <td>{{ $siteinfo->hourend }}</td>
                                    <td>{{ $siteinfo->restday1 }}</td>
                                    <td>{{ $siteinfo->restday2 }}</td>
                                    <td>{{ $siteinfo->created_at }}</td>
                                    <td>{{ $siteinfo->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-success btn-modal" href="{{ url('admin/contact/edit') }}">
                                            <i class="mdi mdi-lead-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>URL</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Zip Code</th>
                                    <th>Country</th>
                                    <th>Week Start</th>
                                    <th>Week End</th>
                                    <th>Hour Start</th>
                                    <th>Hour End</th>
                                    <th>Rest Day</th>
                                    <th>Rest Day 2</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>

@endsection

@section('adminJs')
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('admin-assets/assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('admin-assets/assets/extra-libs/DataTables/datatables.min.js') }}"></script>
<script>
    /****************************************
    *       Transactions Table              *
    ****************************************/
    $('#siteinfo-table').DataTable();

    
</script>
@endsection