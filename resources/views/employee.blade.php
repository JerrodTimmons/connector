@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createmployee" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection