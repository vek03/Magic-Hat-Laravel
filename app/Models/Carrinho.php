<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrinho extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_client',
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
    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_client');
    }


    public function product(): BelongsTo
    {
        return $this->belongsTo(Produto::class, 'id_product');
    }
}