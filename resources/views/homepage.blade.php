@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    Users
    <p>

    </p>
    <a href="/viewemployees" type="submit" class="btn btn-primary">View Employees</a>
    <a href="/createemp" type="submit" class="btn btn-primary">Create Employee</a>
    <p>
    
    </p>
    <a href="/viewcustomers" type="submit" class="btn btn-primary">View Customers</a>
    <a href="/createcust" type="submit" class="btn btn-primary">Create Customer</a>
    <p>
    
    </p>
    Inventory Management
    <p>
    
    </p>
    <a href="/createemp" type="submit" class="btn btn-primary">View Inventory</a>
    <a href="/createemp" type="submit" class="btn btn-primary">Add Item</a>




    </div>
</div>
@endsection