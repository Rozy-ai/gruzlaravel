<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class OrderController extends Controller
{
    public function index()
    {
    	$category = Category::where('code', '=', 'notice')->first();
$catId = $category->id;
$notice = Item::where([
    ['category_id', '=', $catId],
    ['status', '=', '1'],
    ['is_main', '=', 0],
])->first();
    	return view('pages.order', ['notice' => $notice]);
    }

    public function role(Request $request)
    {
    	if ($request['roles'] == 'fiziki') {
    		return view('pages.order_fiziki');
    	} 
    	if($request['roles'] == 'legal'){
    		return view('pages.order_legal');
    	}

    }
}
