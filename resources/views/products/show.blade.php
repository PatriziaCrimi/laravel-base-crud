@extends('layouts.app')

@section('page-title', 'Products - '. $product->bouquet_name)

@section('section')
  <section id="single-product">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Product</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h6># {{$product->id}}</h6>
              <h5 class="card-title">{{$product->bouquet_name}}</h5>
              <p class="card-text">Flowers:
                <span>{{$product->flowers_types}}</span>
              </p>
              <p class="card-text">Foliage:
                <span>{{$product->foliage_type}}</span>
              </p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Size:
                <span>{{$product->size}}</span>
              </li>
              <li class="list-group-item">Price:
                <span>{{$product->price}}</span>
              </li>
              <li class="list-group-item">Season:
                <span>{{$product->season}}</span>
              </li>
              <li class="list-group-item">Type:
                <span>{{$product->bouquet_type}}</span>
              </li>
              <li class="list-group-item">Colors:
                <span>{{$product->colors}}</span>
              </li>
              <li class="list-group-item">Rating:
                <span>{{$product->rating}}</span>
              </li>
              <li class="list-group-item">Description:
                <span>{{$product->description}}</span>
              </li>
              <li class="list-group-item">Notes:
                <span>{{$product->notes}}</span>
              </li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Buy now</a>
              <a href="#" class="card-link">More info</a>
            </div>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Container --}}
  </section>
@endsection
