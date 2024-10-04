<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model

{
    protected $table = 'eventslist';

    protected $fillable = ['title', 'description', 'date','image_url'];
}
