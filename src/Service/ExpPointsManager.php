<?php

namespace Lucas\Projeto\Service;

use InvalidArgumentException;
use Lucas\Projeto\Model\Student\ExperiencePoints;

class ExpPointsManager extends ExperiencePoints
{
    public function addExpAfterVideoIsWatched(int $videoLengthInSeconds, int $videoDificulty)
    {
        if($videoLengthInSeconds>0 && $videoDificulty>=1 && $videoDificulty<=3 )
        {
            $expValue = ($videoLengthInSeconds/2) * $videoDificulty;
            if($expValue>10000) $expValue = 10000;

            $this->addExperiencePoints($expValue);
            return;
        }
        
        throw new InvalidArgumentException("Video dificulty or lenght is invalid!");
    }

    public function addExpAfterCourseIsCompleted(int $courseLengthInSeconds, int $courseDificulty)
    {
        if($courseLengthInSeconds>0 && $courseDificulty>=1 && $courseDificulty<=3 )
        {
            $expValue = ($courseLengthInSeconds/10) * $courseDificulty;
            if($expValue>10000) $expValue = 10000;

            $this->addExperiencePoints($expValue);
            return;
        }
        
        throw new InvalidArgumentException("Course dificulty or lenght is invalid!");

    }

    public function addExpAfterTestIsCompleted(int $proportionOfCorrectAwsers, int $testDificulty)
    {
        if($proportionOfCorrectAwsers>0 && $testDificulty>=1 && $testDificulty<=3 )
        {
            $expValue = ($proportionOfCorrectAwsers/2) * $testDificulty;
            if($expValue>10000) $expValue = 10000;

            $this->addExperiencePoints($expValue);
            return;
        }
        
        throw new InvalidArgumentException("Test dificulty or lenght is invalid!");
    }
}