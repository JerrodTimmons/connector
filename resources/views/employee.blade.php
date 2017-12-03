@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createmployee" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="idEmployee">
                <input type="text" class="form-control" name="first">
                <input type="text" class="form-control" name="last">
                <input type="text" class="form-control" name="phone">
                <input type="text" class="form-control" name="address">
                <input type="text" class="form-control" name="dob">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection