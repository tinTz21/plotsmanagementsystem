@extends('layouts.app', ['activePage' => 'Bought Plot Payment Info', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><b>{{$payments->country}}, {{$payments->region}}, {{$payments->district}}, {{$payments->street}}&nbsp;&nbsp;</b><b>Block Number: </b> {{$payments->block}}, <b>Plot Number: </b>&nbsp;&nbsp;{{$payments->plot}}  </h4>
                </div>
                
                  <div class="card-body">

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
                          <label class="col-sm-4"><b>Total Amount Paid</b></label>
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
                      </div>&nbsp;

                      <div class="col-md-12">
                        <h5><b>Buyer Information</b></h5>
                      </div>

                      <div class="col-md-6">
                       <div class="row">
                          <label class="col-sm-3"><b>Buyer Name</b></label>
                        <div class="col-sm-4">
                          {{$payments->user->name}}
                        </div>
                       </div>
                      </div>

                    <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-5"><b>Payment Method Used</b></label>
                        <div class="col-sm-6">
                          {{$payments->method}}
                        </div>
                        </div>
                      </div>

                    <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-5"><b>Number Of Installments</b></label>
                        <div class="col-sm-6">
                          {{$payments->number_of_installments}}
                        </div>
                      </div>
                        </div>

                  <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-3"><b>ID Details</b></label>
                        <div class="col-sm-6">
                          {{$payments->user->identification}}, #:{{$payments->user->identification_number}}
                        </div>
                      </div>
                        </div>
                        @if($payments->user->email)
                         <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-2"><b>Email</b></label>
                        <div class="col-sm-6">
                            {{$payments->user->email}}
                        </div>
                      </div>
                        </div>
                        @endif
                        @if($payments->user->phone)
                         <div class="col-md-6">
                        <div class="row">
                          <label class="col-sm-3"><b>Phone</b></label>
                        <div class="col-sm-6">
                            {{$payments->user->phone}}
                        </div>
                      </div>
                        </div>
                        @endif


                    </div>

                     <div class="card-footer">
                  <div class="col-md-12">
                      <div class="row">
                    <div class="col-md-6">
                      <label>Geo-Cordinate Number</label>

                        {{$payments->geo}}

                    </div>
                    <div class="col-md-6">
                      <label>TP Number</label>

                         {{$payments->tp}}

                    </div>
                  </div>
                  </div>
                </div>
                </div>  

        </div>
      </div>
    </div>
    </div>


   <div class="card">
      <div class="card-header">
        Attachments
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
                        <label>Agreement Attachment</label>
                        <div class="col-xs-6">
                          {{$payments->agreement_attachment}}
                        </div>
                      </div>
          <div class="col-md-6">

                        <label>Receipt Attachment</label>
                        <div class="col-xs-6">
                          {{$payments->receipt_attachment}}
                        </div>

          </div>
        </div>
      </div>
    </div>



     <div class="card">
       <div class="card-body">
          <div class="row">
    <div class="col-md-6">
      <a href="{{route('payments.index')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="col-md-6">
      @include('payments.showmodel.delete')
    </div>
  </div>
       </div>
     </div>
  </div>

</div>
@endsection