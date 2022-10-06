<?php

use Lucas\Projeto\Model\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    private Video $video;

    protected function setUp(): void
    {
        $this->video = New Video("Introduction");
    }

    public function testIfVideoIsCreated()
    {
        self::assertEquals($this->video->getVideoName(), "Introduction");
    }
}