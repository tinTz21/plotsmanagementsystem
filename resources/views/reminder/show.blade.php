@extends('layouts.app', ['activePage' => 'Reminder', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content"> 
      		<small>Your customer</small> <b>{{$reminder->payment->user->name}} </b>, <small>will pay {{$reminder->next_amount}}.Tsh/=</small> <small> at </small><b>{{$reminder->next_date}}</b>
      </div>
@endsection