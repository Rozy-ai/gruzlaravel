<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\DTO\GetData;
// use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
 public function index()
    {
        $categories = Category::all();
        return view ('admin.categories.index')->with('categories', $categories);
    }
 
    
    public function create()
    {
        return view('admin.categories.create');
    }
 
   
    public function store(Request $request)
    {
        $this->validate($request, [
        'code' => 'required',
        // 'status' => 'required',
        ]);
        $category = new Category;
        $category->toggleTop($request['top']);
        $category->toggleStatus($request['status']);
        $data = GetData::getData($request->all(), $category);
        Category::create($data);
        return redirect('admin/categories')->with('success', 'Category Addedd!');  
    }


 
    
    public function show($id)
    {
        $category = Category::find($id);
        return view('admin/categories.show')->with('category', $category);
    }
 
    
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin/categories.edit')->with('category', $category);
    }
 
  
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'code' => 'required',
        // 'status' => 'required',
        ]);
        $category = Category::find($id);
        $category->toggleTop($request['top']);
        $category->toggleStatus($request['status']);
        $data = GetData::getData($request->all(), $category);
        $category->update($data);
        return redirect('admin/categories')->with('success', 'Category Updated!');  
    }
 
   
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->deleteTranslations(); 
        Category::destroy($id);

        return redirect('admin/categories')->with('success', 'Category deleted!');  
    }
}
