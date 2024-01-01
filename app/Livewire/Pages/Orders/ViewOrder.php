<?php

namespace App\Livewire\Pages\Orders;

use Livewire\Component;
use App\Models\Customer;

class ViewOrder extends Component
{
    public $order;
  public function mount($id)

  {
    $this->order = Customer::find($id);

    dd($this->order);
  }

    public function render()
    {
        return view('livewire.pages.orders.view-order');
    }
}
