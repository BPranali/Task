<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Customer;

class AdminDashboardComponent extends Component
{

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer = delete();
    }

    public function render()
    {
        $customer = Customer::all();
        return view('livewire.admin.admin-dashboard-component',compact('customer'))->layout('layouts.base');
    }
}
