<label for="name">name:</label>
<div class="form-group pb-2" >
           <input type="text" name="name"  value="{{old('name') ?? $customer->name}} " class="form-control">
</div>

<div>  {{$errors->first('name')}} </div>


<label for="email">email:</label>
<div class="form-group pb-2" >
        <input type="text" name="email"  value="{{old('email') ?? $customer->email}}" class="form-control">
</div>

<div>  {{$errors->first('email') }} </div>


        <div class="form-group">

                <select name="active" id="active" class="form-control">
                                <label for="active">status</label>
                                <option value="" disabled> Selcet customers status</option>

                                @foreach ($customer->activeOption() as $activeOptionkey => $activeOptionValue)
                                    
                                <option value="{{$activeOptionkey}}" {{$customer->active == $activeOptionValue ? 'selected' :'' }}>

                                                {{$activeOptionValue}}
                                         </option>
                                @endforeach
                               
                                
                </select>
        </div>


        <div class="form-group">

                <select name="company_id" id="company_id" class="form-control">
                                @foreach ($companies as $company)
                                <option value="{{$company->id}}" {{$company->id == $customer->id ? 'selected' : ''}} >
                                        {{$company->name}} 
                                </option>    
                                @endforeach
                               
                </select>
        </div>
        @csrf