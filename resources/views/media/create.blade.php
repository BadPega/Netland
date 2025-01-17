<!-- resources/views/media/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Nieuw Media Item Toevoegen</h1>

    <form method="POST" action="{{ route('media.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="number" name="rating" id="rating" class="form-control" min="0" max="10" required>
        </div>

        <div class="form-group">
            <label for="length_in_minutes">Length (in minutes)</label>
            <input type="number" name="length_in_minutes" id="length_in_minutes" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="released_at">Release Date</label>
            <input type="date" name="released_at" id="released_at" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="country_of_origin">Country of Origin</label>
            <input type="text" name="country_of_origin" id="country_of_origin" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="youtube_trailer_id">YouTube Trailer ID (optional)</label>
            <input type="text" name="youtube_trailer_id" id="youtube_trailer_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="summary">Summary</label>
            <textarea name="summary" id="summary" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="spoken_in_language">Spoken Language</label>
            <input type="text" name="spoken_in_language" id="spoken_in_language" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="is_series">Is this a series?</label>
            <input type="checkbox" name="is_series" id="is_series" value="1" class="form-check-input">
        </div>

        <button type="submit" class="btn btn-primary">Add Media Item</button>
    </form>
@endsection
