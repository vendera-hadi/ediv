@extends('layouts.app')

@section('title')
{{$title}}
@endsection

@section('content')
<a href="{{route('admin.post.new', ['type' => $type])}}" class="btn btn-primary pull-right my-3"> Add New</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{date("d F Y, H:i", strtotime($post->created_at))}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description ? Str::limit($post->description, 100) : '-'}}</td>
      
      <td>
        <a href="{{route('admin.post.edit', ['id' => $post->id])}}" class="btn"><i class="fa fa-pencil" title="Edit"></i></a>
        <form action="{{route('admin.post.destroy', ['id' => $post->id])}}" method="post">
          @csrf
          <button class="btn link" onclick="return confirm('Are you sure want to delete this data?')"><i class="fa fa-trash" title="Remove"></i></a>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="pull-right">
  {{ $posts->links() }}
</div>
@endsection
