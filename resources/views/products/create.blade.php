@extends('layouts.app')

@section('page-title', 'New Bouquet')

@section('section')
  <section class="bouquet-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">New Bouquet</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          {{-- The "action" is the route necessary to manage form data --}}
          {{-- The "method" POST must be specified --}}
          <form id="new-bouquet-form" method="POST" action="{{route('products.store')}}">
            {{-- This "@csrf" Blade Token must be added --}}
            @csrf
            <div class="form-group">
              <label for="bouquet_name">Bouquet name</label>
              <input id="bouquet-name" type="text" name="bouquet_name" class="form-control">
              <p>The bouquet name cannot be longer than 50 characters.</p>
            </div>
            <div class="form-group">
              <label for="size">Size</label>
              {{-- -------------- OPTION 1: RADIO BOX --------------  --}}
              <p class="radio-box">
                <input type="radio" name="size" value="0">
                small
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="1">
                medium
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="2">
                large
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="3">
                extra large
              </p>
              {{-- -------------- OPTION 2: SELECT--------------  --}}
              {{-- <select name="size" class="form-control">
                <option value="">--select--</option>
                <option value="0">small</option>
                <option value="1">medium</option>
                <option value="2">large</option>
                <option value="3">extra large</option>
              </select> --}}
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input id="bouquet-price" type="number" name="price" class="form-control" step="0.01">
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
              {{-- -------------- OPTION 1: RADIO BOX --------------  --}}
              <p class="radio-box">
                <input type="radio" name="season" value="0">
                Winter
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="1">
                Spring
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="2">
                Summer
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="3">
                Autumn
              </p>
              {{-- -------------- OPTION 2: SELECT--------------  --}}
              {{-- <select name="season" class="form-control">
                <option value="">--select--</option>
                <option value="0">Winter</option>
                <option value="1">Spring</option>
                <option value="2">Summer</option>
                <option value="3">Autumn</option>
              </select> --}}
            </div>
            <div class="form-group">
              <label for="bouquet_type">Bouquet type</label>
              <input type="text" name="bouquet_type" class="form-control">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <input id="bouquet-rating" type="number" name="rating" class="form-control" step="0.1">
              <p>Please enter a number ranging from 0 to 5.</p>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" rows="4" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <input type="text" name="notes" class="form-control">
            </div>
            <div class="form-group d-flex justify-content-end">
              {{-- The attribute "submit" must be specified --}}
              <button type="submit" class="btn btn-primary text-uppercase">
                Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div> {{-- Closing Container --}}
  </section>
@endsection
