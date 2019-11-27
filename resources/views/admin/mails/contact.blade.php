@extends('admin.layouts.app', ['menu' => 'Mails', 'sub_menu' => 'inbox'])

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
                        <table id="contact-message" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <a class="btn btn-primary text-white mr-1 mb-2" href="{{ url('/admin/mails/contact') }}">Contact Messages</a>
                                    <a class="btn btn-outline-primary mb-2" href="{{ url('/admin/mails/ticket') }}">Tickets</a>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                <tr>
                                    <div class="card m-b-0">
                                        <div class="card-header" id="headingOne">
                                            <a class="row collapsed" data-toggle="collapse" data-target="#contact-{{$message->id}}" aria-expanded="false" aria-controls="contact-{{$message->id}}">
                                                <span class="col-3 pl-5">{{$message->name}}</span>
                                                <span class="col-7">{{$message->subject}} - {{$message->content}}</span>
                                                <span class="col-2">{{$message->created_at}}</span>
                                            </a>
                                        </div>
                                        <div id="contact-{{$message->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="mb-2">
                                                    <small>from</small>    
                                                    <span class="badge badge-pill badge-warning"> {{$message->email}}</span>
                                                </div>
                                                <h5>{{$message->subject}}</h5>
                                                <p>{{$message->content}}</p>
                                                <button type="button" class="btn btn-sm btn-outline-primary btn-modal" data-value="{{ $message->id }}" data-email="{{$message->email}}" data-toggle="modal" data-target="#messageModal">Reply</button>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
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
<div id="messageModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Reply as email</h4>  
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row mb-3 align-items-center">
            <div class="col-md-12">
                <div class="form-group">
                    <!-- <label>To Email</label> -->
                    <input type="hidden" class="form-control" id="message_id" name="id" value="" placeholder="">
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="Email..." readonly>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <!-- <label>Subject</label> -->
                    <input type="text" class="form-control" id="subject" name="subject" value="" placeholder="Subject...">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <!-- <label>Message</label> -->
                    <textarea class="form-control" id="message" name="message" value="" rows="5" placeholder="Message..."></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-send">Send</button>
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
    *       Basic Table                     *
    ****************************************/
    // $('#contact-message').DataTable({
    //     "order": [],
    // });

    /****************************************
    *       Reply Message                   *
    ****************************************/

    $(document).on('click', '.btn-modal', function() {
        $('#message_id').val($(this).data('value'));
        $('#email').val($(this).data('email'));
    });

    $(document).on('click', '.btn-send', function() {
        var message_id = $('#message_id').val();
        var to_email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        $.ajax({
            url: '/admin/mails/reply/',
            type: 'POST',
            data: {
                'message_id': message_id,
                'to_email': to_email,
                'subject': subject,
                'message': message
            },
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