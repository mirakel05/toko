<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrival extends Model
{
    use HasFactory;

    protected $table = 'arrival';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'harga', 'photo'];
}
