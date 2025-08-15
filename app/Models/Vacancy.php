<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['title', 'description', 'location', 'type', 'deadline', 'is_active'];
}
