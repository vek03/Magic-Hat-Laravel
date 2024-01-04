<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produto extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'id_category',
        'type1',
        'type2',
        'age_range',
        'qtdd',
        'price',
        'maker',
        'material',
        'description',
        'img1',
        'img2',
        'img3',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [

    ];





    /**
     * Relationships
     *
     * 
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'id_category');
    }


    public function type1(): BelongsTo
    {
        return $this->belongsTo(Tipo::class, 'id_type1');
    }

    public function type2(): BelongsTo
    {
        return $this->belongsTo(Tipo::class, 'id_type2');
    }


    public function item(): HasMany
    {
        return $this->hasMany(Item_Compra::class, 'id_product');
    }


    public function cart(): HasMany
    {
        return $this->hasMany(Carrinho::class, 'id_product');
    }
}
