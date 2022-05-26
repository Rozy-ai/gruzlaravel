<?php

namespace App\DTO;

use App\Models\Category;
use App\Models\Item;

class GetItemByCat 
{
      public static function getData($code,$options = [])
    {
        $category = Category::where('code', '=', $code)->first();
        $catId = $category->id;
        if ($options == null) {
        $options['desc'] = 'id';
        $data = Item::orderBy($options['desc'],'desc')->where([
            ['category_id', '=', $catId],
            ['status', '=', '1'],
        ])->first();
        } else {
        $data = Item::orderBy($options['desc'],'desc')->where([
            ['category_id', '=', $catId],
            ['status', '=', '1'],
        ])->take($options['limit'])->get();
        }

        return $data;
    }
}