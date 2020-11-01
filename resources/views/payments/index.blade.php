@extends('layouts.app', ['activePage' => 'Payments Info', 'titlePage' => __('Typography')])
    @section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Payments Records</h4>
                </div>
                
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                          <th>
                            Customer Name
                          </th>
                          <th>
                            Plot Address
                          </th>
                          <th>
                            Agreed Price
                          </th>
                          <th>View</th>
                      </thead>
                        @foreach($payments as $payments)

                            <tbody>
                              <tr>
                                <td>
                                  {{$payments->user->name}}
                                </td>
                                <td>
                                  {{$payments->region}}, {{$payments->district}}, {{$payments->street}}
                                </td>
                                <td>
                                  {{$payments->agreed}}
                                </td>
                                <td>
                                  <a href="{{url('payments/show',$payments->id)}}"><i class="fa fa-eye"></i></a>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                  </div>
                </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>
@endsection