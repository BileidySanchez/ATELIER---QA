<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'gender',
        'name',
        'slug',
        'description',
        'price',
        'image',
        'size',
        'color',
        'stock',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'stock' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getNombreAttribute(): ?string
    {
        return $this->name;
    }

    public function getPrecioAttribute(): ?float
    {
        return $this->price !== null ? (float) $this->price : null;
    }

    public function getImagenAttribute(): ?string
    {
        return $this->image;
    }

    public function getGeneroAttribute(): ?string
    {
        return $this->gender;
    }

    public function getCategoriaIdAttribute(): ?int
    {
        return $this->category_id;
    }
}
