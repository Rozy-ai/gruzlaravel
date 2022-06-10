<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\DTO\GetItem;
use Illuminate\Support\Arr;
use App\Http\Requests\ImageUploadRequest;
use App\Models\ImageUpload;
use Illuminate\Support\Facades\Storage;

class Itemscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::orderBy('date_created', 'desc')->paginate(10);
        return view ('admin.items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        $categories = Category::listsTranslations('name')->where('status', 1)->pluck('name', 'id')->toArray();
        return view('admin.items.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = base64_decode(request('file'));
        // $file = $request->file('file');
        dd($file);
        $item = new Item;
        $item->setCategory($request['category_id']);
        $item->setDate($request['date_created']);
        $item->toggleStatus($request['status']);
        $item->toggleMenu($request['is_menu']);
        $item->toggleMain($request['is_main']);
        // $item->storeMedia($request);
        $data = GetItem::getData($request->all(), $item);
        Item::create($data);
        return redirect('admin/items')->with('success', 'Item Addedd!');  
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');

        $imageName = time() . '.' . $image->extension();

        $image->move(public_path('uploads/item'), $imageName);

        // $imageUpload = new ImageUpload;
        // $imageUpload->filename =  $imageName;
        // $imageUpload->save();
        return response()->json(['success' => $imageName]);
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('admin/items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories = Category::listsTranslations('name')->where('status', 1)->pluck('name', 'id')->toArray();
        $item = Item::find($id);
        return view('admin/items.edit')->with('item', $item)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);
        $item->setCategory($request['category_id']);
        $item->setDate($request['date_created']);
        $item->toggleStatus($request['status']);
        $item->toggleMenu($request['is_menu']);
        $item->toggleMain($request['is_main']);
        $data = GetItem::getData($request->all(), $item);
        $item->update($data);
        return redirect('admin/items')->with('success', 'Item Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        // if ($this->image != null) {
        // Storage::delete('/uploads/item/'.$this->image);
        // }
        $item->deleteTranslations();
        Item::destroy($id); 

        return redirect('admin/items')->with('success', 'Item deleted!');  
    }
}
