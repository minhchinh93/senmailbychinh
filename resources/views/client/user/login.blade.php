@extends('client.show')

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12">
        <form class="form-group mt-5" method="POST" action="{{ route('login.show') }}">
            @csrf
            <label >tên </label>
            <input class="form-control" name="name">
            <label >email </label>
            <input class="form-control" name="email">
            <label >password </label>
            <input class="form-control" name="password">
            <label >re password </label>
            <input class="form-control" name="repassword">
            <button class="btn btn-success mt-4 " type="submit" name="SUBMIT">DANG KY</button>
            {{-- <input type="submit" value="submit" name="submit"> --}}
        </form>
    </div>
    </div>
    </div>
@endsection
