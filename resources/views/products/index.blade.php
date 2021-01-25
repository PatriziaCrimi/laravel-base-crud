@extends('layouts.app')

@section('page-title', 'Products')

@section('section')
  <section id="products">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Bouquets</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Size</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td>
                    {{$product->id}}
                  </td>
                  <td class="text-capitalize">
                    {{$product->bouquet_name}}
                  </td>
                  @if ($product->size === 0)
                    <td>small</td>
                  @elseif ($product->size === 1)
                    <td>medium</td>
                  @elseif ($product->size === 2)
                    <td>large</td>
                  @elseif ($product->size === 3)
                    <td>extra large</td>
                  @endif
                  <td>
                    {{number_format($product->price, 2, ',', '.')}}
                    &euro;
                  </td>
                  <td>
                    <a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-primary">
                      Details
                    </a>
                    <a href="{{route('products.edit', ['product' => $product->id])}}" class="btn btn-primary">
                      Edit
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      {{-- New Product --}}
      <div class="row">
        <div class="col-12">
          <div class="new-product text-center font-weight-bold">
            <p class="font-weight-bold"> &gt; Click the button below to add a new item to the list &lt; </p>
            <a href="{{route('products.create')}}" class="btn btn-primary text-uppercase font-weight-bold">
              New bouquet
            </a>
          </div>
        </div>
      </div>
    </div>  {{-- Closing Container --}}
  </section>
@endsection
