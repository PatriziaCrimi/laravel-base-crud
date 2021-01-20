@extends('layouts.app')

@section('page-title', 'Homepage')

@section('section')
  <section id="home">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Flower Shop</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="quote text-center">
            <p class="font-weight-bold">“Earth laughs in flowers.”</p>
            <p class="font-italic">(Ralph Waldo Emerson)</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <img src="{{asset('img/wallpaper.jpg')}}" class="img-fluid" alt="Flowers">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
@endsection
