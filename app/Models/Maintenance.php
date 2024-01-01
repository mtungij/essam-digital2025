<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public $fillable = [
          "expenses" ,
          "amount",
          "comments"
    ];

    public function payment()
    {
        return $this->belongsTo(payment::class);
    }
}
