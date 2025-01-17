<?php

namespace App\Livewire\Pages\Orders;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class PendingOrders extends Component
{
    use WithPagination;

    public $search;
    public $order;
    public $status;
    public $comments;
    
    public function edit($id)
{
    $this->order = Customer::find($id);
    $this->status = $this->order->status;
    $this->comments = $this->order->comments;
    
}

public function update()
{

    $this->order->update([
        'status' => $this->status,
        'comments' => $this->comments,
        
        
    ]);

    $this->dispatch('order-updated', ['OrderId' => $this->order->id]);
    $this->reset();
    

    Toaster::success('order updated successfully');
}

   
    public function render()
    {
        $orders = Customer::where('status' , 'pending')->paginate(5);

        return view('livewire.pages.orders.pending-orders', ['orders' => $orders]);
    }
}
