<?php

namespace App\Services;

class YouTubeService
{
    public function extractVideoId(string $url): ?string
    {
        $pattern = '/(?:youtube\.com\/(?:watch\?v=|embed\/|v\/|shorts\/)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }

        return null;
    }

    public function getThumbnailUrl(string $url): ?string
    {
        $id = $this->extractVideoId($url);

        if (!$id) {
            return null;
        }

        return "https://img.youtube.com/vi/{$id}/maxresdefault.jpg";
    }
}
