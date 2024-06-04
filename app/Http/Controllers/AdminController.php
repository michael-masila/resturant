<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $user = User::all();
        return view('admin.users',compact("user"));
       
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function food()
    {
        return view('admin.foods');
    }

    public function post_food(Request $request) /*this for requesting the data from post_page form*/
    //The method accepts a parameter named $request of type Request
    {

        






       $post=new Food; /*Post is the model name , Instantiate the Model using new keyword*/
       $post->title = $request->title; /* the first post_title is what 
       is in the db posts, while the second one matches the name in the post_page blade form*/
       // Assign the value of the 'post_content' field from the request to the 'post_content' attribute of the Post model
       $post->price = $request->price; 
     
      


      

       /* the below 3 lines are responsible for keeping the image in a public folder*/
        $image = $request->image;

        if($image)/*the if condition is responsible for handling error that can occur when you submit without uploading an image
        without it an error will occur*/

        {
            $imagename = time() .'.'.$image->getClientOriginalExtension();
            $request->image->move('postimage',$imagename);/* this will create a folder name postimage in public folder where the uploaded image will be stored*/
    
    
            $post->image = $imagename;  /*responsible for posting the image*/

            
        }
       

        $post->description = $request->description; 

       $post->save(); 
       return redirect()->back();
    }

    public function showfood()
    {
        $showfood = Food::all();
        return view('admin.showfood',compact('showfood'));

    }
    public function item_delete($id)
    {
        $showfood = Food:: find($id);
         $showfood->delete();
        return redirect()->back();

        /*if ($showfood) {
            // Delete the item
            $showfood->delete();
            return redirect()->back()->with('message', 'Item deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }*/  

    }

    public function reservation(Request $request)
    {
        $reserve = new reservation;

        $reserve->name = $request->name; 
        $reserve->email = $request->email; 
        $reserve->phone = $request->phone; 
        $reserve->no_guests = $request->guests; 
        $reserve->date = $request->date; 
        $reserve->time = $request->time; 
        $reserve->message = $request->message; 
        
        $reserve->save(); 
       return redirect()->back();
    }
    public function showreservation()
    {
        $reserve = reservation::all();
        return view('admin.reservation', compact('reserve'));
    }

 

}
