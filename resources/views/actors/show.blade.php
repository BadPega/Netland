<!-- resources/views/actors/show.blade.php -->
<h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>
<p>Age: {{ $actor->age }}</p>
<p>Movies & Series:</p>
<ul>
    @foreach ($movies as $movie)
        <li>{{ $movie->title }}</li>
    @endforeach
</ul>
