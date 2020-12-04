<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;
use Auth;
use DB;
use Eloquent;
use App\Event;
Use storage;
use App\PastWishlist;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        if(empty(Auth::user()->id))
    {
        return redirect()->back()->withErrors('Please Login Before adding to Wishlist');
    }
        $count=Wishlist::where('event_id',$request->event_id)->
        where('user_id',Auth::user()->id)
    ->count();
        if($count>0)
        {
            return redirect()->back()->withErrors('Event Already Exists in  Wishlist');
        }
         $wishlist = new Wishlist();

         $wishlist->fill([
             'user_id'=>Auth::user()->id,
             'event_id'=>$request->event_id
         ]);

         if(!$wishlist->save()){
             return redirect()->back()->withErrors('Cannot Add to Wishlist');
         }
         return redirect()->back()->withSuccess('Event added to wishlist successfully');
    }


    public function index()
    {
        $allEvents = [];
        $events =  Wishlist::all();
        foreach($events as $event)
        {
            $allEvents[] = Event::find($event->event_id);
        }
        return $allEvents;
    }

    public function index2()
    {
        $allEvents = [];
        $allPasts = [];
        $events =  Wishlist::where('user_id',Auth::user()->id)->get();
        $pasts = PastWishlist::where('user_id',Auth::user()->id)->orderBy('id','desc')->LIMIT(4)->get();
        foreach($events as $event)
        {
            $allEvents[] = Event::find($event->event_id);
        }
        foreach($pasts as $past)
        {
            $allPasts[] = Event::find($past->event_id);
        }
        return view('wishlist',['allEvents'=>$allEvents,
                                'allPasts'=>$allPasts
                            ]);
    }


    public function show(Request $request)
    {
        $events = Wishlist::all();
        $eventshow = Event::find($request->id);
        return $eventshow;
    }

    public function delete($event_id)
    {
     Wishlist::where('event_id',$event_id)->delete();
     $count=PastWishlist::where('event_id',$event_id)->
        where('user_id',Auth::user()->id)
    ->count();
        if($count>0)
        {
            return redirect('/wishlist');
        }
     $wishlist = new PastWishlist();

         $wishlist->fill([
             'user_id'=>Auth::user()->id,
             'event_id'=> $event_id
         ]);
         $wishlist->save();

        return redirect('/wishlist');
    }
    public function deletepast($event_id)
    {
     PastWishlist::where('event_id',$event_id)->delete();
             return redirect('/wishlist');
    }


}
