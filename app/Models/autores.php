<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\libros;

class autores extends Model
{
    use HasFactory;

    protected $table = 'autores';
    protected $fillable = array('autor');

    public function libro(){
        return $this->hasMany(libros::class);
    }
}

