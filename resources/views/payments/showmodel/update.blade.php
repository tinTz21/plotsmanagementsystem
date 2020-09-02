<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payments">
 <i class="fa fa-edit "></i>
</button>

<!-- Modal -->
<div class="modal fade" id="payments" tabindex="-1" role="dialog" aria-labelledby="paymentsLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentsLabel">Update Payments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="/payments/edit/{{$payments->id}}">
        @csrf
         <div class="row">
         <div class="col-md-12">
          <label >Total Amount Paid</label>
           <input type="text" name="paid" value="{{$payments->paid}}" class="form-control">
         </div>

          <div class="col-md-12">
          <label >Update Next Payments</label>
           <input type="date" name="next_pay" value="next_pay" class="form-control">
         </div>

         <div class="col-md-12">
          <label >Payment Status</label>
           <input type="text" name="status" value="{{$payments->status}}" class="form-control">
         </div>


           <div class="col-md-12">
          <label >Payment Method Used</label>
           <input type="text" name="method" value="{{$payments->method}}" class="form-control">
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