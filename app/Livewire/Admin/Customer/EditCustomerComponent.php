<?php

namespace App\Livewire\Admin\Customer;

use Livewire\Component;
use App\Models\Customer;

class EditCustomerComponent extends Component
{

    public $name;
    public $mobile;
    public $email;
    public $password;
    public $gender;
    public $address;
    public $customer_id;

    public function mount($customer_id){
        $this->customer_id = $customer_id;
        $customer= Customer::where('id',$customer_id)->first();
        $this->customer_id= $customer->id;
        $this->name= $customer->name;
        $this->mobile= $customer->mobile;
        $this->email= $customer->email;
        $this->password= $customer->password;
        $this->gender= $customer->gender;
        $this->address= $customer->address;
    }

    public function Editcustomer()
    {
        $customer = Customer::find($this->customer_id);
        $customer ->name = $this->name; 
        $customer ->mobile = $this->mobile; 
        $customer ->email = $this->email; 
        $customer ->password = $this->password; 
        $customer ->gender = $this->gender; 
        $customer ->address = $this->address; 
        $customer->save();
        $this->reset();

        return redirect()->route('admin.dashboard');
    }
    
    public function render()
    {
        return view('livewire.admin.customer.edit-customer-component')->layout('layouts.base');
    }
}
