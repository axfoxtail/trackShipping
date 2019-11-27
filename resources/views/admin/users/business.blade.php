@extends('admin.layouts.app', ['menu' => 'Users', 'sub_menu' => 'business accounts'])

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
                    <h5 class="card-title">Business Accounts</h5>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>first name</th>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>fax</th>
                                    <th>url</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>country</th>
                                    <th>post code</th>
                                    <th>business type</th>
                                    <th>business nature</th>
                                    <th>business first name</th>
                                    <th>business last name</th>
                                    <th>title</th>
                                    <th>created at</th>
                                    <th>last udpate</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->fax }}</td>
                                    <td>{{ $user->url }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>{{ $user->city }}</td>
                                    <td>{{ $user->country }}</td>
                                    <td>{{ $user->postcode }}</td>
                                    <td>{{ $user->btype }}</td>
                                    <td>{{ $user->bnature }}</td>
                                    <td>{{ $user->bfname }}</td>
                                    <td>{{ $user->blname }}</td>
                                    <td>{{ $user->title }}</td>
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
                                    <th>username</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>fax</th>
                                    <th>url</th>
                                    <th>address</th>
                                    <th>city</th>
                                    <th>country</th>
                                    <th>post code</th>
                                    <th>business type</th>
                                    <th>business nature</th>
                                    <th>business first name</th>
                                    <th>business last name</th>
                                    <th>title</th>
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
<!-- Modal -->
<input type="hidden" id="user_id" class="form-control" value="">
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Do you really delete this user?</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <h5>After delete user, You can not recoever user data.</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-delete">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
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
    /****************************************
    *       Delete Ajax                     *
    ****************************************/
    $(document).on('click', '.btn-modal', function() {
        $('#user_id').val($(this).data('value'));
    });

    $(document).on('click', '.btn-delete', function() {
        $.ajax({
            url: '/admin/users/delete/' + $('#user_id').val(),
            type: 'DELETE',
            data: {'price': ''},
            datatype: 'JSON',
            success: function (response) {
                console.log(response);
                if (response.status) {
                    window.location.reload();
                } else {
                    alert(response.message);
                }
            },
            error: function (errors) {
                console.log('err: ', errors);
            }
        });
    });
    
</script>
@endsection