<!-- resources/views/actors/index.blade.php -->
<h1>Actors</h1>
<ul>
    @foreach ($actors as $actor)
        <li><a href="/actors/{{ $actor->id }}">{{ $actor->first_name }} {{ $actor->last_name }}</a></li>
    @endforeach
</ul>
