@extends('layouts.app')

@section('title')
Newsletter
@endsection

@section('content')
<a href="{{route('admin.newsletter.download')}}" class="btn btn-primary pull-right my-3"> Download List</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th width="30" scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    @foreach($newsletters as $newsletter)
    <tr>
      <th scope="row">{{$newsletter->id}}</th>
      <td>{{$newsletter->email}}</td>
      <td>{{date("d F Y, H:i", strtotime($newsletter->created_at))}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="pull-right">
  {{ $newsletters->links() }}
</div>
@endsection
