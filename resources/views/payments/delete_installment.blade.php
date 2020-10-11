@extends('layouts.app', ['activePage' => 'Payments Info', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content">







  <form method="POST" action="{{route('installment.destroy',$installment->id)}}">
  @csrf
     <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
        <h5 class="modal-title" id="delete">Delete This Plot Parmantly</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this plot?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No.</button>
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
      </div>

</form>









      </div>
@endsection


















