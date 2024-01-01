<?php

namespace App\Livewire\Pages\Maintenance;

use Livewire\Component;
use App\Models\Balance;
use App\Models\Payment;
use App\Models\Maintenance;
use Masmerise\Toaster\Toaster;

class Maintenanc extends Component
{

    public $payment_id;
    public $expenses;
    public $amount;
    public $comments;

    public $payments=[];
    public $balanceAount;

    public function mount ()

    {
        $this->payments =Payment::all();
    }

    public function recordExpense()
    {
        $balance = Balance::where('payment_id' , $this->payment_id)->first();

    //   dd($balance);
    //   exit();
            

        if (!$balance) {
            Toaster::error('No balance Found for the selected payment method');
            return;
        } elseif ($balance->amount < $this->amount) {
            Toaster::error('Insufficient balance for this expenses.');
            return;
        
        } {
            $balance->decrement('amount',$this->amount);

            Maintenance::create([
                'payment_id' => $this->payment_id,
                'expenses' => $this->expenses,
                'amount'=>$this->amount,
                'comments' => $this->comments,
            ]);
            Toaster::success('expenses recorded successfully.');
        }
        

      
    }



    public function render()
    {
        $accounts = Balance::with('payment')
    ->selectRaw('payment_id, SUM(amount) as total_amount')
    ->groupBy('payment_id')
    ->get();

        return view('livewire.pages.maintenance.maintenance',['accounts' => $accounts]);
    }
}
