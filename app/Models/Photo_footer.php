<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo_footer extends Model
{
    use HasFactory;

    protected $table = 'photo_footer';
    protected $primaryKey = 'id';
    protected $fillable = ['photo_footer'];
}
