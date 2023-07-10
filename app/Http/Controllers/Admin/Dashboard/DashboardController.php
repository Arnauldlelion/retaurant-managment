<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
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

    

}
