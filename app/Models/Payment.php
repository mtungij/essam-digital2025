<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",

    ];
public function balance()
{
    return $this->hasOne(Balance::class);
}
  
// kila njia ya malipo yana balance moja
    public function receives():HasMany
    {
        return $this->hasMany(Receive::class);
    }

    // Kila njia za malipo zina expenses nyingi
    public function maintanance()
    {
        return $this->hasMany(Maintanance::class);
    }

}
