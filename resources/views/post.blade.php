@extends('layout')

@section('content')

<h1>{{ $post->titlu}} </h1>
<div> {!! $post->descriere !!}</div>
@endsection