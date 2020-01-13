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
      <div class="events">
          <h1 >
            Events Conducted
          </h1>
         
      
        <ul>
          @foreach($events as $event)
          <li>
            <div class="time">
              {{-- <h2>24<br /><span>June</span></h2> --}}
            <h2>{{$event->eventdate}}</h2>
            </div>
            <a href="eventInfo/{{ $event->id }}">
              <div class="details">
              <h3>{{$event->eventname}}</h3>
                <p>
                  {{$event->description}}
                </p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
          
      </div>
       <div class="paging">
        {!!$events->links(); !!}
        </div>
    </section>
   
</div>

@endsection