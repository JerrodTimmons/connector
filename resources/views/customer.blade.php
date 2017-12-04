@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createcustomer" method="post">
            <div class="form-group">
                Customer ID
                <input type="text" class="form-control" name="idCustomer">
                <p>

                </p>
                First Name
                <input type="text" class="form-control" name="first">
                <p>

                </p>
                Last Name
                <input type="text" class="form-control" name="last">
                <p>

                </p>
                Transaction ID
                <input type="text" class="form-control" name="idTransaction">
                <p>

                </p>
                Reward Points
                <input type="text" class="form-control" name="points">

            </div>
            <button type="submit" class="btn btn-primary">Create Customer</button>
            <a href="/" type="submit" class="btn btn-primary">Back</a>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection