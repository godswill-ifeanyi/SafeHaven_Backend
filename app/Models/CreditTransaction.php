<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CreditTransaction extends Model
{
    protected $fillable = [
        'reference',
        'amount',
        'account_number',
        'sender_name',
        'status',
        'payload',
    ];
}
