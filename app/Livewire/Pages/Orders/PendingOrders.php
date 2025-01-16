<?php

namespace App\Livewire\Pages\Orders;

use App\Models\Customer;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class PendingOrders extends Component
{

    // public $selectOrderId;

    // public function changeStatus($orderId)
    // {
    //     $this->selectOrderId = $orderId; // Store the order ID
    // }

    // public function update()
    // {
    //     $order = Customer::find($this->selectOrderId); // Use the stored order ID

    //     if ($order && $order->status === 'pending') {
    //         $order->status = 'completed'; // Update the order status
    //         $order->save(); // Save changes to the database

    //         $this->dispatchBrowserEvent('close-modal'); // Trigger modal close via JavaScript
    //         session()->flash('message', 'Order updated successfully!');
    //     } else {
    //         session()->flash('error', 'Order not found or already processed.');
    //     }
    // }


    
    public function render()
    {
        $orders = Customer::where('status','pending')
        ->where('fname', 'like', "%{$this->search}%")
        ->orWhere('fname', 'like', "%{$this->search}%")
        ->paginate(3);
        return view('livewire.pages.orders.pending-orders',['orders' => $orders]);
    }
}
