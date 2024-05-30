@extends('layouts.app')

@section('content')

<main>
  <section>
    <div class="container">
      <p>comics.create</p>
      <h2 class="fs-2">Add new Comic</h2>
    </div>
    <div class="container">
      <form action="{{ route('comics.store') }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Url Image</label>
          <input type="text" name="image" class="form-control" id="image" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="date">Sale Date</label>
          <input type="date" id="date" name="sale_date" value="" min="1890-01-01" max="" />
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Series</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="...">
        </div>

        <div class="mb-3">
          <label for="artists" class="form-label">Artists</label>
          <input type="text" name="artists" class="form-control" id="artists" placeholder="Artists names">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="price in $">
        </div>

        <div class="mb-3">
          <label for="weigth" class="form-label">Writers</label>
          <input type="text" name="weigth" class="form-control" id="weigth" placeholder="Writers names">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Description</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
        </div>

        <button class="btn btn-primary">Add Comic</button>
      </form>
    </div>
  </section>
</main>

@endsection