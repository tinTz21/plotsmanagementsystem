@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="fa fa-users"></i>
              </div>
              <p class="card-category">Total Customers</p>
              <h3 class="card-title">{{\App\User::all()->where('customer')->count()}}
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="fa fa-money"></i>
              </div>
              <div>
                <p class="card-category">Total Revenue</p>
              <h3 class="card-title">{{number_format(App\Installment::sum('next_amount'))}}/=</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="fa fa-info"></i>
              </div>
              <p class="card-category">Total Plots</p>
              <h3 class="card-title">{{\App\Plot::all()->count()}}</h3>
            </div>

          </div>
        </div>
<!--         <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-md-12">
          

{{--
                        <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Quick Payments Summary</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>Property Name</th>
                      <th>Customer Na</th>
                      <th>Agreed Price</th>
                      <th>Amount summary</th>
                      
                      <th>Next Payment</th>
                    </thead>
                    <tbody>
                      @foreach($dashboard as $dashboards)
                      <tr>
                        <td>
                          <a href="{{route('plot.show',$dashboards->plot->id)}}">
                            {{$dashboards->plot->region}}, Plot# {{$dashboards->plot->plot_number}}. Block #{{$dashboards->plot->block_number}}
                          </a>
                        </td>
                        <td> <a href="{{route('customer.show',$dashboards->payment->user->id)}}">{{$dashboards->payment->user->name}}</a> </td>
                        <td>{{$dashboards->payment->agreed}} Tsh</td>
                        
                        <td class="text-center"><a href="{{route('payments.show',$dashboards->payment->id)}}">click here <i class="fa fa-hand-o-right" aria-hidden="true"></i>
 <i class="fa fa-eye"></i></a></td>
                        <td>{{$dashboards->next_date}}</td>
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
                </div>
               {{ $dashboard->onEachSide(5)->links() }}
              </div>
        </div>
      </div>--}}




 <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Quick Payments Summary</h4>
                </div>
                <div class="card-body table-responsive">
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Property Name
                        </th>
                          <th>
                            Customer Name
                          </th>
                          <th>
                            Agreed Price
                            
                          </th>

                          <th>
                            Amount Paid
                          </th>
                        
                          <th>
                            Due Amount
                          </th>
                          <th>View</th>
                      </thead>
                        @foreach($payments as $payment)

                            <tbody>
                              <tr>
                                <td>
                                  
                                  {{$payment->district}} - {{$payment->street}}, Plot# {{$payment->plot}} 
                               
                                </td>
                                <td>
                                 
                                  {{$payment->user->name}}
                                
                                </td>
                                <td>
                                  
                                  {{number_format($payment->agreed)}}
                                  
                                </td>
                                <td>
                                  {{number_format(App\Installment::where('payment_id',$payment->id)->sum('next_amount'))}}
                                </td>
                                <td>
                                  {{ number_format(((int)$payment['agreed'] - App\Installment::where('payment_id',$payment->id)->sum('next_amount')))}}
                                </td>
                                <td>
                                  <a href="{{url('payments/show',$payment->id)}}"><i class="fa fa-eye"></i></a>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                            <tbody>
                              <tr>
                                <td></td>
                                <td><b>TOTAL</b></td>
                                <td> <b>{{number_format(App\Payment::sum('agreed'))}}/=</b></td>
                                <td><b>{{number_format(App\Installment::all()->sum('next_amount'))}}/=</b></td>
                                <td><b>{{number_format(App\Payment::sum('agreed') - App\Installment::all()->sum('next_amount'))}}/=</b></td>
                              </tr>
                            </tbody>
                          </table>

                  </div>
                </div>
                </div>
               {{ $payments->onEachSide(5)->links() }}
              </div>

        </div>
      </div>


















    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
