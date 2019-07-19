@extends('layout')
@section('title', 'Add New Customer')
@section('content')
    

    

<div class="row">
        <div class="col-21">
                        <h1>New Customer</h1>
                        
        </div>
</div>


<div class="row">
        <div class="col-12">

<form method="POST" action="/customers" >

              @include('customers.form')

                <button type="submit" class="btn btn-primary">ADD Customers</button>

                

</form>
        </div>
</div>





        
@endsection