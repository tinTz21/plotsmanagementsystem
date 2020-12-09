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
						<div class="col-md-3">
							<b> Tanroads Distance is</b> {{$plot->tanroad_distance}}Km's.
						</div>
						<div class="col-md-3">
							<b>TP Drawing number is:</b> {{$plot->tt_drawing}}
						</div>

						<div class="col-md-3">
							<b>Survey Number is:</b> {{$plot->survey_number}}
						</div>
						<div class="col-md-3">
							<b>Geo-Cordinate:</b>{{$plot->positions }}
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

			</div>
		</div>
<hr>
		<div class="card-footer">
			
				<div class="col-md-6 text-left">
					Created At: {{date('d-m-Y', strtotime($plot->created_at))}} 
				</div>

			</div>
		</div>
	</div>

	<div class="col-md-12">
		<div class="card">
		<div class="card-header">
			<h3>Attachments</h3>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">&nbsp;
					 @if($plot->attachment)
		                <p1>
		                    <x2> <a href="{{ url($plot->attachment) }}" target="_blank"> <i class="fa fa-download"></i> Download Survey document </a> 
		                </p1>
		            @endif&nbsp;
				</div>

				<div class="col-md-6">
					 @if($plot->diligencef)
		                <p1>
		                    <x2> <a href="{{ url($plot->diligencef) }}" target="_blank"> <i class="fa fa-download"></i> Download Due Diligence Info </a> 
		                </p1>
		            @endif&nbsp;
				</div>

				<div class="col-md-6">&nbsp;
					 @if($plot->photof)
		                <p1>
		                    <x2> <a href="{{ url($plot->photof) }}" target="_blank"> <i class="fa fa-download"></i> Download Plot's photo </a> 
		                </p1>
		            @endif&nbsp;
				</div>

				<div class="col-md-6">&nbsp;
					 @if($plot->historicalf)
		                <p1>
		                    <x2> <a href="{{ url($plot->historicalf) }}" target="_blank"> <i class="fa fa-download"></i> Download Historical Attachment </a> 
		                </p1>
		            @endif&nbsp;
				</div>

				<div class="col-md-6">&nbsp;
					 @if($plot->purchasesf)
		                <p1>
		                    <x2> <a href="{{ url($plot->purchasesf) }}" target="_blank"> <i class="fa fa-download"></i> Download Purchases Attachment </a> 
		                </p1>
		            @endif&nbsp;
				</div>
			</div>

		</div>
	</div>
	</div>
</div>
@endsection