<?php

namespace App\Livewire\Pages\MonthlyBalance;

use Livewire\Component;
use App\Models\Payment;
use App\Models\Balance;
use Masmerise\Toaster\Toaster;

class MonthlyBalance extends Component
{

    
public $date;
public $amount;
public $payment;

protected $rules = [
    'date' => 'required|date',
    'amount' => 'required|numeric',
    'payment' => 'required|exists:payments,id',
];

public function submit()
{
    $this->validate();
    

    Balance::create([
        'date' => $this->date,
        'amount' => $this->amount,
        'payment_id' => $this->payment
    ]);

    $this->reset(['date', 'amount', 'payment']);

    Toaster::success('balance recorded successfully');

   
}

    public function render()
    {
        $payments = Payment::all();
        $balances = Balance::with('payment')->orderBy('created_at','desc')->paginate(3);
        return view('livewire.pages.monthly-balance.monthly-balance',['payments'=> $payments,'balances'=>$balances]);
    }
}
