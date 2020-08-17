@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
              <div class="col-md-6">
                
              </div>
              <div class="col-md-6 text-right">
                <a class="btn btn-primary" href="{{route('create-customer')}}">Add New Customer</a>
              </div>
            </div>


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">My Customer List</h4>
                </div>
               
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          City
                        </th>
                        <th>
                         Email
                        </th>
                        <th>
                          Created At
                        </th>
                      </thead>
                      @foreach($customer as $customer)
                        @if($customer->customer)
                            <tbody>
                              <tr>
                                <td>
                                  {{$customer->name}}
                                </td>
                                <td>
                                  {{$customer->country}}
                                </td>
                                <td>
                                  {{$customer->region}}
                                </td>
                                <td>
                                  {{$customer->email}}
                                </td>
                                <td>
                                  {{$customer->created_at}}
                                </td>
                              </tr>
                            </tbody>
                            @endif
                    @endforeach
                          </table>
                        </div>
                      </div>
                      
        </div>
      </div>
    </div>
  </div>
</div>
@endsection