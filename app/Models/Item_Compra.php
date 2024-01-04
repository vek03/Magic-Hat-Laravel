<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Item_Compra extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_shopping',
        'id_product',
        'qtdd',
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
    public function shopping(): BelongsTo
    {
        return $this->belongsTo(Compra::class, 'id_shopping');
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'id_product');
    }
}