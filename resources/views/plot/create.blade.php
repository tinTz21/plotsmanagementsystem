@extends('layouts.app', ['activePage' => 'Register Land', 'titlePage' => __('Plot')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Register New Plot</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <label> Plot Number</label>
            <div class="col-xs-4">
              <input type="number" class="form-control" name="" placeholder="type...">
            </div>
          </div>

          <div class="col-md-4">
            <label> Plot Size</label>
            <div class="col-xs-6">
              <input type="number" class="form-control" name="" placeholder="type...(in sqm)">
            </div>
          </div>

          <div class="col-md-4">
            <label> Block Number</label>
            <div class="col-xs-6">
              <input type="number" class="form-control" name="" placeholder="type...">
            </div>
          </div>&nbsp;

          <div class="col-md-12">
            <label>Plot Description</label>
            <div class="col-xs-6">
              <textarea class="form-control" placeholder="type..." rows="4"></textarea>
            </div>
          </div>&nbsp;

          <div class="col-md-3">
              <label>Country</label>
             <div class="col-xs-12">
               <select class="mdb-select md-form" searchable="Search here..">
                  <option value="" disabled selected>Choose your country</option>
                  <option value="1">Tanzania</option>
                  <option value="2">Kenya</option>
                  <option value="3">Uganda</option>
                  <option value="3">Rwanda</option>
                  <option value="3">Burundi</option>
                  <option value="3">Sudan</option>
                </select>
             </div>
            </div>
            <div class="col-md-3">
              <label>Region</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" placeholder="type..." name="">
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection