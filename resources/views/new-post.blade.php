@extends('layout')

@section('content')
<form>
<div class="form-group">
    <label for="formGroupExampleInput">Titlu</label>
    <input type="text" class="form-control" id="formGroupExampleInput" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descriere</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Postează</button>
</form>
@endsection