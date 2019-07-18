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

                <label for="name">name:</label>
                <div class="form-group pb-2" >
                           <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                </div>
                
              <div>  {{$errors->first('name')}} </div>


              <label for="email">email:</label>
              <div class="form-group pb-2" >
                        <input type="text" name="email"  value="{{old('email')}}" class="form-control">
             </div>
             
             <div>  {{$errors->first('email') }} </div>


                        <div class="form-group">

                                <select name="active" id="active" class="form-control">
                                                <label for="active">status</label>
                                                <option value="" disabled> Selcet customers status</option>
                                                <option value="1">active</option>
                                                <option value="0">Inactive</option>
                                </select>
                        </div>


                        <div class="form-group">

                                <select name="company_id" id="company_id" class="form-control">
                                                @foreach ($companies as $company)
                                                <option value="{{$company->id}}">{{$company->name}} </option>    
                                                @endforeach
                                               
                                </select>
                        </div>


                <button type="submit" class="btn btn-primary">ADD Customers</button>

                @csrf

</form>
        </div>
</div>





        
@endsection