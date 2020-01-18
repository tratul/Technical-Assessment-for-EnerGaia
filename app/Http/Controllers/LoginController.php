<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){

    	return view('login.index')->with('email', $request->email);
    }

    public function verify(Request $request){
    	
    	$email = $request->email;
    	$password = $request->input('password');
     
        $user = DB::table('users')
                ->where('email', $email)
                ->where('password', $password)
                ->first();

		if($user != null){

            if($user->user_type == "user")
            {
                $request->session()->put('logged', $user);
            
                return redirect()->route('user.index');
            }
            elseif($user->user_type == "supplier")
            {
                $request->session()->put('logged', $user);
                
    			return redirect()->route('supplier.index');
            }
		}else{
			
			$request->session()->flash('message', 'Invalid username or password');
			return redirect()->route('login.index', ['email'=>$email]);
		}
    	
    }
}
