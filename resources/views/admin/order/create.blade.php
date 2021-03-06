@extends('admin_layout.layout')



@push('styles') 

<style>
.text-large
{
  font-size: 2em;
  text-align:center !important;
}

ul , li
{
  
  color:green;
}



</style>

@endpush 
       
@push('scripts') 
 
<script src="{{asset('jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

@endpush


@section('content')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <strong class="text-success text-large">
   Create Order
     
    </strong>

  </section>

  <!-- Main content -->
  <section class="content ">

        <div class="container">
                <div class="row">
        
        
                    <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New order</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/order') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.order.form', ['formMode' => 'create'])

                          </form>

                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    
        </section>
    
        </div>
    @endsection
    