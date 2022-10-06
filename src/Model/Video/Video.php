<?php

namespace Lucas\Projeto\Model\Video;

class Video
{
    private string $courseName;
    private string $videoName;
    private int $videoLengthInSeconds;
    private bool $visibility;

    public function __construct(string $videoName) {
        $this->videoName = $videoName;
    }

    public function getVideoName(): string
    {
        return $this->videoName;
    }
}