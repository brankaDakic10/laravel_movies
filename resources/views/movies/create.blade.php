@extends('layouts.master')

@section('title')
Create new movie
@endsection

@section('content')
<div class="col-sm-8 blog-main">
<h2>Create new movie</h2>


          <!-- /movies -->
<form action="" method="POST">

 <div class="form-group">
 <label for="title">Film title:</label>
 <input type="text" id="title" name="title" class="form-control">

 </div>
 <div class="form-group">
 <label for="body">Storyline</label>
 
 <textarea class="form-control" id="body"  name="body" ></textarea>
 
 </div>
 
 <div class="form-group">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>


</form>
</div>
@endsection