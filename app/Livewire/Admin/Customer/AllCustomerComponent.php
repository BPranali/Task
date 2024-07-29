<?php

namespace App\Livewire\Admin\Customer;

use Livewire\Component;

class AllCustomerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.customer.all-customer-component')->layout('layouts.base');
    }
}
