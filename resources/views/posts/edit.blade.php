@extends('layout')

@section('content')
<form method="post" action="{{ route('myposts.update', $post->id) }}">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="titlu">Titlu</label>
    <input id="titlu" class="form-control" type="text" name="titlu" value="{{$post->titlu}}" required autofocus autocomplete="titlu" />
  </div>
  <div class="form-group">
    <label for="descriere">Descriere</label>
    <textarea class="form-control" id="descriere" rows="5" name="descriere"  required autofocus autocomplete="descriere">{{$post->descriere}}</textarea>
  </div>
  <div class="form-group">
    <label for="categorie">Selectează domeniul articolului</label>
    <select class="form-control" id="categorie" name="categorie">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{ $category->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection