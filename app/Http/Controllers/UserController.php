<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request){

    	if($request->session()->has('logged')){
    		$products = DB::table('products')
                        ->get();
    		return view('user.index',compact('products'));
		}else{
			return redirect()->route('login.index');
		}
    }
     public function show($id){

        if(session('logged') == null){
           return redirect()->route('login.index');
        }

    	//$account = Account::find($id);
    	$product = DB::table('products')
    				->where('id', $id)
    				->first();

    	//var_dump($product);
    	return view('user.show')->with('product', $product);
    }
}
