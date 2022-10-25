<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('inscription');
    }

    public function store(Request $request)
   {
        $usersData = $request->validate([
            "name" => ["required", "string", "min:2", "max:255"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "string", "min:8", "max:30", "confirmed"]
        ]);

        $users = User::create([
            "name" => $usersData["name"],
            "email" => $usersData["email"],
            "password" => bcrypt($usersData["password"])
        ]);

        return view('logincreated');
   }

   public function login()
    {
        return view('login');
    }

   public function access(Request $request)
   {
    $usersData = $request->validate([
        "email" => ["required", "email"],
        "password" => ["required", "string", "min:8", "max:30"]
    ]);

    $user = User::where("email", $usersData["email"])->first();

    if(!$user)
    return "Aucun utilisateur trouvé avec l'adresse mail suivante $usersData[email]";

    if(!Hash::check($usersData["password"], $user->password))
    return "Mot de passe incorect";

    $token = $user->createToken('TokenSecur')->plainTextToken;

    return view('account');

   }
}
