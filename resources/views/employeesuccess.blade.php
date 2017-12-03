@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        Employee Created Successfully!
    </div>
    <a href="/createemp" type="submit" class="btn btn-primary">Create Another</a>
    <a href="/" type="submit" class="btn btn-primary">Return Home</a>
</div>
@endsection