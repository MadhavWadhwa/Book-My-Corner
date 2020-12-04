<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
 use App\Event;
 use App\EventCart;
 use DB;
 use Auth;
 $var = 0;

class EventController extends Controller
{


    public function store(Request $request)
    {

        $event = new Event();
        if(!$request->hasFile('image')){
            return redirect()->back()->withErrors('Cannot add the event');
        }
        else{
            $cover=$request->file('image');
            $extension=$cover->getClientOriginalExtension();
            Storage::disk('public')->put($cover->getFileName().'.'.$extension , File::get($cover));
            
    
        $event->fill([
            'name'=>$request->name,
            'type'=>$request->type,
            'date'=>$request->date,
            'description'=>$request->description,
             'price'=>$request->price,
             'time'=>$request->time,
            'mime'=>$cover->getClientMimeType(),
            'original_filename'=>$cover->getClientOriginalName(),
            'filename'=>$cover->getFileName().'.'.$extension
        ]);
        }
    



        if(!$event->save()){
            return redirect()->back()->withErrors($event->getErrors());
        }
        Event::paginate(15);
       
        return redirect()->back()->withSuccess("Event Added Successfully"); 
    }

    public function show($id=null)
    {
        $data =  Event::where('type','Comedy')->LIMIT(3)->get();
        $motivation= Event::where('type','Motivation')->LIMIT(3)->get();
        $singing = Event::where('type', 'Singing')->LIMIT(3)->get();
        $kids = Event::where('type', 'Kids')->LIMIT(3)->get();
        $sports = Event::where('type','Sports')->LIMIT(3)->get();
        $from = date('2020-07-20');
        $to = date('2020-08-20');
        $feature= Event::whereBetween('date', [$from, $to])->LIMIT(4)->get();
        return view('index',['data'=>$data,
                              'motivation'=>$motivation,
                              'singing'=>$singing,
                              'kids'=>$kids,
                              'sports'=>$sports,
                              'feature'=>$feature
                              
        ]);
    }

    public function index($id=null)
    {
        $num = Event::where('id',$id)->get();

        return view('event',['num'=>$num]);
    }


public function spec($type=null)
{
    $type = Event::where('type',$type)->get();
    return view('specific',['type'=>$type]);
}

public function ticket($name=null)
{
    
            $event=new Event();
            $tick = Event::where('name',$name)->get();
            return view('ticket',['tick'=>$tick]);
}

public function addtocart(Request $request)
{
    if(empty(Auth::user()->id))
    {
        return redirect()->back()->withErrors('Please Login Before adding to your cart');
    }

    $count=EventCart::where('name',$request->name
    )->where('user_id', Auth::user()->id)->count();
        
    
    if($count>0)
    {
        return redirect()->back()->withErrors('Event already exists in the cart');
    }
        $cart = new EventCart();

    $cart->fill([
        'name'=>$request->name,
        'date'=>$request->date,
        'location'=>$request->location,
        'no_of_tickets'=>$request->no_of_tickets,
         'price'=>$request->price,
         'user_id'=>Auth::user()->id
    ]);

    $cart->save();

    return redirect('/cart');
}
    

public function cart(Request $request)
{
    $usercart= EventCart::where('user_id',Auth::user()->id)->orderBy('date','asc')->get();
    return view('cart',['usercart'=>$usercart]);
}
public function delete($id=null)
{
    EventCart::where('id',$id)->delete();
    return redirect('/cart');   
}
public function popular()
{
    $from = date('2020-08-20');
    $to = date('2020-09-10');
    $feature= Event::whereBetween('date', [$from, $to])->LIMIT(12)->get();
    return view('popular',['feature'=>$feature]);
}
public function free()
{
    $feature= Event::where('price' , 0)->get();
    return view('free',['feature'=>$feature]);
}

public function thank()
{
    EventCart::where('user_id',Auth::user()->id)->delete();
    return view('thank');
}

public function search(Request $request)
{
      $type=$request->type;

      if($type=="comedy" || $type=="Comedy"){
      $type = Event::where('type',"Comedy")->get();
    return view('specific',['type'=>$type]);
      }
      if($type=="motivation" || $type=="Motivation"){
        $type = Event::where('type',"Motivation")->get();
      return view('specific',['type'=>$type]);
        }
        if($type=="singing" || $type=="Singing"){
            $type = Event::where('type',"Singing")->get();
          return view('specific',['type'=>$type]);
            }
            if($type=="kids" || $type=="Kids"){
                $type = Event::where('type',"Kids")->get();
              return view('specific',['type'=>$type]);
                }
                if($type=="sports" || $type=="Sports"){
                    $type = Event::where('type',"Sports")->get();
                  return view('specific',['type'=>$type]);
                    }

}

}
