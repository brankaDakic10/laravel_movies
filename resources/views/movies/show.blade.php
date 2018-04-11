@extends('layouts.master')

@section ('title');
        {{$movie->title}} 
@endsection

@section ('content')
<div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h3 class="blog-post-title">Title:{{$movie->title}}</h3>
            <p class="blog-post-meta">Year: {{$movie->published_year}}</p>
            <p class="blog-post-meta">Director: {{$movie->director}}</p>
            <p class="blog-post-meta">Genre: {{$movie->genre}}</p>
            <h4>Storyline:</h4>
            <p> {{$movie->storyline}}</p>
</div><!-- /.blog-post -->
</div>
@endsection