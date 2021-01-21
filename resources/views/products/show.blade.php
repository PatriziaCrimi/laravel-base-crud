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
          <div class="card" style="width: 36rem;">
            <img class="card-img-top"
              src="{{asset('img/bouquet' . $product->id . '.jpg')}}"
              alt="{{$product->bouquet_name}} bouquet">
            <div class="card-body">
              <h6 class="text-right"># {{$product->id}}</h6>
              <h5 class="card-title font-weight-bold text-capitalize">
                {{$product->bouquet_name}}
              </h5>
              @if ($product->flowers_types)
                <p class="card-text text-capitalize">Flowers:
                  <span class="font-italic">
                    {{$product->flowers_types}}
                  </span>
                </p>
              @endif
              @if ($product->foliage_type)
                <p class="card-text text-capitalize">Foliage:
                  <span class="font-italic">
                    {{$product->foliage_type}}
                  </span>
                </p>
              @endif
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Size:
                @if ($product->size === 0)
                  <span>small</span>
                @elseif ($product->size === 1)
                  <span>medium</span>
                @elseif ($product->size === 2)
                  <span>large</span>
                @elseif ($product->size === 3)
                  <span>extra large</span>
                @endif
              </li>
              <li class="list-group-item">Price:
                <span class="font-weight-bold">
                  {{number_format($product->price, 2, ',', '.')}}
                  &euro;
                </span>
              </li>
              @if ($product->season || $product->season === 0)
                <li class="list-group-item text-capitalize">Season:
                  @if ($product->season === 0)
                    <span>winter</span>
                  @elseif($product->season === 1)
                    <span>spring</span>
                  @elseif($product->season === 2)
                    <span>summer</span>
                  @elseif($product->season === 3)
                    <span>autumn</span>
                  @endif
                </li>
              @endif
              @if ($product->bouquet_type)
                <li class="list-group-item">Type:
                  <span>
                    {{$product->bouquet_type}}
                  </span>
                </li>
              @endif
              @if ($product->colors)
                <li class="list-group-item">Colors:
                  <span class="font-italic font-weight-normal">
                    {{$product->colors}}
                  </span>
                </li>
              @endif
              @if ($product->rating || $product->rating === 0)
                <li class="list-group-item">Rating:
                  <span class="font-weight-bold">
                    {{$product->rating}}
                  </span>
                  <span>/ 5</span>
                </li>
              @endif
              @if ($product->description)
                <li class="list-group-item">Description.
                  <span class="font-weight-normal">
                    {{$product->description}}
                  </span>
                </li>
              @endif
              @if ($product->notes)
                <li class="list-group-item">Notes.
                  <span>
                    {{$product->notes}}
                  </span>
                </li>
              @endif
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
