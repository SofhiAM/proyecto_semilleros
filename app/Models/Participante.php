<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'proyectoevento';
    protected $primaryKey = ['id_proyecto', 'id_evento'];
    public $timestamps = false;
}
