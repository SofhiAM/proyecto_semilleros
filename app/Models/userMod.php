<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userMod extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = false;
}