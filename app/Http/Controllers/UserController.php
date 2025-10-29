<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        return view('users.index',['users' => $users]);
    }

    public function show(User $user){
        return view('users.show',['user' => $user]);
    }

    public function create(){
        return view('users.store');
    }

    public function store(Request $request){
        $input = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'picture' => 'nullable|file|max:2048|mimes:jpg,jpeg,png,gif',
        ]);

        if($request->hasFile('picture') && $input['picture']->isValid()){
            $path = $request->file('picture')->store('pictures', 'public');
            $input['picture'] = $path;
        }

        User::create($input);

        return redirect()->route('usuarios.index');
    }
}
