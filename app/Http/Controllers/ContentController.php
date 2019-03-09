<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function home()
    {
        $data['sliders'] = json_encode([
                            ['id' => 1, 'title' => null, 'path'=> 'images/sliders/slider-1.jpg', 'url' => 'http://google.com'],
                            ['id' => 2, 'title' => null, 'path'=> 'images/sliders/slider-1.jpg', 'url' => 'http://yahoo.com']
                          ]);
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
      $data['sliders'] = json_encode([
                          ['id' => 1, 'title' => 'PT MEIJI INDONESIA', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'path'=> 'images/sliders/slider-2.jpg', 'url' => 'http://google.com'],
                          ['id' => 2, 'title' => null, 'path'=> 'images/sliders/slider-1.jpg', 'url' => 'http://yahoo.com']
                        ]);
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

}
