@extends('layout')
@section('title', 'Edite Detailes for ' , $customer->name)
@section('content')
    

    

<div class="row">
        <div class="col-21">
                        <h1>Edite Detailes for  {{$customer->name}} </h1>
                        
        </div>
</div>


<div class="row">
        <div class="col-12">

        <form method="POST" action="/customers/{{$customer->id}}" >
                @method('PATCH')
              @include('customers.form')

                <button type="submit" class="btn btn-primary">Save Customer</button>

                

</form>
        </div>
</div>





        
@endsection