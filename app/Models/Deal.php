<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    
    protected $table = 'deal';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'harga', 'harga1', 'photo'];
}
