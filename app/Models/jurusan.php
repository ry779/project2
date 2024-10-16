<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;
     protected $fillable= ['id', 'nama', 'prodi'];
    protected $table='Jurusan';
    public $timestamps =false;

}
