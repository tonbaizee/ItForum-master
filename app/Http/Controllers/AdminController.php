<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index()
     {

         $user = User::find(Auth::id());
         if($user->ifAdmin == 1)
         {
             return view('admin.homeAdmin');
         }
         else
             {
                 echo "Login as admin!";
             }

     }
     public function addEvent()
     {
         $user = User::find(Auth::id());
         if($user->ifAdmin == 1)
         {
             return view('admin.addEvent');
         }
         else
         {
             echo "Login as admin!";
         }
     }
}
