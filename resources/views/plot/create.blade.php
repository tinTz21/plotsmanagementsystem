@extends('layouts.app', ['activePage' => 'Register Land', 'titlePage' => __('Plot')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <a href="{{route('plot')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Register New Plot</h4>
      </div>
      <div class="card-body">
        {!! Form::open(array('url' => 'create-plot','method'=>'POST')) !!}
        <div class="row">

          

          <div class="col-md-4">
            <label> Plot Number</label>
            <div class="col-xs-4">
              <input type="text" name="plot_number" class="form-control" placeholder="type...">
            </div>
          </div>

          <div class="col-md-4">
            <label> Plot Size(SQM)</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="plot_size" placeholder="type...">
            </div>
          </div>

          <div class="col-md-4">
            <label> Block Number</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="block_number" placeholder="type...">
            </div>
          </div>&nbsp;

          <div class="col-md-12">
            <label>Plot Description</label>
            <div class="col-xs-6">
              <textarea name="description" class="form-control" placeholder="type..." rows="4"></textarea>
            </div>&nbsp;
          </div>

            <div class="col-md-3">
              <label>Country</label>
             <div class="col-xs-12">
               <select class="mdb-select md-form" name="country" searchable="Search here..">
                  <option value="Tanzania">Tanzania</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Uganda">Uganda</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Sudan">Sudan</option>
                </select>
             </div>
            </div>
            <div class="col-md-3">
              <label>Region</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" placeholder="type..." name="region">
              </div>
            </div>
            <div class="col-md-3">
              <label>District</label>
              <div class="col-xs-12">
                <input type="text" name="district" class="form-control">
              </div>
            </div>

            <div class="col-md-3">
              <label>Street</label>
              <div class="col-xs-12">
                <input type="text" name="street" class="form-control">
              </div>
              &nbsp;
            </div>

             <div class="col-md-4">
            <label> TanRoad Distance</label>
            <div class="col-xs-4">
              <input type="text" class="form-control" name="tanroad_distance" placeholder="e.g. 10 km's or 690 meters">
            </div>
          </div>

          <div class="col-md-4">
            <label>TP  Drawing</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="tt_drawing" placeholder="type...">
            </div>
          </div>

          <div class="col-md-4">
            <label>Survey Number</label>
            <div class="col-xs-6">
              <input type="text" class="form-control" name="survey_number" placeholder="type...">
            </div>
          </div>&nbsp;

          <div class="col-md-12">
            <h5>Distance In Compass</h5>
          </div>
          <div class="col-md-3">
              <label>North</label>
             <div class="col-xs-12">
                <input type="text" class="form-control" name="north_width">
              </div>
            </div>
            <div class="col-md-3">
              <label>West</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" name="west_width">
              </div>
            </div>
            <div class="col-md-3">
              <label>South</label>
              <div class="col-xs-12">
                <input type="text" name="south_width" class="form-control">
              </div>
            </div>

            <div class="col-md-3">
              <label>East</label>
              <div class="col-xs-12">
                <input type="text" name="east_width" class="form-control">
              </div>
              &nbsp;
            </div>

            <div class="col-md-4">
              <label>Survey Attachment</label>
              <input type="file" name="attachment">
            </div>
            <div class="col-md-4">
              <label>Add Geo-Cordinate</label>
              <div class="col-xs-12">
                <input type="text" class="form-control" placeholder="type..." name="positions">
              </div>
            </div>
            <div class="col-md-4">
              <label>Map</label>
              <div class="col-xs-12">
                <input type="map" name="map" class="form-control">
              </div>
            </div>&nbsp;&nbsp;
           <div class="col-md-12">
             <div class="row">

                <div class="col-md-6">
              <label>Plot Status</label>
              <input type="text" name="status" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Plot's Photo</label>
              <input type="file" name="" class="form-control">
            </div>
             </div>

           </div>

            <div class="col-md-12">&nbsp;
             <div class="row">

                <div class="col-md-6">
              <label>Historical Document</label>
              <input type="file" name="status" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Purchase Agreement</label>
              <input type="file" name="" class="form-control">
            </div>
             </div>
&nbsp;
           </div>
           
           <div class="col-md-6">
              <label>Due Diligence Info</label>
              <input type="file" name="" class="form-control">
            </div>
             </div>

            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <button class="btn btn-primary">Back</button>
                </div>
                <div class="col-md-6 text-right">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection