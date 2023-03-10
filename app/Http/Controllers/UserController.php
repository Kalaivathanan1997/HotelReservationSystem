<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.user.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required | string',
            'role_id' => 'required',
           // 'image' => 'mimes:jpeg,jpg,png',
            'address' => 'required',


        ]);

        $data = $request->all();
        // if ($request->hasFile('image')) {
        //     $image = $request->image->hashName();
        //     $request->image->move(public_path('profile'), $image);
        // } else {
        //     $image = 'avatar2.png';
       // }
        $data['name'] = $request->firstname . ' ' . $request->lastname;
       // $data['image'] = $image;
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return redirect()->route('users.index')->with('success', 'User Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        // return  $arr['user'];
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role_id' => 'required',
            //'image' => 'mimes:jpeg,jpg,png',
            'address' => 'required',
        ]);
        $data = $request->all();
        $user = User::find($id);
        // if ($request->hasFile('image')) {
        //     $image = $request->image->hashName();
        //     $request->image->move(public_path('profile'), $image);
        // } else {
        //     $image = $user->image;
       // }
        if ($request->password) {
            $password = $request->password;
        } else {
            $password = $user->password;
        }
       // $data['image'] = $image;
        $data['password'] = bcrypt($password);
        $user->update($data);
        return  redirect()->route('users.index')->with('success', 'User updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  User::find($id);
        try {
            $result = $post->delete();
            $message = " User " . $post->name . " Successfully Deleted!";
        } catch (QueryException  $e) {
            $message =  " User " . $post->name . " was not Deleted, Try Again!";
            return redirect()->route('users.index')->with(['warning' => $message]);
        }
        return redirect()->route('users.index')->with(['success' => $message]);
    }
}
