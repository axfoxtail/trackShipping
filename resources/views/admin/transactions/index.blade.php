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
                    <h5 class="card">Transactions Management</h5>
                    <div class="table-responsive">
                        <table id="transactions-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>extra</th>
                                    <th>price</th>
                                    <th>status</th>
                                    <th>tracking number</th>
                                    <th>from</th>
                                    <th>to</th>
                                    <!-- <th>gender</th> -->
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <!-- <th>package</th> -->
                                    <th>date</th>
                                    <!-- <th>height</th>
                                    <th>width</th>
                                    <th>weight</th> -->
                                    <th>product</th>
                                    <th>created at</th>
                                    <th>sender</th>
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
                                    <!-- <td>{{ $transaction->gender }}</td> -->
                                    <td>{{ $transaction->fname }}</td>
                                    <td>{{ $transaction->lname }}</td>
                                    <td>{{ $transaction->email }}</td>
                                    <td>{{ $transaction->phone }}</td>
                                    <!-- <td>{{ $transaction->package }}</td> -->
                                    <td>{{ $transaction->date }}</td>
                                    <!-- <td>{{ $transaction->height }}</td>
                                    <td>{{ $transaction->width }}</td>
                                    <td>{{ $transaction->weight }}</td> -->
                                    <td>
                                        @if($transaction->mapurl)
                                        <img src="{{ $transaction->mapurl }}" style="width: 100px;" />
                                        @endif
                                    </td>
                                    <td>{{ $transaction->created_at }}</td>
                                    <td>
                                        @if($transaction->senders)
                                        <button type="button" class="btn btn-link btn-sender-modal" data-value="{{ $transaction->senders->id }}" data-toggle="modal" data-target="#senderModal">
                                            {{ $transaction->senders && $transaction->senders->fname ? $transaction->senders->fname : '' }}
                                            {{ $transaction->senders && $transaction->senders->lname ? $transaction->senders->lname : '' }}
                                        </button>
                                        @endif
                                    </td>
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
                                    <!-- <th>gender</th> -->
                                    <th>first name</th>
                                    <th>last name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>package</th>
                                    <th>date</th>
                                    <th>height</th>
                                    <th>width</th>
                                    <th>weight</th>
                                    <th>product</th>
                                    <th>created at</th>
                                    <th>sender</th>
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

<!-- Sender Modal -->

<div id="senderModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Sender Detail Info</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">First Name : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-fname"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Last Name : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-lname"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Gender : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-gender"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Email : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-email"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Phone : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-phone"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Address : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-address"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">City : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-city"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Country : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-country"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Zip Code : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-postcode"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Visual vehicle inspection : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-visualcheck"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">All documents of the car : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-doccheck"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">General car inspection : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-generalcheck"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Class : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-class"> </label>
        </div>
        <div class="form-group row">
            <label for="fname" class="col-sm-5 text-right control-label col-form-label">Prepared for loading : </label>
            <label class="col-sm-7 text-left control-label col-form-label" id="m-paymentstatus"> </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="approveModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
    <form id="approve-form" method="post" enctype="multipart/form-data">
      <div class="modal-header">
          <h4 class="modal-title">Will You Approve This Transaction?</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3 align-items-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Shipping Price</label>
                    <div class="input-group">
                        <input type="hidden" id="transaction_id" name="transaction_id" class="form-control" value="">
                        <input type="number" id="transaction_price" name="price" class="form-control" placeholder="5.000" aria-label="Recipient 's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">$</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Shipping Image</label>
                    <input type="file" class="form-control" name="mapurl" id="mapurl" value="" placeholder="Shipping Image...">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="fname" id="fname" value="" placeholder="First Name...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lname" id="lname" value="" placeholder="Last Name...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" name="gender" value="" placeholder="Gender...">
                        <option value="mr">Mr.</option>
                        <option value="ms">Ns.</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="" placeholder="Email...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="phone" class="form-control" name="phone" value="" placeholder="Phone...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Zip code</label>
                    <input type="text" class="form-control" name="zip" value="" placeholder="Zip code...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="" placeholder="Address...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" value="" placeholder="City...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" value="" placeholder="Country...">
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Visual vehicle inspection</label>
                    <input type="text" class="form-control" name="visualcheck" value="" placeholder="Visual vehicle inspection...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>All documents of the car</label>
                    <input type="text" class="form-control" name="doccheck" value="" placeholder="All documents of the car...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>General car inspection</label>
                    <input type="text" class="form-control" name="generalcheck" value="" placeholder="General car inspection...">
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Class</label>
                    <input type="text" class="form-control" name="class" value="" placeholder="Class...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Prepared for loading</label>
                    <input type="text" class="form-control" name="paymentstatus" value="" placeholder="Prepared for loading...">
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-approve">Approve</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      <form>
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
        event.preventDefault();
        var formData = new FormData($('#approve-form')[0]);

        $.ajax({
            url: '/admin/transactions/approve/' + $('#transaction_id').val(),
            type: 'POST',
            data: formData,
            datatype: 'JSON',
            processData: false,
            contentType: false,
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

    /****************************************
    *       Sender Detail Ajax              *
    ****************************************/
    $(document).on('click', '.btn-sender-modal', function() {
        $.ajax({
            url: '/admin/transactions/sender/' + $(this).data('value'),
            type: 'POST',
            // data: formData,
            datatype: 'JSON',
            success: function (response) {
                if (response.status) {
                    var sender = response.data;
                    console.log(sender);
                    $('#m-fname').text(sender.fname);
                    $('#m-lname').text(sender.lname);
                    $('#m-gender').text(sender.gender);
                    $('#m-email').text(sender.email);
                    $('#m-phone').text(sender.phone);
                    $('#m-address').text(sender.address);
                    $('#m-city').text(sender.city);
                    $('#m-postcode').text(sender.postcode);
                    $('#m-country').text(sender.country);
                    $('#m-visualcheck').text(sender.visualcheck);
                    $('#m-doccheck').text(sender.doccheck);
                    $('#m-generalcheck').text(sender.generalcheck);
                    $('#m-class').text(sender.class);
                    $('#m-paymentstatus').text(sender.paymentstatus);
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