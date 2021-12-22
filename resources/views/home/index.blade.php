@extends('layouts.default')

@section('page_title', 'Movies')

@section('main_content')
    <div class="container-fluid">
      <div class="container py-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
          @foreach($movies as $movie)
            <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie["title"]}}</h5>
                      <div class="card-text">
                        <h6>Original title: {{$movie["original_title"]}}</h6>
                        <p class="mb-0">Nationality: {{$movie["nationality"]}}</p>
                        <p class="mb-0">Exit date: {{$movie["date"]}}</p>
                        <h1 class="overlay d-flex align-items-center justify-content-center ">Vote: {{$movie["vote"]}}</h1>
                      </div>
                    </div>
                  </div>
            </div>
          @endforeach
        </div>
    </div>

        {{-- @dump($movies[0]->title) --}}
    </div>
@endsection