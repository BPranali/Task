<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class HomeComponent extends Component
{
    public function render()
    {
        $customer = Customer::all();
        return view('livewire.home-component',compact('customer'))->layout('layouts.base');
    }
}
