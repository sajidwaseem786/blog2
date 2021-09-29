<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $products = Product::all();

       return view("products.index",compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $created = Product::create([
    
       'title'=>$request->title,
       'body'=>$request->body,
       'user_id'=>1

       ]);

       if($created){
        return redirect('/products/create')->with('success','stored successfylly');
       }else
       return redirect('/products/create')->with('success','stored not success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      $product= Product::find($id);
       return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $product = Product::find($id);

        return view("products.edit",compact('product'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->title=$request->title;
        $product->body=$request->body;
        $product->user_id=1;//\Auth::user()->id;

        $update=$product->save();
        if($update){
            return redirect('/products')->with('success','updated successfully');
        }
        else
            return redirect('/products')->with('success','not updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $res = $product->delete();
        if($res){
            return redirect('/products')->with('success','dell successfully');
        }
        else
            return redirect('/products')->with('success','not dell successfully');

    }
       
    
}
