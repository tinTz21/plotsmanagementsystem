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
                      <div class="col-md-12 text-right">
                        @include('payments.showmodel.update')
                      </div>
                      <div class="col-md-4">
                        <label>Buyer Name</label>
                        <div class="col-xs-4">
                          {{$payments->user->name}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Plot Status</label>
                        <div class="col-xs-4">
                          {{$payments->status}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Agreement Attachment</label>
                        <div class="col-xs-4">
                          {{$payments->agreement_attachment}}
                        </div>
                      </div>
                    </div>&nbsp;

                          <div class="row">
                      <div class="col-md-4">
                        <label>Payment Method Used</label>
                        <div class="col-xs-4">
                          {{$payments->method}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Customer Account</label>
                        <div class="col-xs-4">
                          {{$payments->account}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Amount Payed</label>
                        <div class="col-xs-4">
                          {{$payments->cash}}
                        </div>
                      </div>
                    </div>&nbsp;

                        <div class="row">
                      <div class="col-md-4">
                        <label>Number Of Installments</label>
                        <div class="col-xs-4">
                          {{$payments->number_of_installments}}
                        </div>
                      </div>

                      <div class="col-md-4">
                        <label>Receipt Attachment</label>
                        <div class="col-xs-4">
                          {{$payments->receipt_attachment}}
                        </div>
                      </div>

                      <!-- <div class="col-md-4">
                        <label></label>
                        <div class="col-xs-4">
                          {{$payments->cash}}
                        </div>
                      </div> -->
                      <hr>
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