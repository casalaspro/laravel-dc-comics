@extends('layouts.app')

@section('content')

<main>
  <div class="container">
    <div class="row">

      @foreach ($comics as $comic)
      <div class="col-3">
        <div class="card card-comic">
          <img src="{{ $comic->thumb }}" class="card-img-top comic-cover" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('comics.edit', $comic) }}">Edit</a>
            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-link link-danger">Delete</button>
            </form>
            <a href="{{ route('comics.show', $comic ) }}" class="btn btn-primary">More Infos</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</main>