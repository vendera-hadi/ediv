<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\ContactLog;
use App\Models\Faq;
use App\Mail\ContactMail;

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

    public function docontact(Request $request)
    {
        $validatedData = $request->validate([
          'name' => 'required',
          'phone' => 'required',
          'message' => 'required'
        ]);
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['message'] = $request->message;

        // save database
        $contact = new ContactLog;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();

        // send mail
        try{
          \Mail::to('admin@awble.com')->send(new ContactMail($data));
          return redirect()->back()->with('success', "Your message was sent to Our team, we will respond the message as soon as possible");
        } catch (\Exception $e) {
          return redirect()->back()->with('error', "Failed to send message");
        }
    }

    public function faq()
    {
        $data['faqs'] = Faq::orderBy('created_at')->get();
        return view('frontend.faq', $data);
    }

    public function company()
    {
      $data['sliders'] = Slider::company()->get();
      return view('frontend.company', $data);
    }

    public function news()
    {
        $data['news'] = Post::news()->orderBy('id', 'desc')->limit(5)->get();
        $data['events'] = Post::event()->orderBy('id', 'desc')->limit(5)->get();
        return view('frontend.news', $data);
    }

    public function article()
    {
        $data['posts'] = Post::article()->orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.article', $data);
    }

    public function article_list(Request $request, $type)
    {
        switch ($type) {
          case 'news':
            $posts = Post::news();
            $title = "News List";
            break;
          case 'event':
            $posts = Post::event();
            $title = "Event List";
            break;
          case 'article':
            $posts = Post::article();
            $title = "Article List";
          default:
            break;
        }
        $data['posts'] = $posts->orderBy('id', 'desc')->paginate(2);
        if(!empty($request->page)) $title = $title." - Page ".$request->page;
        $data['title'] = $title;
        return view('frontend.article_list', $data);
    }

    public function article_detail(Request $request, $slug)
    {
        $data['post'] = Post::where('slug', $slug)->first();
        return view('frontend.article_detail', $data);
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
