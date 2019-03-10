<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Newsletter;

class ContentController extends Controller
{

    public function home()
    {
        $data['sliders'] = Slider::home()->get();
        return view('frontend.home', $data);
    }

    public function contact()
    {
        return view('frontend.contact', []);
    }

    public function faq()
    {
        return view('frontend.faq', []);
    }

    public function company()
    {
      $data['sliders'] = Slider::company()->get();
      return view('frontend.company', $data);
    }

    public function news()
    {
        return view('frontend.news', []);
    }

    public function article()
    {
        return view('frontend.article', []);
    }

    public function product()
    {
        return view('frontend.product', []);
    }

    public function subscribe(Request $request)
    {
      $email = $request->email;
      $check = Newsletter::where('email', $email)->first();
      if($check){
        return redirect('/')->with('message', 'Email sudah pernah terdaftar ke dalam sistem');
      }else{
        // insert new
        $newsletter = new Newsletter;
        $newsletter->email = $email;
        $newsletter->save();
        return redirect('/')->with('message', 'Terima kasih sudah mendaftar ke newsletter kami');
      }
    }

}
