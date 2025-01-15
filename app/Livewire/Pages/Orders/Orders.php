<?php

namespace App\Livewire\Pages\Orders;

use Livewire\Component;

class Orders extends Component
{
    public function render()
    {
        $orders = Customer::latest()
        ->where('fname', 'like', "%{$this->search}%")

        ->orWhere('fname', 'like', "%{$this->search}%")
        ->paginate();

       

    // return view('livewire.pages.member', ['members' => $members]);
        return view('livewire.pages.orders.orders');
    }
}
