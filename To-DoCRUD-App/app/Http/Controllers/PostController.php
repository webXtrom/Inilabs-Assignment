<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function ourFilestore(Request $request){

        $validated = $request->validate([
            'pname' => 'required',
            'price' => 'required',
            'pdescription' => 'required',
            'image' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $post = new Post;
        $post->pname = $request->pname;
        $post->price = $request->price;
        $post->pdescription = $request->pdescription;
        $post->image = $imageName;

        $post-> save();

        return redirect()->back()->with('success', 'New Product successfully added!');
       
    }
    public function editData($id){
      $post = Post::findOrFail($id);
        return view('edit', ['ourPost' => $post]);
    }

    public function updateData($id, Request $request){
        
        $validated = $request->validate([
            'pname' => 'required',
            'price' => 'required',
            'pdescription' => 'required',
            'image' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $post = Post::findOrFail($id);
        $post->pname = $request->pname;
        $post->price = $request->price;
        $post->pdescription = $request->pdescription;
        $post->image = $imageName;

        $post-> save();

        return redirect()->route('home')->with('success', 'Product successfully updateed!');
    }
    public function deleteData($id){
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('home')->with('success', 'Product successfully deleted!');

    }
}