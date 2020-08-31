<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Sell This Plot
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
        <div class="row">
          <div class="col-md-12">
            <h5 class="modal-title" id="exampleModalLabel">Add Payments Information</h5>
          </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>

      <form method="POST" action="{{route('payments')}}">
        @csrf

        <input type="hidden" name="customer" value="customer">

        <input type="hidden" name="plot" value="{{$plot->plot_number}}">
        <input type="hidden" name="block" value="{{$plot->plot_size}}">
        <input type="hidden" name="geo" value="{{$plot->positions }}">
        <input type="hidden" name="tp" value="{{$plot->tt_drawing}}">
        <input type="hidden" name="country" value="{{$plot->country}}">
        <input type="hidden" name="region" value="{{$plot->region}}">
        <input type="hidden" name="district" value="{{$plot->district}}">
        <input type="hidden" name="street" value="{{$plot->street}}">
      <div class="modal-body">
        <div class="row">
<!--           <div class="col-md-12">
            <label>Select Customer</label>
            <select class="form-control" name="customer">
              <option>Select Customer</option>
               @foreach($customer as $customer)

               @if($customer->customer)
               <option  value="{{$customer->name}}">
               {{$customer->name}}
               </option>
               @endif
               @endforeach
          </select>
          </div> -->
          <div class="col-md-12 text-center">
            <label><b>Customer Details</b></label>
          </div>
          <div class="col-md-12">
            <div class="row">
                 <div class="col-md-6">
            <label>Customer Name</label>
           <input type="text" name="name" class="form-control" placeholder="Enter Customer Name">
          </div>

           <div class="col-md-6">
            <label>Customer Email</label>
           <input type="text" name="email" class="form-control" placeholder="Enter Customer Email">
          </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="row">
               <div class="col-md-6">
            <label>Customer Country</label>
           <input type="text" name="country" class="form-control" placeholder="Enter Customer Country">
          </div>

          <div class="col-md-6">
            <label>Size Bought By This Customer</label>
            <input type="text" name="size" class="form-control" placeholder="add size...">
          </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <label>ID Type</label>
                <input type="text" name="identification" class="form-control" placeholder="Enter ID type">
              </div>
              <div class="col-md-6">
                <label>ID Number</label>
                <input type="text" name="identification_number" class="form-control" placeholder="Enter ID Number">
              </div>
            </div>
          </div>
&nbsp;
          <div class="col-md-12 text-center">
            <label><b>Payment Plan</b></label>
          </div>

        <div class="col-md-12">
           <div class="row">
            <div class="col-md-6">
            <label>Issue Date</label>
            <input type="date" name="date" class="form-control">
          </div>


          <div class="col-md-6">
            <label>Payment Method</label>
            <select class="form-control" name="method">
              <option>Select One</option>
              <option value="Mobile Money Payments">Mobile Money Payments</option>
              <option value="Banking Payments">Banking Payments</option>
              <option value="Cash">Cash</option>
            </select>
          </div>
         </div>
        </div>

          <div class="col-md-12">
            <label>Add Mobile/Bank Account Number</label>
            <input type="text" name="account" class="form-control" placeholder="e.g. +255758xxxxxx or  0132xxxxxxxxx-CRDB">
          </div>

          

          <div class="col-md-6">
            <label>Payment Status</label>
            <select class="form-control" name="status">
              <option>Select...</option>
              <option>Payed All</option>
              <option>Not Payed</option>
              <option>Paying With Installments</option>
            </select>
          </div>

          <div class="col-md-6">
            <label>Add Number Of Installments</label>
            <input type="text" name="number_of_installments" class="form-control" placeholder="e.g. 3">
          </div>

          <div class="col-md-6">
            <label>Payment Receipt Attachment</label>
            <input type="file" name="receipt_attachment" class="form-control">
          </div>

          <div class="col-md-6">
            <label>Agreement Attachment</label>
            <input type="file" name="agreement_attachment" class="form-control">
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>