@extends('layout')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>

      
        @foreach($posts as $post)
        <tr>
            <td>
               <a href="/posts/{{$post -> id}}"> {{ $post->titlu}} </a>
            </td>
        </tr>
      
        @endforeach
    </tbody>
</table>
@endsection