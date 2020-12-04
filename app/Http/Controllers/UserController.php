<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name' =>'madhav',
            'email'=>'mwadhwa2706@gmail.com'
        ];

        return response()->json($data);
    }


    public function show($id=null)
    {
          $data = User::where('id',$id)->get();

          return response()->json($data);
    }
}
