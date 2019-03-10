@extends('layouts.app')

@section('title')
Sliders
@endsection

@section('content')
<h1>Home Page Slider</h1>
<p>* Max 5 sliders</p>
@if($home_sliders->count() <= 5)
<a href="{{route('admin.slider.new', ['type' => 'home'])}}" class="btn btn-primary pull-right my-3"> Add New Home Slider</a>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th width="30" scope="col">#</th>
      <th width="342" scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th width="60"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($home_sliders as $key => $slider)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td><img src="{{asset($slider->path)}}" width="300" class="img-fluid" alt=""></td>
        <td>{{$slider->title ? $slider->title : "-"}}</td>
        <td>{{$slider->desc ? Str::limit($slider->desc, 100) : "-"}}</td>
        <td>
          <a href="{{route('admin.slider.edit', ['id' => $slider->id])}}" class="btn"><i class="fa fa-pencil" title="Edit"></i></a>
          <form action="{{route('admin.slider.destroy', ['id' => $slider->id])}}" method="post">
            @csrf
            <button class="btn link" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash" title="Remove"></i></a>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

<h1>Company Page Slider</h1>
<p>* Max 5 sliders</p>
@if($company_sliders->count() <= 5)
<a href="{{route('admin.slider.new', ['type' => 'company'])}}" class="btn btn-primary pull-right my-3"> Add New Company Slider</a>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th width="30" scope="col">#</th>
      <th width="342" scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th width="60"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($company_sliders as $key => $slider)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td><img src="{{asset($slider->path)}}" width="300" class="img-fluid" alt=""></td>
        <td>{{$slider->title ? $slider->title : "-"}}</td>
        <td>{{$slider->desc ? Str::limit($slider->desc, 100) : "-"}}</td>
        <td>
          <a href="{{route('admin.slider.edit', ['id' => $slider->id])}}" class="btn"><i class="fa fa-pencil" title="Edit"></i></a>
          <form action="{{route('admin.slider.destroy', ['id' => $slider->id])}}" method="post">
            @csrf
            <button class="btn link" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash" title="Remove"></i></a>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
