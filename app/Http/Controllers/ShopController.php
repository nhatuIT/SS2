<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Rules\ExactlyOneUpperCase;

class ShopController extends Controller
{
    public function index()
    {
        // dd('1');
        $shops = Shop::all();
        
        // if (request()->expectsJson()) {
        //     return response()->json(['shops' => $shops, 'number' => $shops->count()]);
        // }
        return view('shops.index', compact('shops')); 
    }

    public function create()
    {
        $shop = new Shop();
        return view('shops.create', compact('shop'));
    }

    /**
     * Store post
     */
    public function store(Request $request)
    {
        $request-> validate([
            'name'=> 'required',
            'address'=> ['required', 'min:6', new ExactlyOneUpperCase]
        ]);
        Shop::create($request->input());
        // return 
        return redirect()->action('ShopController@index');
    }

    public function edit(Shop $shop)
    {
        return view('shops.edit', compact('shop'));
    }

    public function update(Request $request, Shop $shop)
    {
        $request-> validate([
            'name'=> 'required',
            'address'=> ['required', 'min:6', new ExactlyOneUpperCase]
        ]);
        $shop->update($request->input());
        return redirect()->action('ShopController@index');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->action('ShopController@index');
    }
}