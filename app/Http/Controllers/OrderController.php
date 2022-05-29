<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;

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
        abort(404);
    }

    public function order(Request $request)
    {
        // $this->validate($request, [
        // 'phone' => 'required',
        // 'email' => 'email',
        // 'date' => 'required',
        // 'where' => 'required',
        // 'to' => 'required',
        // 'cargo_type' => 'required',
        // 'cargo_volume' => 'required',
        // ]);
        $order = new Order;
        $mailData = $request->all();
        $email = 'ashauk@awtoulag.gov.tm';
        Mail::to($email)->send(new EmailDemo($mailData));
        Order::create($request->all());
        // return response()->json([
        //     'message' => 'Email has been sent.'
        // ], Response::HTTP_OK);
        return redirect('/order')->with('success', __('Order Addedd!'));


   

  
   

    }
}
