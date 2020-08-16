@extends('layouts.app', ['activePage' => 'Plot Details', 'titlePage' => __('Plot')])

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-primary" href="{{route('plot')}}">Back</a>
		</div>
	</div>

	<div class="card">
		<div class="card-header card-header-primary">
			<p>Sell This Plot</p>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<label>Select Customer</label>
					<select class="form-control">
						
							 @foreach($customer as $customer)
							 <option>
							 	{{$customer->name}}
							 </option>
							 @endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection