@extends('layouts.app')

@section('title')
FAQ
@endsection

@section('content')
@if($faqs->count() > 1)
<a href="{{route('admin.faq.new')}}" class="btn btn-primary pull-right my-3"> Add New FAQ</a>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Created Time</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($faqs as $faq)
    <tr>
      <th scope="row">{{date("d F Y, H:i", strtotime($faq->created_at))}}</th>
      <td>{{$faq->title}}</td>
      <td>{{$faq->description}}</td>
      <td>
        <a href="{{route('admin.faq.edit', ['id' => $faq->id])}}" class="btn"><i class="fa fa-pencil" title="Edit"></i></a>
        <form action="{{route('admin.faq.destroy', ['id' => $faq->id])}}" method="post">
          @csrf
          <button class="btn link" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash" title="Remove"></i></a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
