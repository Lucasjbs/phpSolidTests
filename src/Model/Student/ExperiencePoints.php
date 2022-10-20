<?php

namespace Lucas\Projeto\Model\Student;

use InvalidArgumentException;

class ExperiencePoints
{
    private int $experiencePoints;

    public function __construct() {
        $this->experiencePoints = 0;
    }

    public function getExperiencePoints(): int
    {
        return $this->experiencePoints;
    }

    protected function addExperiencePoints(int $incomingXP): void
    {
        if($incomingXP>0 && $incomingXP<10000)
        {
            $this->experiencePoints = $this->experiencePoints + $incomingXP;
            return;
        }
        
        throw new InvalidArgumentException("Incoming XP is Invalid!");
    }
}