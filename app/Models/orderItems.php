<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItems extends Model
{
    use HasFactory;
    protected $fillable=["order_id","user_id","quantity","price","product_id"];
    protected $table="order_items";
}
