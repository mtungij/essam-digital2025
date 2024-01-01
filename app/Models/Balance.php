<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        "date",
        "payment_id",
        "amount",
        
    ];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
