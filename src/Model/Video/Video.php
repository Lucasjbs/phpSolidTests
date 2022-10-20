<?php

namespace Lucas\Projeto\Model\Video;

class Video
{
    private string $videoURLCode;
    private string $videoName;
    private string $courseName;
    private int $videoLengthInSeconds;
    private bool $visibility;

    public function __construct(string $videoURLCode, string $videoName, string $courseName, int $videoLengthInSeconds, bool $visibility) {
        $this->videoURLCode = $videoURLCode;
        $this->videoName = $videoName;
        $this->courseName = $courseName;
        $this->videoLengthInSeconds = $videoLengthInSeconds;
        $this->visibility = $visibility;
    }

    public function getURLCode(): string
    {
        return $this->videoURLCode;
    }

    public function getVideoName(): string
    {
        return $this->videoName;
    }

    public function getCourseName(): string
    {
        return $this->courseName;
    }

    public function getVideoLengthInSeconds(): int
    {
        return $this->videoLengthInSeconds;
    }

    public function getVisibility(): bool
    {
        return $this->visibility;
    }
}