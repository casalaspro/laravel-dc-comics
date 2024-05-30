@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card card-show">
    <img src="{{ $comic->thumb }}" class="card-img-top comic-cover" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <p><strong>Artist: </strong>{{ $comic->artists }}</p>
      <p><strong>Writers: </strong>{{ $comic->writers }}</p>
      <p class="card-text">{{ $comic->decription }}</p>
      <h4>${{$comic->price}}</h4>
      <a href="{{ route('comics.edit', $comic) }}">Edit</a>
      <a href="#" class="btn btn-primary">Buy</a>
    </div>
  </div>
</div>