<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CustomersDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Customer_Service;
use App\Models\Service;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(CustomersDataTable $dataTable)
    {
        return $dataTable->render('dashboard.customers.index');
    }


//    public function create()
//    {
//        $services = Service::all();
//        return view('dashboard.customers.create',compact('services'));
//    }
//
//    public function store(CustomerRequest $request)
//    {
////        $services_ids = $request->service_ids;
//        try {
//            Customer::create([
//                'name_en' => $request->input('name'),
//                'message_en' => $request->input('message'),
//                'email' => $request->input('email'),
//                'phone' => $request->input('phone'),
//            ]);
//
////            foreach ($services_ids as $id){
////                Customer_Service::create([
////
////                ]);
////            }
//
//            session()->flash('success', 'created successfully.');
//            return redirect()->route('customer.index');
//        } catch (\Exception $ex) {
//            session()->flash('error', 'An error occurred while creating the customer. Please try again.');
//            return redirect()->route('customer.create');
//        }
//    }
//

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        try {
//            $customer = Customer::find($id);
//            if (!$customer) {
//                session()->flash('error', 'The customer is not exist');
//                return redirect()->route('customer.index');
//            }
//            return view('dashboard.customer.edit',compact('customer'));
//        }catch (\Exception $ex) {
//            session()->flash('error', 'There was an error try again');
//            return redirect()->route('customer.index');
//        }
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function update(CustomerRequest $request, $id)
//    {
//        try {
//            $customer = Customer::findorfail($id);
//
//                $customer->update([
//                    'name_en' => $request->input('name'),
//                    'message_en' => $request->input('message'),
//                    'email' => $request->input('email'),
//                    'phone' => $request->input('phone'),
//                ]);
//
//
//            session()->flash('success', 'updated successfully.');
//            return redirect()->route('customer.index');
//        } catch (\Exception $ex) {
//            session()->flash('error', 'here was an error try again');
//            return redirect()->route('customer.edit', $id);
//        }
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return response()->json('success');
    }
}
