<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;

class UserController extends Controller
{
    public function destroy($id, Request $request)
    {

        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return Redirect::back();
    }
    public function index(Request $request)
    {
        $users = User::all();
    }

    public function create(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return Redirect::back();
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        if ($user) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => ($request->password && strlen($request->password) > 8) ? Hash::make($request->password) : $user->password,

            ]);
        }
    }
}
