@extends('layout')
@section('title', 'Details for '. $customer->name)
@section('content')
    

    

<div class="row">
        <div class="col-21">
                        <h1>New Customer</h1>
                        <p>
                            
                            <a href="/customers/{{$customer->id}}/edite">Edite</a>
                        </p>
                        
        </div>
</div>



<div class="row">
    <div class="col-21">

        <p><strong>Name</strong> {{$customer->name}} </p>
        <p><strong>Email</strong> {{$customer->email}} </p>
        <p><strong>Company</strong> {{$customer->company->name}} </p>

                    
                    
    </div>
</div>







        
@endsection