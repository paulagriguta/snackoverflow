<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function showAll()
    {
       
        return view(
            'posts',
            ['posts' => $posts = Post::all()]
        );
    }
    public function show($id)
    {
        return view(
            'post',
            ['post' => $post = Post::where('id', $id)->firstOrFail()]
        );
    }
    public function create(array $input)
    {
        return Post::create([
            'titlu' => $input['titlu'],
            'descriere' => $input['descriere']
        ]);
    }
}
