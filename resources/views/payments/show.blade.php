@extends('layouts.app', ['activePage' => 'Bought Plot Payment Info', 'titlePage' => __('Typography')])

    @section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-8">
                  <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><b>{{$payments->country}}, {{$payments->region}}, {{$payments->district}}, {{$payments->street}}&nbsp;&nbsp;</b><b>Block Number: </b> {{$payments->block}}, <b>Plot Number: </b>&nbsp;{{$payments->plot}}  </h4>
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
                      <div class="col-md-12">
                       <div class="row">
                          <label class="col-sm-3"><b>Agreed Price</b></label>
                        <div class="col-sm-8">
                          {{$payments->agreed}}
                        </div>
                       </div>
                      </div>

                      <div class="col-md-12">
                       <div class="row">
                          <label class="col-sm-4"><b>Total Amount Paid</b></label>
                        <div class="col-sm-8">
                          {{$payments->paid}}
                        </div>
                       </div>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                          <label class="col-sm-3"><b>Amount Due</b></label>
                        <div class="col-sm-9">
                          {{ ((int)$payments['agreed'] - (int)$payments['paid'])}} Tsh
                        </div>
                        </div>
                      </div>

                       <div class="col-md-12">
                       <div class="row">
                          <label class="col-sm-4"><b>First Payment Issued On</b></label>
                        <div class="col-sm-7">
                          {{$payments->created_at}}
                        </div>
                       </div>
                      </div>

                      <div class="col-md-12">
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

                      <div class="col-md-12">
                       <div class="row">
                          <label class="col-sm-3"><b>Buyer Name</b></label>
                        <div class="col-sm-4">
                          {{$payments->user->name}}
                        </div>
                       </div>
                      </div>

                    <div class="col-md-12">
                        <div class="row">
                          <label class="col-sm-4"><b>Payment Method Used</b></label>
                        <div class="col-sm-8">
                          {{$payments->method}}
                        </div>
                        </div>
                      </div>

                    <div class="col-md-12">
                        <div class="row">
                          <label class="col-sm-5"><b>Number Of Installments</b></label>
                        <div class="col-sm-6">
                          {{$payments->number_of_installments}}
                        </div>
                      </div>
                        </div>

                  <div class="col-md-12">
                        <div class="row">
                          <label class="col-sm-3"><b>ID Details</b></label>
                        <div class="col-sm-6">
                          {{$payments->user->identification}}, #:{{$payments->user->identification_number}}
                        </div>
                      </div>
                        </div>
                        @if($payments->user->email)
                         <div class="col-md-12">
                        <div class="row">
                          <label class="col-sm-2"><b>Email</b></label>
                        <div class="col-sm-6">
                            {{$payments->user->email}}
                        </div>
                      </div>
                        </div><hr>
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
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      Installment Payments Management
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          @include('payments.showmodel.create')
                        </div>
                       <div class="col-md-12">
                          <label>NEXT PAYMENT IS AT: </label>
                       </div>
                       <div class="col-md-12">
                          @foreach($installment as $installment)&nbsp;
                            <div>
                              @if($installment->payment_id ==$payments->id)
                          Date: {{date('d-m-Y', strtotime($installment->next_date))}}<br>
                          Promised Amount: {{$installment->next_amount}} Tsh<br>
                          installment Status: {{$installment->installment_status}}<br>
                          @if($installment->receipt)
                          Receipt: <a href="{{url($installment->receipt)}}" target="_blank">Download</a>
                          @endif
                          <br>
                          Payment Status: {{$installment->payment_status}}<br>
                          Payed via {{$installment->account}}<br>
                          <a href="{{route('installment.edit',$installment->id)}}"><i class="fa fa-edit"></i></a>
                          <a href="{{route('installment.delete_installment',$installment->id)}}"><i class="fa fa-trash"></i></a>
                            </div>
                          &nbsp;
                         @endif
                          @endforeach
                          &nbsp;
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
         <div class="col-md-6">&nbsp;
           @if($payments->agreement_attachment)
                    <p1>
                        <x2> <a href="{{ url($payments->agreement_attachment) }}" target="_blank"> <i class="fa fa-download"></i> Download Aagreement Attachment  </a> 
                    </p1>
                @endif&nbsp;
        </div>

          <div class="col-md-6">&nbsp;
           @if($payments->receipt_attachment)
                    <p1>
                        <x2> <a href="{{ url($payments->receipt_attachment) }}" target="_blank"> <i class="fa fa-download"></i> Download receipt attachment  </a> 
                    </p1>
                @endif&nbsp;
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