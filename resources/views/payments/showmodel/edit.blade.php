<!-- Button trigger modal -->
<button type="button" class="btn btn-primary form-control" data-toggle="modal" data-target="#edit">
 <i class="fa fa-edit "></i>
</button>

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="paymentsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentsLabel">Edit Payments By Installment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/installment/edit/{{$payment->id}}">
        @csrf
         <div class="row">
          <div class="col-md-12">
          <label >Adjust Date</label>
           <input type="date" name="next_date" value="{{$payment->next_date}}" class="form-control">
         </div>

         <div class="col-md-12">
          <label >Promised Amount: </label>
           <input type="text" name="next_amount" value="{{$payment->next_amount}}" class="form-control">
         </div>

          <div class="col-md-12">
          <label >Payment Status: </label>
           <input type="text" name="payment_status" value="{{$payment->payment_status}}" class="form-control">
         </div>

         <div class="col-md-12">
          <label >Paid Via</label>
           <input type="text" name="account" value="{{$payment->account}}" class="form-control">
         </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>