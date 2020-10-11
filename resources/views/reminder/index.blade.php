@extends('layouts.app', ['activePage' => 'Reminder', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content"> 
      		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

			<h3>Calendar</h3>

			<div id='calendar'></div>

			<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
			<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
			<script>
			    $(document).ready(function() {
			        // page is now ready, initialize the calendar...
			        $('#calendar').fullCalendar({
			            // put your options and callbacks here
			            events : [
			                @foreach($reminder as $reminder)
			                {
			                    title : '{{ $reminder->payment_status  }}',
			                    start : '{{ $reminder->next_date }}',
			                    url : '{{ route('reminder.show', $reminder->id) }}'
			                },
			                @endforeach
			            ]
			        })
			    });
			</script>
      </div>
@endsection