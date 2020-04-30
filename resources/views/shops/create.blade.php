@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ action('ShopController@store') }}">
        @include('layouts.form')
        <div>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>   
@endsection