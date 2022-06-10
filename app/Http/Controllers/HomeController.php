<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Info;
use App\Models\Contact;
use App\Models\Image;
use App\DTO\GetItemByCat;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailDemo;

class HomeController extends Controller
{
    public function index()
    {
    	$about = GetItemByCat::getData('about');
    	$news = GetItemByCat::getData('news',['desc' => 'date_created','limit' => 8]);
        // $galleries = \File::allFiles(public_path('images'));
        $sliders = Image::where('type', '=', 1)->get();
        $galleries = Image::where('type', '=', 2)->get();
    
    	return view('pages.index',['about' => $about,'news' => $news,'galleries' => $galleries,'sliders' => $sliders]);
    }

    public function contact()
    {
    	$ownInfo = Info::first();
    	return view('pages.contact',['ownInfo' => $ownInfo]);
    }

    public function customContact(Request $request)
    {
        $mailData = $request->all();
        $mailData['role'] = 'contact';
        $email = 'ashauk@awtoulag.gov.tm';
        Mail::to($email)->send(new EmailDemo($mailData));
        Contact::create($request->all());
        return redirect('/contact')->with('success', __('send succss'));
    }
}
