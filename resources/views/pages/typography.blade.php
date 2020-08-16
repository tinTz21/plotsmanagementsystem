@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Material Dashboard Heading</h4>
        <p class="card-category">Created using Roboto Font Family</p>
      </div>


      <div class="row">
      <div class="col-md-12">
        <div class="card">
          
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Our Customer Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
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
                  @foreach($payments as $payments)
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
                    </table>
                  </div>
                </div>
            @endif
          @endforeach
          
        </div>
      </div>
    </div>



    </div>
  </div>
</div>
@endsection