<!-- resources/views/media/index.blade.php -->
<h1>Films & Series</h1>
<form method="GET" action="/media/search">
    <input type="text" name="query" placeholder="Search by title" />
    <button type="submit">Search</button>
</form>
<ul>
    @foreach ($media as $item)
        <li><a href="/media/{{ $item->id }}">{{ $item->title }}</a></li>
    @endforeach
</ul>
