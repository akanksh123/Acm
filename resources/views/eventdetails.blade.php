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
        <h1>{{$res->eventname}}</h1>
        <p>
         {{$res->description}}
        </p>
      </div>
    </section>
    @endsection