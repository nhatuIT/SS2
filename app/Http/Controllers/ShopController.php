<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        
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
        $shop->update($request->input());
        return redirect()->action('ShopController@index');
    }

    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->action('ShopController@index');
    }
}