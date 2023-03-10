<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;
    protected $table = 'transaction';


    public function transactionCarts()
    {
        return $this->hasMany(TransactionCarts::class, 'transaction_id', 'id');
    }
}
