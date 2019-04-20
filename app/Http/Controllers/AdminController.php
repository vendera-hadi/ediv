<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Newsletter;
use App\Models\Post;
use App\Models\ContactLog;
use App\Models\Faq;
use App\Models\Content;
use App\Exports\NewsletterExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;

class AdminController extends Controller
{
    public function slider()
    {
        $data['home_sliders'] =  Slider::home()->get();
        $data['company_sliders'] =  Slider::company()->get();
        return view('backend/slider', $data);
    }

    public function slider_new(Request $request)
    {
      $data['type'] = !empty($request->type) ? $request->type : 'home';
      $data['title'] = "New ".ucfirst($data['type'])." Slider";
      $data['action'] = route('admin.slider.create');
      return view('backend/slider_form', $data);
    }

    public function slider_edit(Request $request, $id)
    {
      $data['type'] = !empty($request->type) ? $request->type : 'home';
      $data['slider'] = Slider::findOrFail($id);
      $data['title'] = "Edit Slider";
      $data['action'] = route('admin.slider.update', ['id' => $id]);
      return view('backend/slider_form', $data);
    }

    public function slider_create(Request $request)
    {
      $path = $request->file('image')->store('images/sliders','public');
      $slider = new Slider;
      $slider->type = $request->type;
      $slider->path = 'storage/'.$path;
      $slider->url = $request->url;
      $slider->title = $request->title;
      $slider->desc = $request->desc;
      $slider->save();
      return redirect('admin')->with('success', 'Insert Success');
    }

    public function slider_update(Request $request, $id)
    {
      $slider = Slider::findOrFail($id);
      if($request->hasFile('image')){
        $path = $request->file('image')->store('images/sliders','public');
        $slider->path = 'storage/'.$path;
      }
      $slider->url = $request->url;
      $slider->title = $request->title;
      $slider->desc = $request->desc;
      $slider->save();
      return redirect('admin')->with('success', 'Update Success');
    }

    public function slider_destroy(Request $request, $id)
    {
      $slider = Slider::findOrFail($id);
      $slider->delete();
      return redirect('admin')->with('success', 'Delete Success');
    }

    public function newsletter()
    {
        $data['newsletters'] = Newsletter::paginate(20);
        return view('backend.newsletter', $data);
    }

    public function newsletter_download()
    {
        return Excel::download(new NewsletterExport, 'data.xlsx');
    }

    public function news()
    {
        $data['type'] = "news";
        $data['title'] = "News";
        $data['posts'] = Post::news()->orderBy('created_at', 'desc')->paginate(20);
        return view('backend.post', $data);
    }

    public function event()
    {
      $data['type'] = "event";
      $data['title'] = "Events";
      $data['posts'] = Post::event()->orderBy('created_at', 'desc')->paginate(20);
      return view('backend.post', $data);
    }

    public function article()
    {
      $data['type'] = "article";
      $data['title'] = "Articles";
      $data['posts'] = Post::article()->orderBy('created_at', 'desc')->paginate(20);
      return view('backend.post', $data);
    }

    public function post_new(Request $request, $type)
    {
      $data['type'] = $type;
      $data['title'] = "New ".ucfirst($data['type']);
      $data['action'] = route('admin.post.create');
      return view('backend.post_form', $data);
    }

    public function post_create(Request $request)
    {
        $path = $request->file('image')->store('images/news','public');
        $post = new Post;
        $post->type = $request->type;
        $post->title = $request->title;
        $post->slug = \Str::slug($post->title, '-');
        $post->description = $request->desc;
        $post->image = 'storage/'.$path;
        $post->save();
        return redirect('admin/'.$post->type)->with('success', 'Insert Success');
    }

    public function post_edit(Request $request, $id)
    {
      $post = Post::findOrFail($id);
      $data['post'] = $post;
      $data['type'] = $post->type;
      $data['title'] = "Edit ".ucfirst($data['type']);
      $data['action'] = route('admin.post.update', ['id' => $id]);
      return view('backend.post_form', $data);
    }

    public function post_update(Request $request, $id)
    {
      $post = Post::findOrFail($id);
      $post->title = $request->title;
      $post->slug = \Str::slug($post->title, '-');
      $post->description = $request->desc;
      if($request->hasFile('image')){
        $path = $request->file('image')->store('images/news','public');
        $post->image = 'storage/'.$path;
      }
      $post->save();
      return redirect('admin/'.$post->type)->with('success', 'Update Success');
    }

    public function post_destroy(Request $request, $id)
    {
      $post = Post::findOrFail($id);
      $type = $post->type;
      $post->delete();
      return redirect('admin/'.$type)->with('success', 'Delete Success');
    }

    public function setting()
    {
        return view('backend.setting');
    }

    public function setting_update(Request $request)
    {
      $password = $request->password;
      $confirmation = $request->password_confirmation;
      if($password != $confirmation){
        return redirect()->back()->with('error', 'Password and Confirmation did not match');
      }else{
        $user = Auth::user();
        $user->password = bcrypt($password);
        $user->save();
        return redirect()->back()->with('success', 'Password updated successfully');
      }
    }

    public function contactlog()
    {
        $data['logs'] = ContactLog::orderBy('created_at', 'desc')->paginate(20);
        return view('backend.contact', $data);
    }

    public function faq()
    {
        $data['faqs'] = Faq::orderBy('id')->get();
        return view('backend.faq', $data);
    }

    public function faq_new()
    {
        $data['title'] = "New FAQ";
        $data['action'] = route('admin.faq.create');
        return view('backend.faq_form', $data);
    }

    public function faq_create(Request $request)
    {
        $faq = new Faq;
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->save();
        return redirect('admin/faq')->with('success', 'Insert Success');
    }

    public function faq_edit(Request $request, $id)
    {
        $data['faq'] = Faq::findOrFail($id);
        $data['title'] = "Edit FAQ";
        $data['action'] = route('admin.faq.update', ['id' => $id]);
        return view('backend.faq_form', $data);
    }

    public function faq_update(Request $request, $id)
    {
      $faq = Faq::findOrFail($id);
      $faq->title = $request->title;
      $faq->description = $request->description;
      $faq->save();
      return redirect('admin/faq')->with('success', 'Update Success');
    }

    public function faq_destroy(Request $request, $id)
    {
      $faq = Faq::findOrFail($id);
      $faq->delete();
      return redirect('admin/faq')->with('success', 'Delete Success');
    }

    public function content()
    {
        $data['contents'] = Content::all();
        $data['textarea_filter'] = ['company.description', 'contact.address'];
        return view('backend.content_form', $data);
    }

    public function doContent(Request $request)
    {
        foreach ($request->key as $key => $val) {
          $content = Content::where('key', $val)->first();
          if(!empty($content)){
            $content->value = $request->value[$key];
            $content->save();
          }
        }
        return redirect()->back()->with('success', 'Update Success');
    }

}
