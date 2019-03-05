<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function home()
    {
        $data['sliders'] = json_encode([
                            ['id' => 1, 'title' => 'link A', 'path'=> 'images/sliders/slider-1.jpg', 'url' => 'http://google.com'],
                            ['id' => 2, 'title' => 'link B', 'path'=> 'images/sliders/slider-1.jpg', 'url' => 'http://yahoo.com']
                          ]);
        return view('frontend.home', $data);
    }

    public function contact()
    {
        return view('frontend.contact', []);
    }

}
