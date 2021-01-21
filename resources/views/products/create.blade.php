@extends('layouts.app')

@section('page-title', 'Bouquet Form')

@section('section')
  <section id="bouquet-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-center">Bouquet Form</h1>
          <h2>Enter new bouquet</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div> {{-- Closing Container --}}
  </section>
@endsection