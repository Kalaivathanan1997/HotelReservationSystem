@extends('admin.layouts.master')

@section('content_header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="content-header">
        <div class="container-fluid text-md " style="margin: -7px 0;">
            <div class="row ">
                <div class="col-sm-6">
                    <h5>Payment Invioce</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">All Booking</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    @endsection

@section('content')

<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i>Summer Hotel Online.
                    <small class="float-right">Date: {{Carbon\Carbon::now()->toDateString()}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Summer Hotel Online.</strong><br>
                    101  2nd Cross Street, 11,<br>
                    Colombo, sl 43000<br>
                    Phone: (+94) 011-222-2101<br>
                    Email: info@hotelbooking.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$booking->customer->c_name}}</strong><br>
                    {{$booking->customer->address}},<br>
                    SL 43000<br>
                    Phone: {{$booking->customer->phone}}<br>
                    Email: {{$booking->customer->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #{{$booking->id + 5500}}</b><br>
                  <br>
                  <b>Booking ID:</b> {{$booking->id}}<br>
                  <b>Payment Due:</b> {{$booking->check_out}}<br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Description</th>
                      <th>Payment Type</th>
                      <th>Paid date</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($payments as $key => $payment)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>Room No :- {{$booking->room->roomNo}} , Room Type :- {{$booking->room->roomType}} </td>
                      <td>{{$payment->paymentType}}</td>
                      <td>{{$payment->created_at}}</td>
                      <td>Rs {{$payment->amount}}</td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{asset('profile/Visa.png')}}" alt="Visa" width="100" height="50">
                  <img src="{{asset('profile/mastercard.png')}}" alt="Mastercard" width="100" height="50">
                  <img src="{{asset('profile/American Express.png')}}" alt="American Express" width="100" height="50">
                  <img src="{{asset('profile/Paypal.png')}}" alt="Paypal" width="100" height="50">

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  * This price is converted to show you the approximate cost in LKR. You'll pay in £. The exchange rate might change before you pay.

Keep in mind that your card issuer may charge you a foreign transaction fee.
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due {{$booking->check_out}}</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rs {{$booking->totalAmount}}</td>
                      </tr>
                      <tr>
                        <th>Additional Amount</th>
                        <td>Rs {{$booking->additionalAmount}}</td>
                      </tr>
                      <tr>
                        <th>payable Amount:</th>
                        <td>Rs {{$payable = $booking->totalAmount + $booking->additionalAmount}}</td>
                      </tr>
                      <tr>
                        <th>Paid  Amount:</th>
                        <td>Rs {{$payments->sum('amount')}}</td>
                      </tr>
                      @php $reminAmount = $booking->totalAmount + $booking->additionalAmount - $payments->sum('amount')  @endphp
                      @if($payable !=  $payments->sum('amount') )

                      <tr>
                        <th class=" text-red">Remain Amount:</th>
                        <td class=" text-red">Rs {{$reminAmount}}</td>
                      </tr>
                      @endif
                    </table>
                  </div>
                </div>
                
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <!-- <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button> -->
                  @if($payable !=  $payments->sum('amount') )
                  <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#{{$paymentType.$booking->id}}" > <i class="far fa-credit-card"></i> Submit
                    Payment</button>
                  @endif
                  <button type="button" class="btn btn-primary float-right " style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div>
            </div>

                          <!-- Card payment modal -->
                        <div class="modal fade" id="cardPayment{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Card Payment</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                <div class="modal-body">
                               
                                    <p class="fw-bold mb-4 pb-2">Saved card:</p>
                                    @php $card1  @endphp
                                    @if($cards->isEmpty())
                                    @else
                                    
                                   @foreach($cards as $key=>$card)
                                   @php $card1 = $card @endphp
                                    <div class="d-flex flex-row align-items-center mb-4 pb-1" id="saveCard">
                                          @if(substr($card->card_number , 0, 1) == 4)
                                        <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                      @else
                                        <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
                                      @endif
                                      <div class="flex-fill mx-3">
                                          <div class="form-outline">
                                          <input type="text" id="card"  class="form-control form-control-lg "
                                              value="**** **** **** {{ substr($card->card_number , -4);}}" />
                                          <label class="form-label" for="formControlLgXc">Card Number</label>
                                          </div>
                                      </div>
                                    </div>
                                    @endforeach
                                    @endif

                                    <form action="{{route('payments.store')}}" method="POST">@csrf

                                    <p class="fw-bold mb-4">payment Amount Details:</p>
                                    <div class="row mb-4">
                                    <div class="col-6">

                                    <div class="form-outline mb-4">
                                    <input type="text" name="remainAmount" Disabled value="Rs {{$reminAmount }}" class="form-control form-control-lg" />
                                    <label class="form-label" for="formControlLgXsd">Total Amount Due:</label>
                                    </div>
                                    </div>
                                    <div class="col-6">
                                    <div class="form-outline mb-4">
                                    <input type="number" value="{{$reminAmount }}" name="amount" max="{{$reminAmount }}" min="0" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="formControlLgXsd">insert Amount </label>
                                    </div>
                                    </div>
                                    </div>

                                    <p class="fw-bold mb-4">Add new card:</p>

                                    <div class="form-outline mb-4">
                                    <input type="text" name="cadholder_name" @if(isset($card1->cadholder_name)) value="{{$card1->cadholder_name}}" @endif class="form-control form-control-lg" />
                                    <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
                                    </div>

                                    <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-outline">
                                        <input type="text" name="card_number" @if(isset($card1->card_number)) value="{{$card1->card_number}}" @endif  class="form-control form-control-lg"
                                        placeholder="1234 5678 1234 5678"  />
                                        <label class="form-label" for="formControlLgXM">Card Number</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-outline">
                                            <div class="row">
                                        <div class="col-5">
                                        <input type="text" id="formControlLgExpk" @if(isset($card1->expire_month)) value="{{$card1->expire_month}}" @endif name="expire_month" class="form-control form-control-lg d-inline-block"
                                            placeholder="MM" />  
                                        </div>
                                        <div class="col-7">
                                            <input type="text" id="formControlLgExpk" @if(isset($card1->expire_Year)) value="{{$card1->expire_Year}}" @endif name="expire_Year" class="form-control form-control-lg d-inline "
                                            placeholder="YYYY" />
                                            </div>
                                            </div>
                                        <label class="form-label" for="formControlLgExpk">Expire date</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-outline">
                                        <input type="number" name="cv_code" @if(isset($card1->cv_code)) value="{{$card1->cv_code}}" @endif class="form-control form-control-lg"
                                         spl_autoload_functions   placeholder="Cv Code" />
                                        <label class="form-label" for="formControlLgcvv">Cv Code</label>
                                        </div>
                                    </div>
                                   
                                    </div>
                                    <div class="text-center">
                                      <div class="controls text-center">
                                        <label class="checkbox" for="save_card">
                                          <input type="checkbox" id="save_card" name="save_card" >
                                          Save card on file?
                                        </label>
                                      </div>
                                    </div>
                                    <input type="hidden" value="{{$booking->id}}" name="booking_id">
                                    <input type="hidden" value="{{$payments->sum('amount')}}" name="PaidAmount">
                                    <input type="hidden" value="{{$reminAmount}}" name="remainAmount">
                                    <input type="hidden" value="{{$paymentType}}" name="paymentType">
                                    <input type="hidden" value="{{$booking->customer_id}}" name="customer_id">
                                    <button class="btn btn-success btn-lg btn-block">Pay Amount</button>
                                </form>
                                </div>
                               
                            </div>
                            </div>
                            </div>
                            <!-- End Card payment modal -->


                             <!-- Cash Payment Modal -->
                          <div class="modal fade" id="cashPayment{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cash Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  action="{{route('payments.store')}}" method="POST" >@csrf
                                    <div class="modal-body">
                                        
                                        <div class="form-group ">
                                            <label for="message-text" class="col-form-label">payable Amount:</label>
                                            <input type="text" class="form-control"  Disabled value="{{$booking->payableAmount}}">
                                        </div>

                                        <div class="form-group ">
                                            <label for="recipient-name" class="col-form-label">Remain Amount:</label>
                                            <input type="text" class="form-control" name="remainAmount"  Disabled value="{{$booking->payableAmount - $payments->sum('amount') }}">
                                            <input type="hidden" class="form-control" name="remainAmount"   value="{{$booking->payableAmount - $payments->sum('amount') }}">
                                        </div>
                                       
                                       
                                        <div class="form-group ">
                                            <label for="recipient-name" class="col-form-label">Insert Amount:</label>
                                            <input type="number" class="form-control" name="amount" value="{{$booking->payableAmount - $payments->sum('amount') }}"  max="{{$booking->payableAmount - $payments->sum('amount') }}" min="1" required>
                                        </div>
                                       
                                    </div>
                                  <div class="modal-footer">
                                    <input type="hidden" value="{{$booking->id}}" name="booking_id">
                                    <input type="hidden" value="{{$payments->sum('amount')}}" name="PaidAmount">
                                    <input type="hidden" value="{{$reminAmount}}" name="remainAmount">
                                    <input type="hidden" value="{{$paymentType}}" name="paymentType">
                                    <input type="hidden" value="{{$booking->customer_id}}" name="customer_id">
                                  
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                                  
                                    <button type="submit" class="btn btn-primary ">Pay</button>
                                 
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Cash Payment Modal -->


            <!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->





@endsection
