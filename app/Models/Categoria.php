<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['categoria'];
    public $timestamps = false;     

    public function comics()
    {
        return $this->belongsToMany(Comic::class);
    }
}
