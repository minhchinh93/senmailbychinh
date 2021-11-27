@extends('client.show')

@section('content')
<div class="container">
    <form class="form-control" method="POST" action="{{ route('login.changepasss',[$email]) }}">
        @csrf
        <label>nhap pass moi</label>
        <input class="form-control mt-3" name="password">
        <button type="submit" class="btn btn-success mt-3" value="change password">doi passs</button>
    </form>
</div>

@endsection
