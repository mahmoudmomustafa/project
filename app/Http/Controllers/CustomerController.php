<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\Customer;
use Illuminate\Http\Request;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
class CustomerController extends Controller
{
    // exports
    public function export() 
    {
        return Excel::download(new CustomerExport, 'customers.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        return view('pages.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'accountName' => ['required','unique:customers', 'string'],
            'accountNum' => ['required','unique:customers','numeric'],
            'name' => ['required', 'string'],
            'phone' => ['required','unique:customers', 'numeric'],
            'company' => ['required', 'string'],
            'address' => ['required', 'string'],
            'postal' => ['required', 'numeric'],
        ]);
        $customer = $request->all();
        Customer::create($customer);
        return redirect('/dashboard/customers')->with('message', 'New Customer was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('pages/customer/edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'accountName' => ['required', 'string', 'max:255'],
            'accountNum' => ['required', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'max:12'],
            'company' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postal' => ['required', 'string', 'max:255'],
        ]);
        $customer->update($request->all());
        return redirect('/dashboard/customers')->with('message', 'Customer was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/dashboard/customers')->with('message', 'Customer was Deleted');
    }
}
