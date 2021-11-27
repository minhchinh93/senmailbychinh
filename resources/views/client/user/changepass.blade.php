@extends('client.show')

@section('content')
<div class="container">
    <form class="form-control" method="POST" action="{{ route('login.changepasss',[$email]) }}">
        @csrf
        <label>nhap password moi</label>
        <input class="form-control" name="password">
        <button type="submit" class="btn btn-success" value="change password">
    </form>
</div>

@endsection
