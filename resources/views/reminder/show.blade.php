@extends('layouts.app', ['activePage' => 'Reminder', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content"> 
      		<small>Your customer</small> <b>{{$reminder->payment->user->name}} </b>, <small>will pay {{number_format($reminder->next_amount)}}/=</small> <small> at </small><b>{{$reminder->next_date}}</b>
      		

      			
      	<div class="col-md-12">
      		<a href="{{route('reminder')}}" class="btn btn-primary">Back</a>
      	</div>
      		</div>
  
@endsection