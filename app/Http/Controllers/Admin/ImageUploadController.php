<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageUpload;


class ImageUploadController extends Controller
{
    public function fileCreate()
    {
        return view('admin.media.media');
    }

    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->getClientOriginalName();
        $image->move(public_path('/uploads/media'),$imageName);
        
        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);
    }

        public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/uploads/media/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}



