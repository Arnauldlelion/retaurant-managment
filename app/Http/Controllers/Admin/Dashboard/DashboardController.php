<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

class DashboardController extends Controller
{

   //
    public function index(){

   return view('admin.dashboard.index');
}
    public function user(){
      $data=user::all(); //retrieves all the data from the "user" table in the database using the "all" method of the "user" model.
      return view('admin.dashboard.users', compact("data")); //The "compact" function is used to pass the retrieved data to the view. In this case, the data is passed with the variable name "data".
    }

    public function deleteuser(){
      $id = request('id');
      $data=user::find($id);
      $data->delete(); 
      return redirect()->back();
    }

    public function foodmenu(){
      return view('admin.dashboard.foodmenu');
    }

    public function upload(Request $request){
     $data = new food; //creates a new food object, which represents a food item in the database.
     $image=$request->image; //retrieves the uploaded image file from the request using the $request->image syntax.
     $imagename =time().'.'.$image->getClientOriginalExtension(); //generates a unique name for the uploaded image file using the current timestamp and the original file extension.
        $request->image->move('foodimage', $imagename); //moves the uploaded file to the foodimage folder using the move method of the $request->image object.
        $data->image=$imagename;
        $data->title=$request->title; // set the values of the $data object's.
        $data->price=$request->price; 
        $data->description=$request->description; 

        $data->save(); // save the $data object to the database using the save method  
        return redirect()->back(); //redirect back to the previous page using the redirect function.

    }


}
