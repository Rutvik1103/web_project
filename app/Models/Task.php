<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $filleble =['task','is_complete'];
    protected $guarded = ['_token'];
}
