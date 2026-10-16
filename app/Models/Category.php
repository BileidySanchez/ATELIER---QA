<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 protected $table = 'categorias';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'categoria_id');
    }
}
