@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="/createemployee" method="post">
            <div class="form-group">
                Employee ID
                <input type="text" class="form-control" name="idEmployee">
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
                Phone Number
                <input type="text" class="form-control" name="phone">
                <p>
                

                </p>
                Adress
                <input type="text" class="form-control" name="address">
                <p>
                

                </p>
                Date of Birth (format: YYYYMMDD)
                <input type="text" class="form-control" name="dob">
                <p>
                

                </p>

            </div>
            <button type="submit" class="btn btn-primary">Create Employee</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection