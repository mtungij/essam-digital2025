<?php

namespace App\Livewire\Pages\Orders;

use Livewire\Component;
use App\Models\Customer;

class Completed extends Component
{

    public $orders;
    public $order;
    public $selectedOrder = null; 

    public function mount()
    {
        
        $this->orders = Customer::all();
    }


    public function view($orderId)
    {
       
        $this->selectedOrder = Customer::findOrFail($orderId);
    }
   


    public function render()
    {
       

        

     
        return view('livewire.pages.orders.completed' , [
            'order' => $this->order,
        ]);
    }
}
