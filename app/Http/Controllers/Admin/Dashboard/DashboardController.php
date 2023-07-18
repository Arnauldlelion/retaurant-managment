<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

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
      $data=user::find($id); //t
      $data->delete(); 
      return redirect()->back();
    }

    public function foodmenu(){
      $data = food::all();
      
      return view('admin.dashboard.foodmenu', compact("data"));
    }

    public function deletemenu(){
      $id = request('id'); //The function first retrieves the ID of the record to be deleted from the request object using request('id'). 
      $data=food::find($id); //retrieves the record to be deleted from the food table in the database using the find() method, which finds a record by its id.
      $data->delete(); 
      return redirect()->back();
    }


    public function updateview($id){
      $id = request('id'); 
      $data=food::find($id);
      return view("admin.dashboard.updateview", compact("data"));
    }

    public function update(Request $request, $id){
      $id = request('id'); 
      $data=food::find($id);
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


    

    
    public function reservation(Request $request){
      $data = new reservation; //creates a new reservation object, which represents a reservation order in the database.
      $data->name=$request->name; // set the values of the $data object's.
      $data->email=$request->email; 
      $data->phone=$request->phone; 
      $data->guest=$request->guest; 
      $data->date=$request->date; 
      $data->time=$request->time; 
      $data->message=$request->message; 
 
         $data->save(); // save the $data object to the database using the save method  
         return redirect()->back(); //redirect back to the previous page using the redirect function.
 
     }


     public function viewreservation(){
      $data = reservation::all();
      
      return view('admin.dashboard.viewreservation', compact("data"));
     }


}
