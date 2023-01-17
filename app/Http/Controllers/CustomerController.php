<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $customers = Customer::All();
       return view('admin.customer.index',compact('customers'));
    }
    
    public function report()
    {
       $customers = Customer::All();

       return view('admin.customer.reportCustomer',compact('customers'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
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
            'nic' => 'required',
            'gender' => 'required',
            'stutas' => 'required',
            'email' => 'required|string|email|max:255|unique:customers',
            'pass' => 'required',
        ]);

        $data = $request->all();
        $data['pass'] = bcrypt($request->password);
        Customer::create($data);
        return redirect()->route('customerss.index')->with('success', 'Customer Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $customer = Customer::find($id);
       return view('admin.customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'c_name' => 'required',
            'address' => 'required',
            'birth' => 'required',
            'phone' => 'required | string',
            'national' => 'required',
            'nic' => 'required',
            'gender' => 'required',
            'stutas' => 'required',
            'email' => 'required|string|email|max:255|',
            
        ]);
        $data = $request->all();
        $customer = Customer::find($id);
        
        if ($request->pass) {
            $password = $request->pass;
        } else {
            $password = $customer->pass;
        }
        $data['pass'] = bcrypt($password);
        $customer->update($data);
        return  redirect()->route('customerss.index')->with('success', 'Customer updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
       Customer::find($id)->delete();
       return redirect()->route('customerss.index')->with('message','Customer Deleted');
    }
}
