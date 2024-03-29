<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    //

    public function index (){   
        $customers = Customer::all();
        
  return view('customers.index', compact('customers'));

  }

  public function create(){

          $companies = Company::all();
          $customer = new Customer();

            return view('customers.create',compact('companies','customer'));
  }



    public function store(){

            
            Customer::create($this->validateRequest());           
            return redirect('customers');
    }

    public function show(Customer $customer){



        // $customer = Customer::find( $customer);
        return view('customers.show', compact('customer'));
    }


    public function  edite(Customer $customer){
        $companies = Company::all();

        return view('customers.edite' , compact('customer' , 'companies') );
    }
    public function update(Customer $customer){

        
        $customer->update($this->validateRequest());

        return redirect('customers/'.$customer->id);

    }
    public function destroy(Customer $customer)
    {

        $customer->delete();
         
         return  redirect('customers');


}

    
        private function validateRequest(){


        $data =  request()->validate([

                'name' => 'required|min:3',
                'email' => 'required|email',
                'active' =>'required',
                'company_id' =>'required',
            ]);
            return $data;
        }

}
