<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    public function index()
    {
    	$category = Category::where(['code' => 'news'])->first();
    	$catId = $category->id;
    	$items = Item::where([
    ['category_id', '=', $catId],
    ['status', '=', '1'],
    ['is_main', '=', 0],
])->orderBy('date_created', 'desc')->paginate(9);
    	return view('pages.news_list', ['items' => $items]);
    }

    public function show($id)
    {
        $popular = Item::orderBy('visited_count','desc')->take(3)->get();
    	$item = Item::where('id', $id)->firstOrFail();
        $related = Item::orderBy('id','desc')->where('category_id', '=', $item->category_id)->where('id', '!=', $item->id)->take(3)->get();
    	return view('pages.show', ['item' => $item,'popular' => $popular,'related' =>$related]);
    }

    public function acts()
    {
    $category = Category::where(['code' => 'regulatory_documents'])->firstOrFail();
    $catId = $category->id;
    $items = Item::where([
    ['category_id', '=', $catId],
    ['status', '=', '1'],
    ['is_main', '=', 0],
])->orderBy('date_created', 'desc')->paginate(10);
        return view('pages.acts_list', ['items' => $items]);
    }
}

