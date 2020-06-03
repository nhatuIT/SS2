@extends('layouts.layout')

@section('content')

<div class = "container">
  
    <form method="POST" action="{{ action('ShopController@store') }}">
      @include('layouts.form')
     
      <button type="submit" class="btn btn-primary">ADD</button> 
    </form>  
    
</div>
    
    

@endsection