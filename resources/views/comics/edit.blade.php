@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <p>comics.edit</p>
      <h2 class="fs-2">Modify Comic</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.update', $comic) }}" method="POST">


        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        {{-- Cross Site Request Forgering --}}
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
          <label for="sale_date">Sale Date</label>
          <input type="date" id="date" name="sale_date" min="1890-01-01" max="" value="{{ $comic->sale_date }}"/>
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="http://..." value="{{ $comic->series }}">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="..." value="{{ $comic->type }}">
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control" id="artists" placeholder="Artists names" value="{{ $comic->artists }}">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="price in $" value="{{ $comic->price }}">
        </div>

        <div class="mb-3">
          <label for="writers" class="form-label">Writers</label>
          <input type="text" name="writers" class="form-control" id="writers" placeholder="Writers names" value="{{ $comic->writers }}">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description">{{ $comic->description }}"</textarea>
        </div>

        <button class="btn btn-primary">Update</button>
      </form>
    </div>
  </section>
</main>

@endsection