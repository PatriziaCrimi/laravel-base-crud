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
                <th scope="col">Edit</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <td>
                    {{$product->id}}
                  </td>
                  <td>
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
                    {{$product->price}}
                    €
                  </td>
                  <td>
                    <a href="{{route('products.show', ['product' => $product->id])}}" class="btn btn-info">
                      Details
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>  {{-- Closing Container --}}
  </section>
@endsection
