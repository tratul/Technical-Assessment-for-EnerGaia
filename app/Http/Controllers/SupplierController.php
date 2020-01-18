<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class SupplierController extends Controller
{
    public function index(Request $request){

    	if($request->session()->has('logged')){
    		$products = DB::table('products')
                        ->get();
    		return view('supplier.index',compact('products'));
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
    	return view('supplier.show')->with('product', $product);
    }
    public function create(){
        if(session('logged') == null){
           return redirect()->route('login.index');
        }

        return view('supplier.create');
    }

    public function store(Request $request){
        if(session('logged') == null){
           return redirect()->route('login.index');
        }

        
        $product = new Product();
        $product->name             = $request->name;
        $product->quantity           = $request->quantity;
        $product->price           = $request->price;

        $product->save();
        return redirect()->route('supplier.index');
    }
    public function edit($id){
        if(session('logged') == null){
                   return redirect()->route('login.index');
        }

        $product = Product::find($id);
        return view('supplier.edit')->with('product', $product);
    }

    public function update(Request $request, $id){
    	
        $product = Product::find($request->id);
        $product->name           = $request->ProductName;
        $product->quantity           = $request->quantity;
        $product->price           = $request->price;
        $product->save();

        return redirect()->route('supplier.index');
    }

    public function delete(Request $request, $id){

        $product= Product::find($id);

        //dd($product);
        return view('supplier.delete')->with('product', $product);
    }

    public function destroy(Request $request, $id){

        //echo $request->accId;
        Product::destroy($request->id);
        return redirect()->route('supplier.index');
    }
}
