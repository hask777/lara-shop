<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $relative = Product::relative()->get();
        return view('wishlist')->with([
            'relative' => $relative
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success_message', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

        return redirect('/wishlist')->with('success_message', 'Product successful added!');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    /**
     * Add product in to whishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToWishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('wishlistItem')->add($item->id, $item->name, 1, $item->price)
            ->associate('App/Product');

        return redirect()->route('cart.wishlist');
    }
}
