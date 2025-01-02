<?php

namespace App\Http\Controllers;

use App\Actions\CreateShortenedUrl;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShortenedUrlController extends Controller
{

    public function __construct(protected CreateShortenedUrl $urlShortener)
    {}

    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'original_url' => 'url',
        ]);
        $shortenUrl = $this->urlShortener->execute($validated['original_url']);
        return response()->json($shortenUrl);
    }
}
