@extends('client.show')

@section('content')
<div class="container">
    <form class="form-control" method="POST" action="{{ route('login.changepasss',[$email]) }}">
        @csrf
        <label>nhap password moi</label>
        <input class="form-control" name="password">
        <input type="submit" class="form-control" value="change password">
    </form>
</div>

@endsection
