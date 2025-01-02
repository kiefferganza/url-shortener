<?php

namespace App\Actions;

use App\Models\ShortenedUrl;
use Illuminate\Support\Str;

class CreateShortenedUrl
{
    public function execute(string $data): ShortenedUrl
    {
        $shortenedUrl = new ShortenedUrl;
        $shortenedUrl->original_url = $data;
        $shortenedUrl->code = Str::random(6);

        $shortenedUrl->save();

        return $shortenedUrl;
    }
}
