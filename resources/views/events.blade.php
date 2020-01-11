@extends('layouts.userlayout')
@section('title')
ACM | Events
@endsection
@section('linking')
<link rel="stylesheet" href="{{asset('/css/event.css')}}">
@endsection
@section('navbar')
background-color:#3498DB;
@endsection
@section('navbar-dropdown')
active
@endsection

@section('content')
<div class="container">
<section class="mysection">
      <div class="leftbox">
        <div class="content" >
          <h1 >
            Event Conducted
          </h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          </p>
        </div>
      </div>
      <div class="events">
        <ul>
          <li>
            <div class="time">
              <h2>24<br /><span>June</span></h2>
            </div>
            <a href="/event1">
              <div class="details">
                <h3>Event1</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </a>
          </li>
          <li>
            <div class="time">
              <h2>24<br /><span>June</span></h2>
            </div>
            <a href="#">
              <div class="details">
                <h3>Event1</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </a>
          </li>
          <li>
            <div class="time">
              <h2>24<br /><span>June</span></h2>
            </div>
            <a href="#">
              <div class="details">
                <h3>Event1</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                  do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
</div>

@endsection