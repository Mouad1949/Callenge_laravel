<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user = User::find($id);
        // if($user->id == $id){
        //   $post = Post::all();
        //   return $post;
        // }

        $user = User::with(['profile' , 'posts' , 'posts.tags'])->get();
        return $user;

        
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create([
            "name" => $request->name,
            "email" =>$request->email,
            "password" =>$request->password
        ]);
        $profile = $user->profile()->create([
          "bio"=>$request->bio,
          "avatar"=>$request->avatar
        ]);

        return $profile;
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function register(Request $request){
      $user=User::create([
        "name"=>$request->name,
        "email"=>$request->email,
        "role"=>$request->role,
        "password"=>Hash::make($request->password)
      ]);
      return response()->json([
        "messsage"=>"register user successfuly",
        "user"=>$user
      ]);
    }

    public function login(Request $request){
      $request->validate([
        "email"=>"required|string|email",
        "password"=>"required|string"
      ]);
      if(!Auth::attempt($request->only('email','password')))
        return response()->json([
        "messsage"=>"invalid login",
      ]);

      $user = User::where('email',$request->email)->firstOrFail();
      $token = $user->createToken('auth_Token')->plainTextToken;
      return response()->json([
        "messsage"=>"Login successfuly",
        "User"=>$user,
        'Token'=>$token
      ]);
    }

    public function logout(Request $request){
      $request->user()->tokens()->delete();
      
      return response()->json([
        "messsage"=>"logout successfuly"]);
    }




























    






}
