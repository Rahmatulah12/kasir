<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'sales_transactions';
    protected $fillable = ['customer_id', 'product_id', 'qty'];
}
