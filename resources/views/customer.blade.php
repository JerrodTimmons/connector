@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createmployee" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="idCustomer">
                <input type="text" class="form-control" name="first">
                <input type="text" class="form-control" name="last">
                <input type="text" class="form-control" name="idTransaction">
                <input type="text" class="form-control" name="points">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection