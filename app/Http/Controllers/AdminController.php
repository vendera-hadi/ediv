<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Newsletter;
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
        return view('home');
    }

    public function event()
    {
        return view('home');
    }

    public function article()
    {
        return view('home');
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
}