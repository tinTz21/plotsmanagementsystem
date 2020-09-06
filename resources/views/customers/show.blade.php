@extends('layouts.app', ['activePage' => 'Customer Details', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ $customer->name}}, &nbsp;{{$customer->sex}}, <b>Age:</b> &nbsp;{{\Carbon\Carbon::parse($customer->yob)->diff(\Carbon\Carbon::now())->format('%y years')}};</h4>
                </div> 
               
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Customer Email</label>
                        <div class="col-xs-4">
                          {{$customer->email}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Customer Phone</label>
                        <div class="col-xs-4">
                          {{$customer->phone}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Address</label>
                        <div class="col-xs-4">
                          {{$customer->country}}, {{$customer->region}},{{$customer->street}}
                        </div>
                      </div>
                    </div>&nbsp;<hr>



                     <div class="row">
                      <div class="col-md-4">
                        <label>ID Details</label>
                        <div class="col-xs-4">
                          {{$customer->identification}}, {{$customer->identification_number}}
                        </div>
                      </div>
                    </div>      
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <a href="{{route('customer.index')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            @include('customers.model.update')
          </div>
          <div class="col-md-6">
            @include('customers.delete')
          </div>
        </div>
     
    </div>
  </div>
</div>
@endsection