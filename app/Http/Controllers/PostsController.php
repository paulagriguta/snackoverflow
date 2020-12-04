<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function showAll()
    {    
        return view(
            'posts',
            ['posts' => $posts = Post::where('verificat', '=', 1)->orderBy('data', 'desc')->get()]
        );
    }
    public function show($id)
    {
        return view(
            'post',
            ['post' => $post = Post::where('id', $id)->firstOrFail()]
        );
    }
    public function create(Request $req)
    {
//get logged in user data 
        $user = auth()->user();
        $id=$user->id;

//get data from blade form
        $current_date = date('Y-m-d H:i:s');
        $titlu=$req['titlu'];
        $descriere=$req['descriere'];
        $categorie=$req['categorie'];

       Post::create([
            'titlu' => $titlu,
            'descriere' => $descriere,
            'data' => $current_date,
            'idCategorie' => $categorie, 
            'idUtilizator' =>  $id,
            'verificat' =>'0',
           
        ]);
        return redirect('/posts');
 
    }
    public function show_categories()
    {
        return view(
            'new-post',
            ['categories' => $categories = Category::All()]
        );
    }
}
