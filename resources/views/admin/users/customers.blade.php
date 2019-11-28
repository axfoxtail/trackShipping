@extends('admin.layouts.app', ['menu' => 'Users', 'sub_menu' => 'customer accounts'])

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
                    <h5 class="card-title">Customer Accounts</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>fax</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>country</th>
                                    <th>post code</th>
                                    <th>partner email</th>
                                    <th>created at</th>
                                    <th>last udpate</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->lname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->fax }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->postcode }}</td>
                                    <td>{{ $user->partner_email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a class="btn btn-success btn-modal" href="{{ url('admin/users/edit') }}/{{ $user->id }}">
                                            <i class="mdi mdi-lead-pencil"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-modal" data-value="{{ $user->id }}" data-toggle="modal" data-target="#deleteModal">
                                            <i class="mdi mdi-delete-forever"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>fax</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>country</th>
                                    <th>post code</th>
                                    <th>partner email</th>
                                    <th>created at</th>
                                    <th>last udpate</th>
                                    <th></th>
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
        *       Basic Table                   *
        ****************************************/
    $('#zero_config').DataTable();
</script>
@endsection