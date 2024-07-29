<?php

namespace App\Livewire\Admin\Customer;

use Livewire\Component;
use App\Models\Customer;

class AddCustomerComponent extends Component
{

    public $name;
    public $mobile;
    public $email;
    public $password;
    public $gender;
    public $address;

   
    public function Addcustomer()
{
  
        $customer = new Customer();
        $customer->name = $this->name;
        $customer->mobile = $this->mobile;
        $customer->email = $this->email;
        $customer->password = $this->password;
        $customer->gender = $this->gender;
        $customer->address = $this->address;
        $customer->save();
        $this->reset();
        return redirect()->route('admin.dashboard');
}
    public function render()
    {
        return view('livewire.admin.customer.add-customer-component')->layout('layouts.base');
    }
}
