@extends('layouts.app')

@section('page-title', 'Bouquet Form')

@section('section')
  <section id="bouquet-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Bouquet Form</h1>
          <h2 class="text-center">Enter new bouquet</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          {{-- The "action" is the route necessary to manage form data --}}
          {{-- The "method" POST must be specified --}}
          <form method="POST" action="{{route('products.store')}}">
            {{-- This "@csrf" Blade Token must be added --}}
            @csrf
            <div class="form-group">
              <label for="bouquet_name">Bouquet name</label>
              <input type="text" name="bouquet_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="size">Size</label>
              <p>Please enter 0 for "small" / 1 for "medium" / 2 for "large" / 3 for "extra large"</p>
              <input type="number" name="size" class="form-control">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" name="price" class="form-control">
            </div>
            <div class="form-group">
              <label for="flowers_types">Flowers types</label>
              <input type="text" name="flowers_types" class="form-control">
            </div>
            <div class="form-group">
              <label for="foliage_type">Foliage type</label>
              <input type="text" name="foliage_type" class="form-control">
            </div>
            <div class="form-group">
              <label for="colors">Colors</label>
              <input type="text" name="colors" class="form-control">
            </div>
            <div class="form-group">
              <label for="season">Season</label>
              <p>Please enter 0 for "Winter" / 1 for "Spring" / 2 for "Summer" / 3 for "Autumn"</p>
              <input type="number" name="season" class="form-control">
            </div>
            <div class="form-group">
              <label for="bouquet_type">Bouquet type</label>
              <input type="text" name="bouquet_type" class="form-control">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <p>Please enter a number from 0 to 5</p>
              <input type="number" name="rating" class="form-control">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <input type="text" name="notes" class="form-control">
            </div>
            <div class="form-group">
              {{-- The attribute "submit" must be specified --}}
              <button type="submit" class="btn btn-primary text-uppercase">
                Save
              </buton>
            </div>
          </form>
        </div>
      </div>
    </div> {{-- Closing Container --}}
  </section>
@endsection
