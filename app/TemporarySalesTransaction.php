<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporarySalesTransaction extends Model
{
    protected $fillable = ['customer_id', 'product_id', 'qty'];
}
