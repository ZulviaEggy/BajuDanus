<?php

namespace App\Http\Controllers;
use App\Posts;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){
    $post = Posts::paginate(4);
    return view('post.index',compact('post'));

  }

  public function tabel(){
    $post = Posts::paginate(4);
    return view('tabel',compact('post'));

  }
  public function table(){
    $post = Posts::paginate(4);
    return view('table',compact('post'));

  }

  public function kategori(){
    $post = Posts::paginate(4);
    return view('kategori',compact('post'));

  }

  public function addPost(Request $request){
    $rules = array(
      'title' => 'required',
      'body' => 'required',
    );
  $validator = Validator::make ( Input::all(), $rules);
  if ($validator->fails())
  return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

  else {
    $post = new Posts;
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    return response()->json($post);
  }
}

public function editPost(request $request){
$post = Posts::find ($request->id);
$post->title = $request->title;
$post->body = $request->body;
$post->save();
return response()->json($post);
}

public function deletePost(request $request){
$post = Posts::find ($request->id)->delete();
return response()->json();
}

public function create()
    {
        return view('user');
    }
}
