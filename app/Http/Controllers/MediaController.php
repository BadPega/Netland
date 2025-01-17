<?php

// app/Http/Controllers/MediaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
    // Methode om het formulier voor het toevoegen van een media-item weer te geven
    public function create()
    {
        return view('media.create');
    }

    // Methode om het nieuwe media-item op te slaan in de database
    public function store(Request $request)
    {
        // Valideer de invoer
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
            'length_in_minutes' => 'required|integer|min:1',
            'released_at' => 'required|date',
            'country_of_origin' => 'required|string|max:255',
            'youtube_trailer_id' => 'nullable|string|max:255',
            'summary' => 'nullable|string',
            'spoken_in_language' => 'required|string|max:255',
            'is_series' => 'required|boolean',  // Toevoegen van de boolean kolom 'is_series'
        ]);

        // Maak het nieuwe media-item aan
        $media = new Media();
        $media->title = $validated['title'];
        $media->rating = $validated['rating'];
        $media->length_in_minutes = $validated['length_in_minutes'];
        $media->released_at = $validated['released_at'];
        $media->country_of_origin = $validated['country_of_origin'];
        $media->youtube_trailer_id = $validated['youtube_trailer_id'];
        $media->summary = $validated['summary'];
        $media->spoken_in_language = $validated['spoken_in_language'];
        $media->is_series = $validated['is_series']; // Toevoegen van de 'is_series' waarde
        $media->save();

        // Redirect naar de lijst van media
        return redirect()->route('media.index')->with('success', 'Media item toegevoegd!');
    }
}
