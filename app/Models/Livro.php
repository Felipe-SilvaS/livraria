<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'isbn', 'idioma', 'ano', 'capa', 'editora_id'];

    public function midia(){
        return $this->hasOne(Mida::class);
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class);
    }


}
