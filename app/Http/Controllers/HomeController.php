<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        return view('test.Home.index');
    }

    public function customers()
    {
        $customers = \App\Models\Customer::all();
        return view('test.Home.customers', compact('customers'));
    }
     // CREATE PAGE
    public function create()
    {
        return view('test.Home.create');
    }

    // STORE DATA
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect('/customers');
    }

    // EDIT PAGE
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('test.Home.edit', compact('customer'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect('/customers');
    }

    // DELETE DATA
    public function delete($id)
    {
        Customer::destroy($id);
        return redirect('/customers');
    }
}