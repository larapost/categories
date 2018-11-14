<?php

namespace Larapost\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model
{
    protected $table = 'larapost_subcategories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'categorie_id',
        'name',
        'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
