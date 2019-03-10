<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

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

}
