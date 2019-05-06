@extends('layouts.app')

@section('title')
Contact Log
@endsection

@section('content')
<a href="{{route('admin.contactlog.download')}}" class="btn btn-primary pull-right my-3"> Download List</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    @foreach($logs as $log)
    <tr>
      <th scope="row">{{date("d F Y, H:i", strtotime($log->created_at))}}</th>
      <td>{{$log->name}}</td>
      <td>{{$log->phone}}</td>
      <td>{{$log->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="pull-right">
  {{ $logs->links() }}
</div>
@endsection
