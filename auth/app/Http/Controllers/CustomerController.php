<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
    	$customers['customers'] = Customer::all(); //var with array&model

    	return view('customer' , $customers);
    }
    public function store(Request $request){
    	//return $request->all();
    	$customer = new Customer;
    	$customer->name = $request->name;
    	$customer->phonenumber = $request->phonenumber;
    	$customer->email = $request->email;
    	$customer->save();

    	if($customer->save()){
    		echo "success";
    		
    	}else
    	{
    		echo "not success";
    	}

    }
    public function show($id){
    	$customers['customers'] = Customer::find($id); //to check with entered id in model and db

    	return view('customer-edit' , $customers);
    }
    public function update(Request $request){
    	$customer = Customer::find($request->id);

    	$customer->name = $request->name;
    	$customer->phonenumber = $request->phonenumber;
    	$customer->email = $request->email;
    	//$customer->save();

    	if($customer->save()){
    		echo "updated";
    		
    	}else
    	{
    		echo "not updated";
    	}
    }
    public function delete($id){
    	$customer = Customer::find($id);

    	if($customer->delete()){
    		echo "deleted";
    	}else{
    		echo "not deleted";
    	}
    }
}
