@extends('client.show')


@section('content')

<div class="container">
    <form class="form-group" method="POST" action="{{ route('login.check') }}">
        @csrf
        <label>nhap mail</label>
        <input class="form-control " name="email">
        <button type="submit" class="form-control mt-2" value="submit">

    </form>
</div>


@endsection

