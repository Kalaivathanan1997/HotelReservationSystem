 <!-- Cash Payment Modal -->
 <div class="modal fade" id="Cashpayment{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cash Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  action="{{route('payments.store')}}" method="POST" >@csrf
                                    <div class="modal-body">
                                        
                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Total Amount:</label>
                                            <input type="text" class="form-control"  Disabled value="{{$booking->totalAmount}}">
                                            <input type="hidden" class="form-control"  name="booking_id" value="{{$booking->id}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Additional Amount:</label>
                                            <input type="text" class="form-control"  Disabled value="{{$booking->payableAmount-$booking->totalAmount}}">
                                        </div>
                                        </div> 
                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Payable Amount:</label>
                                            <input type="text" class="form-control"  Disabled value="{{$booking->payableAmount}}">
                                        </div>
                                       
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Remain Amount:</label>
                                            <input type="text" class="form-control" name="remainAmount"  Disabled value="{{$booking->payableAmount - $Payments->sum('amount') }}">
                                            <input type="hidden" class="form-control" name="remainAmount"   value="{{$booking->payableAmount - $Payments->sum('amount') }}">
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="recipient-name" class="col-form-label">Insert Amount:</label>
                                            <input type="number" class="form-control" name="amount"  max="{{$booking->payableAmount - $Payments->sum('amount') }}" min="1" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="message-text" class="col-form-label">Paid Amount:</label>
                                            <input type="text" class="form-control"  Disabled value="{{$Payments->sum('amount')}}">
                                            <input type="hidden" class="form-control"  name="PaidAmount" value="{{$Payments->sum('amount')}}">
                                        </div>
                                        </div>
                                       
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Pay</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Cash Payment Modal -->


                            <!-- Card payment modal -->
                            <div class="modal fade" id="Cardpayment{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Card Payment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <form action="">
                                    <p class="fw-bold mb-4 pb-2">Saved cards:</p>

                                    <div class="d-flex flex-row align-items-center mb-4 pb-1">
                                    <img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png" />
                                    <div class="flex-fill mx-3">
                                        <div class="form-outline">
                                        <input type="text" id="formControlLgXc" class="form-control form-control-lg"
                                            value="**** **** **** 3193" />
                                        <label class="form-label" for="formControlLgXc">Card Number</label>
                                        </div>
                                    </div>
                                    <a href="#!">Remove card</a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4 pb-1">
                                    <img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png" />
                                    <div class="flex-fill mx-3">
                                        <div class="form-outline">
                                        <input type="text" id="formControlLgXs" class="form-control form-control-lg"
                                            value="**** **** **** 4296" />
                                        <label class="form-label" for="formControlLgXs">Card Number</label>
                                        </div>
                                    </div>
                                    <a href="#!">Remove card</a>
                                    </div>

                                    <p class="fw-bold mb-4">Add new card:</p>

                                    <div class="form-outline mb-4">
                                    <input type="text" name="cadholder_name" class="form-control form-control-lg" />
                                    <label class="form-label" for="formControlLgXsd">Cardholder's Name</label>
                                    </div>

                                    <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-outline">
                                        <input type="text" name="card_number"class="form-control form-control-lg"
                                        placeholder="1234 5678 1234 5678"  />
                                        <label class="form-label" for="formControlLgXM">Card Number</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-outline">
                                            <div class="row">
                                        <div class="col-5">
                                        <input type="text" id="formControlLgExpk" name="expire_month" class="form-control form-control-lg d-inline-block"
                                            placeholder="MM" />  
                                        </div>
                                        <div class="col-7">
                                            <input type="text" id="formControlLgExpk" name="expire_Year" class="form-control form-control-lg d-inline "
                                            placeholder="YYYY" />
                                            </div>
                                            </div>
                                        <label class="form-label" for="formControlLgExpk">Expire date</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-outline">
                                        <input type="password" name="cvv" class="form-control form-control-md"
                                         spl_autoload_functions   placeholder="Cvv" />
                                        <label class="form-label" for="formControlLgcvv">Cvv</label>
                                        </div>
                                    </div>
                                   
                                    </div>
                                    <div class="text-center">
            <div class="controls text-center">
              <label class="checkbox" for="save_card">
                <input type="checkbox" id="save_card" value="option1">
                Save card on file?
              </label>
            </div>
          </div>

                                    <button class="btn btn-success btn-lg btn-block">Add card</button>
                                </form>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Send message</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <!-- End Card payment modal -->