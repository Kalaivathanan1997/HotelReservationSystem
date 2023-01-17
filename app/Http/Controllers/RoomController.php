<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms=Room::get();
        return view('admin.room.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.room.create');
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
            'roomNo' => 'required',
            'roomType' => 'required',
            'floorNo' => 'required',
            'adult_price' => 'required',
            'kid_price' => 'required',
            'amenities' => 'required',
            'roomView' => 'mimes:jpeg,jpg,png',
        ]);


         if ($request->hasFile('roomView')) {
            $image = $request->roomView->hashName();
            $request->roomView->move(public_path('profile'), $image);
        } else {
            $image = 'avatar2.png';
       }

        $data = $request->all();
        $data['roomView'] = $image;
        Room::create($data);
        return redirect()->route('rooms.index')->with('success', 'Room Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function show(Room $rooms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $room = Room::find($id);
        return view('admin.room.edit',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'roomNo' => 'required',
            'roomType' => 'required',
            'floorNo' => 'required',
            'adult_price' => 'required',
            'kid_price' => 'required',
            'amenities' => 'required',
            'roomView' => 'mimes:jpeg,jpg,png',
        ]);
           
        if ($request->hasFile('roomView')) {
            $image = $request->roomView->hashName();
            $request->roomView->move(public_path('profile'), $image);
        } else {
            $image = 'avatar2.png';
       }
       $data = $request->all();
       $data['roomView'] = $image;
       $room = Room::find($id);
        $room->update($data);
        return  redirect()->route('rooms.index')->with('success', 'Room updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rooms  $rooms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Room::find($id);
        try {
            $result = $post->delete();
            $message = " Room " . $post->roomNo . " Successfully Deleted!";
        } catch (QueryException  $e) {
            $message =  " Room " . $post->roomNo . " was not Deleted, Try Again!";
            return redirect()->route('rooms.index')->with(['warning' => $message]);
        }
        return redirect()->route('rooms.index')->with(['success' => $message]);
    
    }
}
