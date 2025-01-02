<?php

namespace App\Http\Controllers;

use App\Actions\CreateShortenedUrl;
use App\Models\ShortenedUrl;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShortenedUrlController extends Controller
{

    public function __construct(protected CreateShortenedUrl $urlShortener)
    {}

    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'original_url' => 'url',
        ]);
        $shortenUrl = $this->urlShortener->execute($validated['original_url']);
        return response()->json(url($shortenUrl->code));
    }

    public function show(string $code)
    {
        $url = ShortenedUrl::where('code', $code)->firstOrFail();

        return redirect($url->original_url);
    }
}
