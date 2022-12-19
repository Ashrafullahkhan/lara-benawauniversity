<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumuni extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body', 'lang', 'main_pic'];
}
