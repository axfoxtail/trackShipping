@extends('admin.layouts.app', ['menu' => 'Transactions', 'sub_menu' => ''])

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
                <h5 classTransactions"carde">Transactions Management</h5>
                <div class="table-responsive">
                        <table id="transaction
                        s-table" class="table table-striped table-bordered">
                            <thead> <div class="card-body">
                <h5 class="card-Approve Ajax le">Transactions Management</h5>
                <div class="table-responsive">

                                <tr>
                                    <th>id</th>
                                    <th>extra</th>
                                    <th>price</th>
                                    <th>status</th>
                                    <th>tracking number</th>
                                    <th>from</th>
                                    <th>to</th>
                                    <th>gender</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>package</th>
                                    <th>date</th>
                                    <th>height</th>
                                    <th>width</th>
                                    <th>weight</th>
                                    <th>created at</th>
                                    <th>updated at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->extra }}</td>
                                    <td>{{ $transaction->price }}</td>
                                    <td>
                                        @if($transaction->status == 'approved')
                                            <span class="badge badge-success">{{ $transaction->status }}</span>
                                        @else
                                            <button type="button" class="btn btn-primary btn-sm btn-modal" data-value="{{ $transaction->id }}" data-toggle="modal" data-target="#approveModal">Approve Now</button>
                                        @endif
                                    </td>
                                    <td>{{ $transaction->trackingnumber }}</td>
                                    <td>{{ $transaction->from }}</td>
                                    <td>{{ $transaction->to }}</td>
                                    <td>{{ $transaction->gender }}</td>
                                    <td>{{ $transaction->fname }}</td>
                                    <td>{{ $transaction->lname }}</td>
                                    <td>{{ $transaction->email }}</td>
                                    <td>{{ $transaction->phone }}</td>
                                    <td>{{ $transaction->package }}</td>
                                    <td>{{ $transaction->date }}</td>
                                    <td>{{ $transaction->height }}</td>
                                    <td>{{ $transaction->width }}</td>
                                    <td>{{ $transaction->weight }}</td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td>{{ $transaction->updated_at }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>id</th>
                                    <th>extra</th>
                                    <th>price</th>
                                    <th>status</th>
                                    <th>tracking number</th>
                                    <th>from</th>
                                    <th>to</th>
                                    <th>gender</th>
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>package</th>
                                    <th>date</th>
                                    <th>height</th>
                                    <th>width</th>
                                    <th>weight</th>
                                    <th>created at</th>
                                    <th>updated at</th>
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
<div id="approveModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Will You Approve This Transaction?</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3 align-items-center">
            <div class="col-lg-4 col-md-12 text-right">
                <span>Shipping Price</span>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="input-group">
                    <input type="hidden" id="transaction_id" class="form-control" value="">
                    <input type="number" id="transaction_price" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">$</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-approve">Approve</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    *       Transactions Table              *
    ****************************************/
    $('#transactions-table').DataTable();

    /****************************************
    *       Approve Ajax                    *
    ****************************************/
    $(document).on('click', '.btn-modal', function() {
        $('#transaction_id').val($(this).data('value'));
    });

    $(document).on('click', '.btn-approve', function() {
        $.ajax({
            url: '/admin/transactions/approve/' + $('#transaction_id').val(),
            type: 'POST',
            data: {'price': $('#transaction_price').val()},
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