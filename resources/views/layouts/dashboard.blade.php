@extends('layouts.main')
@section('content')
<div class="main-panel">
    @include('layouts.nav')
    <div class="content">
        <header class="header-2">
            <div class="page-header min-vh-75 relative" style="background-image: url('/assets/img/bg2.jpg')">
              <span class="mask bg-gradient-primary opacity-4"></span>
              <div class="container">
                <div class="row">
                  <div class="col-lg-7 text-center mx-auto">
                    <h1 class="text-white pt-3 mt-n5">@yield('subtitulo')</h1>
                    <p class="lead text-white mt-3"></p>
                  </div>
                </div>
              </div>
            </div>
          </header>
        @yield('content-dashboard')
    </div>
    @include('layouts.footer')
</div>
@endsection