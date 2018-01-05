<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Task;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function allCustomers()
    {

        $customers = Customer::all();

        // dd($customers);
        return view('customer.all')->with('customers', $customers);
    }

    function viewCustomer($id)
    {
        $data = Customer::find($id);

        $tasks = Task\Task::where('customer_id', $id)->where('status', '!=', 'Completed')->with('notes')->get();

        return view('customer.view')->with('customer', $data)->with('tasks', $tasks);
    }

    function editCustomer($id = null)
    {

        if ($id == "") {
            $customer = new Customer();
        } else {
            $customer = Customer::find($id);
        }

        return view('customer.edit')->with('customer', $customer);
    }

    function createEditCustomer(Request $request, $id = null)
    {

//        dd($request->input());

        if ($id == "") {
            $customer = new Customer();
            $customer->tasks = 0;
            $customer->paid_this_month = 0;
        } else {
            $customer = Customer::find($request->id);
        }

        $customer->updated_at = now();

        $customer->fill($request->input());

        $customer->save();

        return redirect('customers');

    }

}