<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\autores;

class libros extends Model
{
    use HasFactory;
    protected $table = 'libros';
    protected $fillable = array('nombre','autores_id');

    public function autor()
    {
        return $this->belongsTo(autores::class);
    }
}
