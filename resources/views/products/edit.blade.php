@extends('layouts.app')

@section('page-title', 'Edit Bouquet - ' . $product->bouquet_name)

@section('section')
  <section class="bouquet-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Edit Bouquet</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <img class="rounded mx-auto d-block img-fluid" src="{{asset('img/bouquet' . $product->id . '.jpg')}}"
            alt="{{$product->bouquet_name}} bouquet">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          {{-- The "action" is the route necessary to manage form data --}}
          {{-- The "method" PUT or PATCH must be specified --}}
          <form id="new-bouquet-form" method="POST" action="{{route('products.update', ['product' => $product->id])}}">
            {{-- This "@csrf" Blade Token must be added --}}
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="bouquet_name">Bouquet name</label>
              <input id="bouquet-name" type="text" name="bouquet_name" value="{{$product->bouquet_name}}" class="form-control">
              <p>The bouquet name cannot be longer than 50 characters.</p>
            </div>
            <div class="form-group">
              <label for="size">Size</label>
              {{-- -------------- OPTION 1: RADIO BOX --------------  --}}
              <p class="radio-box">
                <input type="radio" name="size" value="0"
                {{$product->size == 0 ? 'checked=checked' : ''}}>
                small
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="1"
                {{$product->size == 1 ? 'checked=checked' : ''}}>
                medium
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="2"
                {{$product->size == 2 ? 'checked=checked' : ''}}>
                large
              </p>
              <p class="radio-box">
                <input type="radio" name="size" value="3"
                {{$product->size == 3 ? 'checked=checked' : ''}}>
                extra large
              </p>
              {{-- -------------- OPTION 2: SELECT--------------  --}}
              {{-- <select name="size" class="form-control">
                <option value="">--select--</option>
                <option value="0" {{$product->size == 0 ? 'selected=selected' : ''}}>small</option>
                <option value="1" {{$product->size == 1 ? 'selected=selected' : ''}}>medium</option>
                <option value="2" {{$product->size == 2 ? 'selected=selected' : ''}}>large</option>
                <option value="3" {{$product->size == 3 ? 'selected=selected' : ''}}>extra large</option>
              </select> --}}
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input id="bouquet-price" type="number" name="price" value="{{$product->price}}" class="form-control" step="0.01">
            </div>
            <div class="form-group">
              <label for="flowers_types">Flowers types</label>
              <input type="text" name="flowers_types" value="{{$product->flowers_types}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="foliage_type">Foliage type</label>
              <input type="text" name="foliage_type" value="{{$product->foliage_type}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="colors">Colors</label>
              <input type="text" name="colors" value="{{$product->colors}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="season">Season</label>
              {{-- -------------- OPTION 1: RADIO BOX --------------  --}}
              <p class="radio-box">
                <input type="radio" name="season" value="0"
                {{$product->season == 0 ? 'checked=checked' : ''}}>
                Winter
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="1"
                {{$product->season == 1 ? 'checked=checked' : ''}}>
                Spring
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="2"
                {{$product->season == 2 ? 'checked=checked' : ''}}>
                Summer
              </p>
              <p class="radio-box">
                <input type="radio" name="season" value="3"
                {{$product->season == 3 ? 'checked=checked' : ''}}>
                Autumn
              </p>
              {{-- -------------- OPTION 2: SELECT--------------  --}}
              {{-- <select name="season" class="form-control">
                <option value="">--select--</option>
                <option value="0" {{$product->season == 0 ? 'selected=selected' : ''}}>Winter</option>
                <option value="1" {{$product->season == 1 ? 'selected=selected' : ''}}>Spring</option>
                <option value="2" {{$product->season == 2 ? 'selected=selected' : ''}}>Summer</option>
                <option value="3" {{$product->season == 3 ? 'selected=selected' : ''}}>Autumn</option>
              </select> --}}
            </div>
            <div class="form-group">
              <label for="bouquet_type">Bouquet type</label>
              <input type="text" name="bouquet_type" value="{{$product->bouquet_type}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="rating">Rating</label>
              <input id="bouquet-rating" type="number" name="rating" value="{{$product->rating}}" class="form-control" step="0.1">
              <p>Please enter a number ranging from 0 to 5.</p>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" rows="4"
              class="form-control">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="notes">Notes</label>
              <input type="text" name="notes" value="{{$product->notes}}" class="form-control">
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
