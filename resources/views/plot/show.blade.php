@extends('layouts.app', ['activePage' => 'Plot Details', 'titlePage' => __('Plot')])

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-primary" href="{{route('plot')}}">Back</a>
		</div>
		<div class="col-md-2">
			
		</div>
		<div class="col-md-4">
			{{--@include('payments.payment')--}}
			<a href="{{route('payments.create',$plot->id)}}" class="btn btn-success">SELL THIS PLOT</a>
			@include('payments.delete')
		</div>
	</div>
	<div class="card">
		<div class="card-header card-header-primary">
			<div class="row text-center">
				<div class="col-md-4">
					Plot Number: {{$plot->plot_number}}
				</div>
				<div class="col-md-4">
					Plot Size: {{$plot->plot_size}}sqm
				</div>
				<div class="col-md-4">
					Block Number {{$plot->block_number}}
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<h4>Plot Addreess</h4>
					<div class="row">
						<div class="col-md-3">
							<b>Country:{{$plot->country}} </b>
						</div>
						<div class="col-md-3">
							<b>Region: </b>{{$plot->region}}
						</div>
						<div class="col-md-3">
							<b>District: </b> {{$plot->district}}
						</div>
						<div class="col-md-3">
							<b>Street:</b> {{$plot->street}}
						</div>
					</div>
				</div>
				&nbsp;
				<div class="col-md-12">
					<h4 >Plot Description</h4>
					<div>
						{{$plot->description}}
					</div>
				</div>
				&nbsp;
				<div class="col-md-12">
					<h4>Detailed Measurements</h4>
					<div class="row">
						<div class="col-md-4">
							<b>Distance From Tanroads is</b>  {{$plot->tanroad_distance}}Km's.
						</div>
						<div class="col-md-4">
							<b>TP Drawing number is:</b> {{$plot->tt_drawing}}
						</div>

						<div class="col-md-4">
							<b>Survey Number is:</b> {{$plot->survey_number}}
						</div>

					</div>

				</div>

				&nbsp;
				<div class="col-md-12">
					<h4>Plot Measures in Compass</h4>
				<div class="row">
					<div class="col-md-3">
						<b>North: </b>{{$plot->north_width}}Km's
					</div>
					<div class="col-md-3">
						<b>West:</b> {{$plot->west_width}}Km's
					</div>
					<div class="col-md-3">
						<b>South:</b> {{$plot->south_width}}Km's
					</div>
					<div class="col-md-3">
						<b>East:</b> {{$plot->east_width}}Km's
					</div>
				</div>
				</div>

				&nbsp;
				<div class="col-md-12">
					<h4>Attachments</h4>
					<div class="row">
						<div class="col-md-3">
							<b>Download Survey Attachment: </b>{{$plot->attachment }}
						</div>
						<div class="col-md-3">
							<b>Geo-Cordinate: </b>{{$plot->positions }}
						</div>
						<div class="col-md-3">
							<b>Map</b>{{$plot->map }}
						</div>
						<div class="col-md-3">
							<b>Plot Status: </b>{{$plot->status }}
						</div>
					</div>
				</div>

			</div>
		</div>

		<div card-footer>
			<div class="row text-center border-top border-top-primary">
				<div class="col-md-6">
					Created At: {{$plot->created_at}}
				</div>
				<div class="col-md-6">
					Updated At: {{$plot->updated_at}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection