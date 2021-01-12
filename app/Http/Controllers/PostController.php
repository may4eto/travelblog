<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
 
    public function index() {
        //leggo tutti i dati della tabella posts
        //Abbiamo la tabella e abbiamo il modello
        //dobbiamo interrogarlo
        $posts=Post::all()->take(6);
        return view('posts.index', compact('posts'));   
    }

    public function show(Post $post) {
        //per poter vedere i dati di un singolo post
        //$post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function create() {

        //qui mostro la vista con il form da riempire
       
        return view('posts.create');
    }

    public function store(Request $request) {

        //qui salvo il dato nel database

        //dd($request->all());

        $post=new Post();
        $post->title=$request->input('title');
        $post->name=$request->input('name');
        $post->surname=$request->input('surname');
        $post->description=$request->input('description');
        $post->save();
        $msg = 'Il tuo post è stato pubblicato! <a href="' . route('posts.show',compact('post')) . '"> Visualizza il tuo post.</a>';
        return redirect()->back()->withSuccess($msg);
        }

    public function edit(Post $post) {
        //prendiamo il dato che ci arriva e lo mostriamo in una form
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request) {
        //dd($request->all());
        
            $post->title = $request->input('title');
            $post->description = $request->input('description');
            $post->save();

        return redirect()->back()->with('message','Il tuo post è stato aggiornato!');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('message','Il tuo post è stato eliminato!');
    }
}
