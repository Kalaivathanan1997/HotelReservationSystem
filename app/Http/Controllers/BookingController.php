<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;
use DateTime;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $bookings=Booking::get(); 
   
        return view('admin.booking.index',compact('bookings'));
    }
    public function report()
    {
        $bookings=Booking::get(); 
   
        return view('admin.booking.reportBooking',compact('bookings'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.booking.create');
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
            'customer_id' => 'required',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'stutas' => 'required',
        ]);

        
    $AdultNo    =$request->adults;
    $kidNo      =$request->kids;
    
    $from_date = $request->check_in;
    $to_date = $request->check_out;
    $first_datetime = new DateTime($from_date);
    $last_datetime = new DateTime($to_date);
    $interval = $first_datetime->diff($last_datetime);
    $final_days = $interval->format('%a');

     $room= Room::find($request->room_id);
     $dayAmount = $room->adult_price * $AdultNo +  $room->kid_price * $kidNo ;
     $RoomAmount = $final_days * $dayAmount; 

     $additional=0;
     if (isset($request->additionalNeed['room_service'])) {
         $additional+=  $RoomAmount * 0.1;

     }
    if (isset($request->additionalNeed['laundry_service'])) {
         $additional+=  $RoomAmount * 0.02;
     }
     if (isset($request->additionalNeed['telephone_service'])) {
         $additional +=  $RoomAmount * 0.05;
     }
     if (isset($request->additionalNeed['club_access'])) {
         $additional+=  $RoomAmount * 0.1;
     }
     if (isset($request->additionalNeed['pool_bath'])) {
         $additional+=  $RoomAmount * 0.05;
     }
     if (isset($request->additionalNeed['key_card_access'])) {
         $additional+=  $RoomAmount * 0.01;
     }

   $payableAmount=   intval($RoomAmount+$additional);

       
       

        $data = $request->all();
        $data['totalAmount'] =  $RoomAmount;
        $data['additionalAmount'] = intval($additional);
        $data['payableAmount'] = $payableAmount;
        $data['booking_date'] = Carbon::now();
        	

        Booking::create($data);
        return redirect()->route('bookings.index')->with('success', 'Room Booking  Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $booking = Booking::find($id);
        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'stutas' => 'required',
        ]);

        $AdultNo    =$request->adults;
        $kidNo      =$request->kids;

        $from_date = $request->check_in;
        $to_date = $request->check_out;
        $first_datetime = new DateTime($from_date);
        $last_datetime = new DateTime($to_date);
        $interval = $first_datetime->diff($last_datetime);
        $final_days = $interval->format('%a');
    
        $room= Room::find($request->room_id);
        $dayAmount = $room->adult_price * $AdultNo +  $room->kid_price * $kidNo ;
        $RoomAmount = $final_days * $dayAmount; 

         $additional=0;
         if (isset($request->additionalNeed['room_service'])) {
             $additional+=  $RoomAmount * 0.1;
    
         }
        if (isset($request->additionalNeed['laundry_service'])) {
             $additional+=  $RoomAmount * 0.02;
         }
         if (isset($request->additionalNeed['telephone_service'])) {
             $additional +=  $RoomAmount * 0.05;
         }
         if (isset($request->additionalNeed['club_access'])) {
             $additional+=  $RoomAmount * 0.1;
         }
         if (isset($request->additionalNeed['pool_bath'])) {
             $additional+=  $RoomAmount * 0.05;
         }
         if (isset($request->additionalNeed['key_card_access'])) {
             $additional+=  $RoomAmount * 0.01;
         }
    
       $payableAmount=   intval($RoomAmount+$additional);
         
           
           
    
        $data = $request->all();
        $booking = Booking::find($id);
       
        $data['totalAmount'] =  $RoomAmount;
        $data['additionalAmount'] = intval($additional);
        $data['payableAmount'] = $payableAmount;
        $data['booking_date'] = $booking->booking_date;
                
    
       
        $booking->update($data);
        return  redirect()->route('bookings.index')->with('success', 'Booking updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $post =  Booking::find($id);
        try {
            $result = $post->delete();
            $message = " Room Booking  Successfully Deleted!";
        } catch (QueryException  $e) {
            $message =  " Room Booking  was not Deleted, Try Again!";
            return redirect()->route('bookings.index')->with(['warning' => $message]);
        }
        return redirect()->route('bookings.index')->with(['success' => $message]);
    }
}
