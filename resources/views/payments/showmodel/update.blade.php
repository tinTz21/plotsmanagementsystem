<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 <i class="fa fa-edit "></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Payments</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
         <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-10">
                            
                          </div>
                          <div class="col-md-2">
                            @include('payments.showmodel.update')
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <h5><b>Payment</b></h5>
                      </div>
                      <div class="col-md-6">
                       <div class="row">&nbsp;
                          <label class="col-sm-3"><b>Agreed Price</b></label>
                        <div class="col-sm-7">
                          {{$payments->agreed}}
                        </div>
                       </div>
                      </div>
                      <div class="col-md-6">
                       <div class="row">
                          <label class="col-sm-3"><b>Amount Paid</b></label>
                        <div class="col-sm-7">
                          {{$payments->paid}}
                        </div>
                       </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-3"><b>Amount Due</b></label>
                        <div class="col-sm-7">
                          {{ ((int)$payments['agreed'] - (int)$payments['paid'])}} Tsh
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-3"><b>Next Payment</b></label>
                        <div class="col-sm-7">
                          {{$payments->next_pay}}
                        </div>
                        </div>
                      </div>

                       <div class="col-md-6">
                       <div class="row">
                          <label class="col-sm-5"><b>First Payment Issued On</b></label>
                        <div class="col-sm-7">
                          {{$payments->created_at}}
                        </div>
                       </div>
                      </div>

                      <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-4"><b>Payment Status</b></label>
                        <div class="col-sm-7">
                          {{$payments->status}}
                        </div>
                        </div>
                      </div>
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>