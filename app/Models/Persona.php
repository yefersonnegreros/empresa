<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $primaryKey = 'nPerCodigo';

    public $incrementing = true;
    protected $fillable = [
        'cPerApellido', 'cPerNombre', 'cPerDireccion', 'dPerFecNac', 
        'nPerEdad', 'cPerSexo', 'nPerSueldo', 'cPerRnd', 'nPerEstado', 'image', 'category_id'
    ];
    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
