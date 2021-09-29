<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Gate;
class storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Store::paginate(3);
    return view('stores.index',compact('posts'))->with("i",(request()->input("page",1)*3)-1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("stores.create");

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
         $request->validate([
       "title"=>"required|min:5|max:25",
       "body"=>"required",
        "thumbnail"=>"required|image|mimes:jpg,png,jpeg,gif,svg|max:2048"

        ]);
      if($request->hasFile('thumbnail')&& $request->thumbnail->isValid()){

        $extension=$request->thumbnail->extension();

        $filename=time().'_.'.$extension;

        $request->thumbnail->move(public_path('images'),$filename);
      }
        $store =new Store;
       $result= $store->save([
            $store->title=$request->title,
            $store->body=$request->body,
         $store->image=$filename,
            $store->user_id=\Auth::user()->id,
        ]);
        if($result){
           return redirect('stores');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //    $editAblePost=Post::find($id);
       // if(Gate::allows('edit-post',$editAblePost)){
       // return view('posts.edit',compact('editAblePost'));
        //
        $editAblePost = Store::find($id);

        if(Gate::allows('edit-post',$editAblePost)){
        return view('stores.edit',compact('editAblePost'));
      }

       // return view('stores.edit',compact('editAblePost'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
       //      $id=$request->input('id');

       // $request->validate([
       //  "title"=>"required|min:5|max:25",
       //  "body"=>"required",
        
 
       //   ]);

       // $previousPost=Post::find($id);
        
       // $previousPost->title=$request->title;
       // $previousPost->body=$request->body;
      
       // if($result=$previousPost->update()){
           
       //  if($result){
       //      return redirect('posts');
       //   }
       // }

        $id = $request->input('id');
        
        $request->validate([

          "title"=>"required|min:5|max:25",
          "body"=>"required"

        ]);

        $storePost = Store::find($id);
        $storePost->title=$request->title;
        $storePost->body = $request->body;
        if($result = $storePost->update()){

            return redirect('stores');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         // $deletedPost=Post::find($id);

         //  $result=$deletedPost->delete();
         //  if($result){
         //    return redirect('posts');
         // }

        $deleteStore = Store::find($id);

        $result = $deleteStore->delete();

        if($result){
            return redirect('stores');
        }
    }

      public function search(Request $request){
      $task=Store::where('title','LIKE',"%$request->term%")->pluck('title');
      if(empty($task->all()))
      return ['No Related Record'];
      else
      return $task;
  }



}
