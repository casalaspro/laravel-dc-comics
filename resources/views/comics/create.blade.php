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
          <input type="email" name="title" class="form-control" id="title" placeholder="Titolo della pasta">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Url Image</label>
          <input type="email" name="image" class="form-control" id="image" placeholder="http://...">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <input type="email" name="type" class="form-control" id="type" placeholder="lunga">
        </div>

        <div class="mb-3">
          <label for="cooking_time" class="form-label">Artists</label>
          <input type="email" name="cooking_time" class="form-control" id="cooking_time" placeholder="Artists names">
        </div>

        <div class="mb-3">
          <label for="cooking_time" class="form-label">Price</label>
          <input type="email" name="cooking_time" class="form-control" id="cooking_time" placeholder="price in $">
        </div>

        <div class="mb-3">
          <label for="weigth" class="form-label">Writers</label>
          <input type="email" name="weigth" class="form-control" id="weigth" placeholder="Writers names">
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