<?php

use Lucas\Projeto\Model\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    private Video $video;

    protected function setUp(): void
    {
        $this->video = New Video("Uzziel", "Introduction", "Math Class", 240, true);
    }

    public function testIfVideoIsCreated()
    {
        self::assertEquals($this->video->getURLCode(), "Uzziel");
        self::assertEquals($this->video->getVideoName(), "Introduction");
        self::assertEquals($this->video->getCourseName(), "Math Class");
        self::assertEquals($this->video->getVideoLengthInSeconds(), 240);
        self::assertEquals($this->video->getVisibility(), true);
    }
}