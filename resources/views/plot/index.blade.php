@extends('layouts.app', ['activePage' => 'Manage Lands', 'titlePage' => __('Plot')])

@section('content')
<div class="content">
  <div class="container-fluid">
  	<div class="card">
  		<div class="card-body">
  			<div class="row">
  		<div class="col-md-6"></div>
  		<div class="col-md-6 text-right ">
  			<a href="{{route('create-plot')}}" class="btn btn-primary">Add New Land</a>
  		</div>	
  	</div>
  		</div>

  		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Register New Land</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form>
	        	<div class="row">
        			<div class="col-md-12">
        				<div class="row">
        					<div class="col-md-6 form-group">
        			<label for="plotnumber" class="col-form-label">Add Plot Number</label>
        					<input type="number" id="plotnumber" class="form-control" name="plotnumber" >
	        				
	        		</div>
	        		<div class="col-md-6 form-group">
	        			<label for="size" class="col-form-label">Add Plot Size(in sqm)</label>
	        				<input type="number" class="form-control" id="size" name="size">
	        		</div>
        				</div>
        			</div>
	        	</div>

		        

		          <div class="form-group">
		            <label for="message-text" class="col-form-label">Plot Description:</label>
		            <textarea class="form-control" row="5" id="message-text"></textarea>
		          </div>

		            <div class="form-group">
		            <label for="recipient-name" class="col-form-label">Recipient:</label>
		            <input type="text" class="form-control" id="recipient-name">
		          </div>

		          <div class="form-group">
		          	<label for="file" class="col-form-label"></label>
		          	<input type="file" class="form-control" name="">
		          </div>

		            <div class="form-group" style="color: red">
					    <label for="exampleFormControlFile1">ile input</label>
					    <input type="file" class="form-control-file text-danger" id="exampleFormControlFile1">
					  </div>

		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Add</button>
		      </div>
		    </div>
		  </div>
		</div>


  	</div>
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">MyLands</h4>
        <p class="card-category">This is list of registered plots</p>
      </div>
    </div>
   
    	<div class="row">
    @foreach($plot as $plot)
    		<div class="col-md-6">
    			<div class="card text-center" >
    				 <a href="{{url('plot/show',$plot->id)}}">
		    		<div class="card-header card-header-info"> {{$plot->region}}&nbsp;&nbsp;&nbsp;{{$plot->district}} &nbsp;&nbsp;&nbsp; {{$plot->street}}</div>
		    		<div class="card-body">
		    		<h5>Plot Description</h5>
		    		{{$plot->description}}
		    		</div>
		    		<div class="card-footer border-top border-info">
		    			<div class="row">
		    				<div class="col-md-6">
		    					Created At: {{$plot->created_at}}
		    				</div>
		    				<div class="col-md-6 ">
		    					Block Number:{{$plot->block_number}}
		    				</div>
		    			</div>
		    		</div>
		    		</a>
		    	</div>
    		</div>
    @endforeach
    </div>
  </div>
</div>
@endsection