<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Redirect;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
       return view('management.users.index', compact('users'));
    }
    public function destroy ($id , Request $request){

        $user = User::find($id);
        $user->delete();
        return Redirect::back();
      //dd($user, $request->all());
    }
}