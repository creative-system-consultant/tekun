<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'dbo.CUSTOMER';
    protected $primaryKey = 'CUST_ID';
    protected $guarded = [];
}
