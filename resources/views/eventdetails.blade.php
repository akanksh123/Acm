@extends('layouts.userlayout')
@section('title')
ACM | Events
@endsection
@section('linking')
<link rel="stylesheet" href="{{asset('css/eventdetails.css')}}">
@endsection
@section('navbar')
background-color:#3498DB;
@endsection
@section('navbar-dropdown')
active
@endsection

@section('content')
<section class="mysection">
      <div class="description">
        <div class="img1">
          <div class="images10">
            <img
              class="imgsize"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSIgfGhzU7yx-FjNxytg0jequjbD5lEGRkJn2dN8uyl9_lzVty4"
            />
          </div>
          <div class="images20">
            <img
              class="imgsize"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQr8VXolR7XHvDRcDIwWRk-ENATLM2oWlPhOlJFr-0C8k1kOfZ"
            />
          </div>
        </div>
        <div class="img2">
          <div class="images30">
            <img
              class="imgsize"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQr8VXolR7XHvDRcDIwWRk-ENATLM2oWlPhOlJFr-0C8k1kOfZ"
            />
          </div>
          <div class="images40">
            <img
              class="imgsize"
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTQr8VXolR7XHvDRcDIwWRk-ENATLM2oWlPhOlJFr-0C8k1kOfZ"
            />
          </div>
        </div>
      </div>
      <div class="workshopdetails">
        <h1>Event 1</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.<br />Lorem ipsum dolor sit amet,
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
    </section>
    @endsection