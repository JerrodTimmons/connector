@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createproduct" method="post">
            <div class="form-group">
                Product ID
                <input type="text" class="form-control" name="idProduct">
                <p>

                </p>
                Product Name
                <input type="text" class="form-control" name="name">
                <p>

                </p>
                Vendor
                <input type="text" class="form-control" name="vendor">
                <p>

                </p>
                Price
                <input type="text" class="form-control" name="price">

            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
            <a href="/" type="submit" class="btn btn-primary">Back</a>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection