<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class MyPostsController extends Controller
{
    //afiseaza toate postarile utilizatorului
    public function index()
    {
        $user = auth()->user();
        $id = $user->id;
        $posts = Post::where('idUtilizator', '=', $id)->orderBy('data', 'desc')->get();

        return view('posts.my-posts',  compact('posts'));
    }
    //pentru view
    public function show($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        return view('posts.show', compact('post'));
    }
    //pentru add task
    public function create()
    {
        return view(
            'posts.new-post',
            ['categories' => $categories = Category::All()]
        );
    }
    // 
    public function store(Request $req)
    {
        //get logged in user data 
        $user = auth()->user();
        $id = $user->id;

        //get data from blade form
        $current_date = date('Y-m-d H:i:s');
        $titlu = $req['titlu'];
        $descriere = $req['descriere'];
        $categorie = $req['categorie'];

        Post::create([
            'titlu' => $titlu,
            'descriere' => $descriere,
            'data' => $current_date,
            'idCategorie' => $categorie,
            'idUtilizator' =>  $id,
            'verificat' => '0',

        ]);
        return redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->firstOrFail();
        $categories = Category::All();
        return view('posts.edit',  ['categories' => $categories, 'post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->firstOrFail();



        Validator::make($request->all(), [
            'titlu' => ['required'],
            'descriere' => ['required'],
        ])->validate();

        $post->update($request->all());
        return redirect()->route('myposts.index');



        // return redirect()->route('myposts.index');
    }
    public function destroy($id)
    {

        $post = Post::where('id', $id)->firstOrFail();
        $post->delete();

        return redirect()->route('myposts.index');
    }
}
