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
                      <th>Customer</th>
                      <th>نام</th>
                      <th>حقوق</th>
                      <th>استان</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>احمد حسینی</td>
                        <td>$36,738</td>
                        <td>مازندران</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>مینا رضایی</td>
                        <td>$23,789</td>
                        <td>گلستان</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>مبینا احمدپور</td>
                        <td>$56,142</td>
                        <td>تهران</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>جلال آقایی</td>
                        <td>$38,735</td>
                        <td>شهرکرد</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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
@endpush