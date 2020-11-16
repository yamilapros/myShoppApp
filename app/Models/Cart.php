<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function details(){
        return $this->hasMany(CartDetail::class);
    }

    protected $fillable = [
        'user_id'
    ];

    public function getTotalAttribute()
    {
        $total = 0;
        foreach($this->details as $detail)
        {
            $total += $detail->quantity * $detail->product->price;
        }
        return $total;
    }
}
