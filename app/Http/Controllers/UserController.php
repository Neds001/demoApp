<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Hello UserController';
    }

    public function show($id) {
      
        $data=array( 
        "id"=> $id,
        "name"=> "John Doe",
        "age"=> 35,
        "email" => "johndoe@gmail.com"
        );
      //return view('user',['data'=>$data]);
      return view('user', $data);
    }
} 

