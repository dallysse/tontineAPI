<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cash_funds extends Model
{
    use HasFactory;
    protected $table = "fond_de_caisse";
    protected $fillable = ['date', 'session'];
}
