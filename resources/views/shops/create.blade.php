@extends('layouts.layout')

@section('content')

<div class = "container">
    <form method="POST" action="{{ action('ShopController@store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
          {{-- <small id="helpId" class="text-muted">Help text</small> --}}
        </div>

       <div class="form-group">
         <label for="address">Address</label>
         <input type="text" name="address" id="address" class="form-control" placeholder="" aria-describedby="helpId">
         {{-- <small id="helpId" class="text-muted">Help text</small> --}}
         @error('address')
       <div class= "alert alert-danger">{{$message}}</div>
             
         @enderror
       </div>
       <button type="submit" class="btn btn-primary">ADD</button> 
    </form>  
    
</div>
    
    

@endsection