<?php

namespace Larapost\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'larapost_categories';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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

    public function subs()
    {
        return $this->hasMany('Larapost\Models\SubCategorie', 'categorie_id', 'id')->orderBy('id', 'desc');
    }
}
