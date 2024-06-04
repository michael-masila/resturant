<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()//function for displaying the views depending on the logged user
    {
        if (Auth::id())
        {
            //Add this $showfood here as a way of enabling the logged in user to have a view of the uploaded food items

            $showfood= Food::all();
            $usertype=Auth()->user()->usertype;
            
            if($usertype=='user')
            {
                return view('home.homepage',compact('showfood'));//the campact will enable the logged in user to view the food items while at the route 'home'
            }

            else if ($usertype=='admin')
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
       
    }

    public function homepage()//this is fuction for calling route view
    {
        $showfood = Food::all();
        return view('home.homepage', compact('showfood'));
    }

}
