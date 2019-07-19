@extends('layout')
@section('title', 'Details for '. $customer->name)
@section('content')
    

    

<div class="row">
        <div class="col-21">
                        <h1>Details for {{$customer->name}} </h1>
                        <p>
                            
                            <a href="/customers/{{$customer->id}}/edite">Edite</a>
                        </p>

                        <form  action="/customers/{{$customer->id}}" method="POST" >
                            @method('delete')
                            
                            @csrf

                            <button type="submit" class="btn btn-danger">Delete</button>
                        
                        
                        </form>
                        
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