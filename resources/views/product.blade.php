@extends('layouts.app')

@section('page-title', 'Product')

@section('section')
  <section id="product">
    <div class="container">
      <div class="row">
        <div class="col-12">


          {{-- <div class="">
            @foreach ($products as $product)
              <p>{{$product->id}}</p>
              <p>{{$product->bouquet_name}}</p>
              <p>{{$product->size}}</p>
              <p>{{$product->price}}</p>
              <p>{{$product->flowers_types}}</p>
              <p>{{$product->foliage_type}}</p>
              <p>{{$product->season}}</p>
              <p>{{$product->bouquet_type}}</p>
              <p>{{$product->rating}}</p>
              <p>{{$product->description}}</p>
              <p>{{$product->notes}}</p>
            @endforeach
          </div> --}}


        </div>
      </div>
    </div>
  </section>
@endsection
