<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastWishlistController extends Controller
{
    public function store(Request $request)
    {
    $wishlist = new PastWishlist();

         $wishlist->fill([
             'user_id'=>Auth::user()->id,
             'event_id'=>$request->event_id
         ]);

         $wishlist->save();
             
        }
}
