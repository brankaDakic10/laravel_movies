@extends('layouts.master')

@section('title')
Create new movie
@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h2>Create new movie</h2>


          <!-- -->
<form action="/movies" method="POST">
{{csrf_field()}}
 <div class="form-group">
 <label for="title">Movie title:</label>
 <input type="text" id="title" name="title" class="form-control">

 </div>
 <div class="form-group">
 <label for="genre">Movie genre:</label>
 <input type="text" id="genre" name="genre" class="form-control">

 </div>

 <div class="form-group">
 <label for="published_year">Published_year:</label>
 <input type="number" id="published_year" name="published_year" class="form-control">

 </div>
 <div class="form-group">
 <label for="storyline">Storyline</label>
 
 <textarea class="form-control" id="storyline"  name="storyline" ></textarea>
 
 </div>
 
 <div class="form-group">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>


</form>
</div>
@endsection