@extends('layouts.layout')

@section('content')

<div>
    <a href="{{ action('ShopController@create') }}">
        <button type="button" class="btn btn-primary">Create</button>
    </a>
</div>
<br />
<table class="table table-striped">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Address</td>
        <td>Actions</td>
    </tr>

    @php($i = 1)

    @foreach ($shops as $shop)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $shop->name }}</td>
            <td>{{ $shop->address }}</td>
            <td>
                <a href="{{ action('ShopController@edit', ['shop' => $shop]) }}">
                    <button class="btn btn-warning">Edit</button>
                </a>

                <a href="javascript:void(0)" onclick="document.getElementById('shop-delete-{{ $shop->id }}').submit()">
                    <button class="btn btn-danger">Delete</button>
                </a>

                <form method="POST" id="post-delete-{{ $shop->id }}" action="{{ action('ShopController@destroy', ['shop'=>$shop]) }}">
                    @csrf
                    @method('DELETE')
                </form>
            </td>
        </tr>
        @php($i++)
    @endforeach
</table>

<style>
    a {
        text-decoration: none;
    }
</style>

@endsection