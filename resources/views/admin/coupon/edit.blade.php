@extends('admin_layout.layout')

@push('styles') 

  
@endpush 
       
@push('scripts')  

<script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
 <script>
    $(document).ready(function(){
      $('#coupon_form').parsley();
      setTimeout(function() {
          $('#message').fadeOut('fast');
      }, 4000);
  });
 </script>

@endpush

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 class="text-center alert alert-default">
  Edit Coupon
    </h1>
  
  </section>

  <!-- Main content -->
  <section class="content ">

        <div class="container">
                <div class="row">
          
        
         

            <div class="col-md-9">
                <div class="card">
             
                    <div class="card-body">
                        <a href="{{ url('/admin/coupon') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" id="coupon_form" action="{{ url('/admin/coupon/' . $coupon->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.coupon.form', ['formMode' => 'edit'])
 
      
                          </form>
                    
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    
    
    @endsection
    