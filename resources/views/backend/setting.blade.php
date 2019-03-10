@extends('layouts.app')

@section('title')
Change Password
@endsection

@section('content')
<form action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">New Password</label>
    <input class="form-control" name="password" type="password" placeholder="New Password" required>
  </div>
  <div class="form-group">
    <label for="title">New Password Confirmation</label>
    <input class="form-control" name="password_confirmation" type="password" placeholder="New Password Confirmation" required>
  </div>
  <button type="submit" class="btn btn-primary pull-right">Submit</button>
</form>
@endsection
