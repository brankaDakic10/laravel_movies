<!-- Kreirati view fajl
Prikazati title i kratak teaser (storyline) za svaki film
Klik na title vodi na single movie page -->
@extends('layouts.master')

@section ('title')
 
Movies 
@endsection

@section ('content')

        <h2>Movies</h2>

        @foreach($movies as $movie)
          <div class="blog-post">
            <h3 class="blog-post-title"><a href="{{route('single-movie',['id'=>$movie->id])}}">{{$movie->title}}</a></h3>
            
             <p>{{$movie->storyline}}</p>
          </div>
          @endforeach


@endsection