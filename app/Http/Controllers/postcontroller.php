<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;



class postcontroller extends Controller
{
    public function Index(){

        

        return view('home.insert');
    }

    // new method

    public function Home(){

        $obj = DB::table('posts')->get();

        return view('home.home')->with('data',$obj);

    }  // new method

    public function Store(Request $request){

      
        $obj= new Post();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->title = $request->title;
        $obj->author = $request->author;
        $obj->image = $request->image;

        $obj->save();
        
        return redirect()->route('home.home');

    }

    // new method delete


    public function Delete($id){

        $del = DB::table('posts')->where('id',$id)->delete();

        return redirect()->route('home.home');
    }


}
