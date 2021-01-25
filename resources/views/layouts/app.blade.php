<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flower Shop | @yield('page-title')</title>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div id="page-wrapper">
      {{-- Header --}}
      @include('partials.header')
      {{-- Main --}}
      <main>
        @yield('section')
      </main>
      {{-- Footer --}}
      @include('partials.footer')
    </div>  {{-- Closing page-wrapper --}}
  </body>
</html>
