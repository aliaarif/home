<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\User;
use Auth;
use Hash;

class UserController extends Controller
{
	public function login(Request $request){
		//echo json_encode($request->all()); exit;
		$credentials = $request->only('email', 'password');
		if(Auth::attempt($credentials)){
			$token = Str::random(80);
			Auth::user()->api_token = $token;
			Auth::user()->save();
			$role = Auth::user()->roleName();
			return response()->json(['user' => Auth::user(), 'role' => $role], 200);	

			//return response()->json(['user' => Auth::user(), 'role' => $role], 200);	
		}
		return response()->json(['status' => 'Email or password is wrong1!'], 403);	
	}
	
	public function verify(Request $request, $role){
		if($role == Auth::user()->roleName()){
			return response()->json(['status' => 1], 200);
			//return $request->user()->only('name', 'email');		
		}else{
			//return $request->user()->only('name', 'email');	
			return response()->json(['status' => 0], 200);				
		}		
		//return $request->user()->only('name', 'email');	
	}
	
}
