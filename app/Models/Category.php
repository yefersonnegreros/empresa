<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Persona;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url'];

    public function personas()
    {
        return $this->hasMany(Persona::class, 'category_id', 'id');
    }
}