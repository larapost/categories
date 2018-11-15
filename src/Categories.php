<?php

namespace Larapost;

use Larapost\Models\Categorie;
use Larapost\Models\SubCategorie;

class Categories
{
    public function add($name, $slug = false)
    {
        $cat = Categorie::where('name', $name)->first();

        if ($cat) {
            return $cat;
        }

        if (!$slug) {
            $slug = str_slug($name);
        }

        return Categorie::create([
            'name' => $name,
            'slug' => $slug
        ]);
    }

    public function get($id, $value, $subs = false)
    {
        $query = Categorie::query();
        
        if ($subs) {
            $query->with(['subs']);
        }

        $query->where($id, $value);
        $cat = $query->first();
        // dd($cat);
        return $cat;
    }

    public function remove($id)
    {
        return Categorie::where('id', $id)->delete();
    }

    public function all($subs = false)
    {
        $query = Categorie::query();
        
        if ($subs) {
            $query->with(['subs']);
        }

        $all = $query->get();
        return $all;
    }

    // sub

    public function subAdd($categorie_id, $name, $slug = false)
    {
        $subCat = SubCategorie::where('categorie_id', $categorie_id)->where('name', $name)->first();

        if ($subCat) {
            return $subCat;
        }

        if (!$slug) {
            $slug = str_slug($name);
        }

        return SubCategorie::create([
            'categorie_id' => $categorie_id,
            'name' => $name,
            'slug' => $slug
        ]);
    }

    public function subGet($id, $value)
    {
        $cat = SubCategorie::where($id, $value)->first();
        return $cat;
    }

    public function subRemove($id)
    {
        return SubCategorie::where('id', $id)->delete();
    }

}