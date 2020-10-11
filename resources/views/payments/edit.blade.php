@extends('layouts.app', ['activePage' => 'Edit Installment', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content">    
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">





      <form method="POST" action="{{route('_installment',$installment->id)}}">
        @csrf
        <input type="hidden" name="payment_id" value="{{$installment->payment_id}}">
         <div class="row">
          <div class="col-md-12">
          <label >Adjust Date</label>
           <div class="row">
             <div class="col-md-2">
                <small class="form-control">{{$installment->next_date}}</small>
             </div>
             <div class="col-md-10">
               <input type="date" name="next_date" value="{{$installment->next_date}}" class="form-control">
             </div>
           </div>
         </div>

         <div class="col-md-12">
          <label >Promised Amount: </label>
           <input type="text" name="next_amount" value="{{$installment->next_amount}}" class="form-control">
         </div>

          <div class="col-md-12">
          <label >Payment Status: </label>
           <input type="text" name="payment_status" value="{{$installment->payment_status}}" class="form-control">
         </div>

         <div class="col-md-12">
          <label >Paid Via</label>
           <input type="text" name="account" value="{{$installment->account}}" class="form-control">
         </div>


            <div class="col-md-12">
              <label>Update Attachment</label>
              <input type="file" name="receipt" value="{{$installment->receipt}}" class="form-control">
            </div>

                  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

       </div>









            
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
@endsection