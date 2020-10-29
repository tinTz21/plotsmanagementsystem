@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-primary card-header-icon">
              <div class="card-icon">
                <i class="material-icons">content_copy</i>
              </div>
              <p class="card-category">Total Customers</p>
              <h3 class="card-title">49/50
                <small>GB</small>
              </h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Revenue</p>
              <h3 class="card-title">$34,245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">info_outline</i>
              </div>
              <p class="card-category">Total Plots</p>
              <h3 class="card-title">75</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-twitter"></i>
              </div>
              <p class="card-category">Followers</p>
              <h3 class="card-title">+245</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          


                        <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Quick Summary</h4>
                  <p class="card-category">Payments</p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>Property Name</th>
                      <th>Customer Na</th>
                      <th>Agreed Price</th>
                      <th>Amount Paid</th>
                      <th>Amount Due</th>
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
                        
                        <td>{{App\Installment::sum('next_amount')}}</td>
                        <td></td>
                        <td>{{$dashboards->next_date}}</td>
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
                </div>
               {{ $dashboard->onEachSide(5)->links() }}
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
