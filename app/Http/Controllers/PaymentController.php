<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Card;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payment.index',compact('payments'));
    }

    public function report()
    {
     
        $payments = Payment::all();
        return view('admin.payment.reportPayment',compact('payments'));
      
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.payment.reportPayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::find($request->booking_id);
        
        if($request->paymentType == 'cardPayment')
        {
                $card1 =  Card::where('customer_id' ,$request->customer_id)->get();
                $card =  Card::where('customer_id' ,$request->customer_id);
                if(isset($request->save_card))
                {
                
                    if($card1->isEmpty())
                    {
                        $card_Detail['customer_id']  = $request->customer_id;
                        $card_Detail['cadholder_name']  = $request->cadholder_name;
                        $card_Detail['card_number']  = $request->card_number;
                        $card_Detail['expire_month']  = $request->expire_month;
                        $card_Detail['expire_Year']  = $request->expire_Year;
                        $card_Detail['cv_code']  = $request->cv_code;
                        Card::create($card_Detail);


                    }
                    else{
                    

                        $card_Detail['customer_id']  = $request->customer_id;
                        $card_Detail['cadholder_name']  = $request->cadholder_name;
                        $card_Detail['card_number']  = $request->card_number;
                        $card_Detail['expire_month']  = $request->expire_month;
                        $card_Detail['expire_Year']  = $request->expire_Year;
                        $card_Detail['cv_code']  = $request->cv_code;
                    
                        $card->update($card_Detail);


                        }
                }
                else
                {
                    
                    $card->delete();
                }
        }





       if($request->PaidAmount == 0 && $request->amount > 0 )
       {
        $data1['stutas'] ='Accept';
        $booking->update($data1);
       }
       if($request->remainAmount == $request->amount) 
       {
        
        $data1['stutas'] ='Release';
        $booking->update($data1);
       }


       $data['booking_id']= $request->booking_id;
       $data['amount']= $request->amount;
       $data['paymentType']= $request->paymentType;
        Payment::create($data);
        return redirect()->route('bookings.index')->with('success', 'payment Successfully');
    
 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {  
    }

    public function billing(Request $request)
    {
        $id =$request->id;
        $paymentType =$request->paymentType;
        $booking = Booking:: find($id);
        $cards = Card::where('customer_id', $booking->customer_id)->get();
        $payments = Payment::where('booking_id', $id)->get();
        return view('admin.payment.edit',compact('booking','paymentType','payments','cards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
