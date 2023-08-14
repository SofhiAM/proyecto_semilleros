<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoordinadorMod extends Model
{
    protected $table = 'coordinador';
    protected $primaryKey = 'id_coordinador';
    public $timestamps = false;
}
