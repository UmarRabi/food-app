<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCarts extends Model
{
    use HasFactory;
    protected $table = 'transaction_cart';

    public function transaction()
    {
        return $this->belongsTo(Transactions::class, 'transaction_id', 'id');
    }

    public function cart()
    {
        return $this->belongsTo(Carts::class, 'cart_id', 'id');
    }
}
