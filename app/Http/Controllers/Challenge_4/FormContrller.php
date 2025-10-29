<?php

namespace App\Http\Controllers\Challenge_4;

use App\Http\Controllers\Controller;

use App\Http\Requests\Challenge4\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FormContrller extends Controller
{
    public function showForm(){
      return view('Challenge4.showForm');
    }

    public function handleSubmit(RegisterRequest $request){
      // $requestData = $request->validate([
      //     'name' => 'required|min:3',
      //     'email' => 'required|email|unique:users,email',
      //     'password' => 'required|min:6'
      // ]);
      User::create($request);

      return redirect('/register')->with('success','register is successfuly');
    }
}
