@extends('layouts.adminlayout')
@section('title')
ACM NMAMIT | Add events
@endsection
@section('content2')
<div class="container">
    <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add Events</h2>

    <div class="card">
        <div class="card-body">
            <form method="post" action="/addeventss" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="eventname">Event Name</label>
                        <input type="text" class="form-control" id="eventname" required placeholder="Event Name"
                            name="eventname" value="{{ old('eventname') }}">
                        @error('eventname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="eventdate">Event date</label>
                        <input type="date" class="form-control" id="eventdate" required placeholder="Event date"
                            name="eventdate" value="{{ old('eventdate') }}">
                        @error('eventdate')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="eventvenue">Event Venue</label>
                        <input type="text" class="form-control" id="inputEmail4" name="eventvenue" required
                            placeholder="Event Venue" value="{{ old('eventvenue') }}">
                        @error('eventvenue')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" required name="description"
                        placeholder="Event description" value="{{ old('description') }}"></textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="eventimage">Thumbnail</label>
                    <input type="file" name="eventimage" id="eventimage" accept="image/*">
                    @error('eventimage')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <p style="color:red">Select multiple images</p>
                    <label for="eventimage">Images</label>
                    <input type="file" name="images[]" id="images[]" accept="image/*" multiple>
                    @error('images')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>



                <div class="text-right">
                    <button type="submit" class="btn btn-outline-success">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
