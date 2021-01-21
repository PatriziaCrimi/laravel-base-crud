@extends('layouts.app')

@section('page-title', 'Error | 404')

@section('section')
  <section id="error" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-uppercase">Error</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="error-pic">
            <img src="{{asset('img/error_404.jpg')}}" class="img-fluid" alt="Error 404 picture">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{route('homepage')}}" class="btn btn-primary text-uppercase font-weight-bold">Back to Homepage</a>
        </div>
      </div>
    </div>
  </section>
@endsection
