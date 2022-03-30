@extends('layouts.base')

@section('pageTitle, HomePage')

@section('content')
    
    <main>
           <div>
               @foreach ($movies as $movie )
                      <h1>{{$movie->title}}</h1>
                  <div>
                    <p>Original Title: {{$movie->original_title}}</p>
                    <p>Nationality: {{$movie->nationality}}</p>
                    <p>Release Date: {{$movie->date}}</p>
                    <p>Vote: {{$movie->vote}}</p>
                  </div>             
              @endforeach
           </div>
    </main>

@endsection