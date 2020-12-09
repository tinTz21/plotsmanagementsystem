@extends('layouts.app', ['activePage' => 'Customers', 'titlePage' => __('Table List')])

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
                        <th>View</th>
                      </thead>
                      @foreach($customer as $customers)
                        @if($customers->customer)
                            <tbody>
                              <tr>
                                <td>
                                  {{$customers->name}}
                                </td>
                                <td>
                                  {{$customers->country}}
                                </td>
                                <td>
                                  {{$customers->region}}
                                </td>
                                <td>
                                  {{$customers->email}}
                                </td>
                                <td>
                                  {{date('d-m-Y', strtotime($customers->created_at))}} 
                                </td>
                                <td>
                                  <a href="{{url('customer/show',$customers->id)}}"><i class="fa fa-eye fa-1x"></i></a>
                                </td>
                              </tr>
                            </tbody>
                            @endif
                    @endforeach
                          </table>
                        </div>

                      </div>

                      {{$customer->OnEachSide(3)->links()}}
                      
        </div>
      </div>
    </div>
  </div>
</div>
@endsection