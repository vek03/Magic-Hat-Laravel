<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_category',
        'name',
        'lastname',
        'email',
        'password',
        'address',
        'number',
        'cep',
        'city',
        'district',
        'state',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
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


    public function shopping(): HasMany
    {
        return $this->hasMany(Compra::class, 'id_client');
    }


    public function cart(): HasMany
    {
        return $this->hasMany(Carrinho::class, 'id_client');
    }
}
