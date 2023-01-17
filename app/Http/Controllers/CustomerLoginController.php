<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Customer;
use Session;
use Carbon\Carbon;
use DateTime;

class CustomerLoginController extends Controller
{
    
    

     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {
        $data = $request->all();
        $data['pass'] = bcrypt($request->password);
        Customer::create($data);
        $message = "Customer Registration Success Please Login Confirm Your Verification";
        return response()->json(['success'=> $message ]);
        
    }

    public function CustomerLogin(Request $request)
    {
        $customer = Customer::where('email' ,'=', $request->email)->first();
        if (Customer::where('email', '=', $request->email)->count() > 0)
         {
            Session::put('CustomerName', $customer->c_name);
            Session::put('CustomerId', $customer->id);
            return response()->json(['CustomerName'=> $customer->c_name ,'CustomerId'=>$customer->id]);
         }
         else{
            session()->forget('CustomerName');
            session()->forget('CustomerId');
            return response()->json(['CustomerName'=> 'CustomerName' ,'CustomerId'=> 'CustomerId']);
         }
    }

    public function CustomerLogout(Request $request)
    {
        
            session()->forget('CustomerName');
            session()->forget('CustomerId');
            return response()->json(['CustomerName'=> 'CustomerName' ,'CustomerId'=> 'CustomerId']);
         
       
    }
    
    public function BookingDetails($id)
    {
        $bookings = Booking:: where('customer_id',$id)->get();
    //    dd($bookings);
        return view('customer.bookingdetail',compact('bookings'));
    }

    public function CustomerRoomBooking(Request $request)
    {
       
     $additional =0;
        $payableAmount=   intval($request->totalAmount);

        $data = $request->all();

        $data['check_in'] = \Carbon\Carbon::createFromFormat('m/d/Y', $request->check_in) ->format('Y-m-d');
        $data['check_out'] = \Carbon\Carbon::createFromFormat('m/d/Y',$request->check_out) ->format('Y-m-d');

 

        
        $data['totalAmount'] =  $payableAmount;
        $data['additionalAmount'] = intval($additional);
        $data['payableAmount'] = $payableAmount;
        $data['booking_date'] = Carbon::now();
        	

        Booking::create($data);
        return response()->json();
    }

    public function BookingDetailEdit($id)
    {
        $booking= Booking::find($id);
        $room = Room:: find($booking->room_id);
        return view('customer.roombookingedit',compact('booking','room'));

    }
    public function BookingDetailStore(Request $request, $id)
    {
       
        $additional =0;
        $payableAmount=   intval($request->totalAmount);

        $data = $request->all();

        $data['check_in'] = \Carbon\Carbon::createFromFormat('m/d/Y', $request->check_in) ->format('Y-m-d');
        $data['check_out'] = \Carbon\Carbon::createFromFormat('m/d/Y',$request->check_out) ->format('Y-m-d');



        
        $data['totalAmount'] =  $payableAmount;
        $data['additionalAmount'] = intval($additional);
        $data['payableAmount'] = $payableAmount;
        $data['booking_date'] = Carbon::now();
            
        $booking = Booking::find($id);
        $booking->update($data);
        return response()->json(['Success'=> 'Success' ,'CustomerId'=> $booking->customer_id]);
        // return redirect()->route('CustomerRoomBooking.get',$booking->customer_id )->with('message','Record Updated Successfully'); 
       
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms= Room ::All();
        $booking = Booking:: All();
        return view('customer.index',compact('rooms','booking'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'c_name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'phone' => 'required | string',
            'national' => 'required',
            'nic' => 'required | unique:Customers',
            'gender' => 'required',
            'stutas' => 'required',
            'email' => 'required|string|email|max:255|unique:customers',
            'pass' => 'required',
        ]);

        $data = $request->all();
        $data['pass'] = bcrypt($request->password);
        Customer::create($data);
        return json_encode(array(
            "statusCode"=>200
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $room= Room::find($id);
        return view('customer.roomdetail',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return response()->json(['Success'=> 'CustomerName' ,'CustomerId'=> 'CustomerId']);

        $post =  Booking::find($id);
        $customerId = $post->customer_id;
        if($post->stutas == 'Pending')
        {
        try {
            $result = $post->delete();
            $message = " Room Booking  Successfully Deleted!";
        } catch (QueryException  $e) {
            $message =  " Room Booking  was not Deleted, Try Again!";
            return redirect()->route('CustomerRoomBooking.get',$customerId)->with(['warning' => $message]);
        }
    
        return redirect()->route('CustomerRoomBooking.get',$customerId)->with(['success' => $message]);
    }
       
    }

}
