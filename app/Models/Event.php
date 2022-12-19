<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'lang', 'location', 'start_date', 'end_date', 'main_pic', 'pic2', 'pic3'];
}
