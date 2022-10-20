<?php

namespace Lucas\Projeto\Service;

use Lucas\Projeto\Model\Student\Student;

class DisplayRanking
{
    public function rankStudentsExp(Student|array $studentList): Student|array
    {
        usort($studentList, function (Student $student1, Student $student2){
            return $student2->getExp()->getExperiencePoints() - $student1->getExp()->getExperiencePoints();
        });
        return $studentList;
    }
}