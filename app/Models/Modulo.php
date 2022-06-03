<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

    protected $table = 'moduls';
    //protected $primaryKey = 'id';
    //protected $incrementing = true;
    public $timestamps = false;

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'moduls_has_cursos', 'moduls_id', 'cursos_id')->withPivot('curs_academic_id');
    }
}
