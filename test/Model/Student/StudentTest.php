<?php

use Lucas\Projeto\Model\Student\FullName;
use Lucas\Projeto\Model\Student\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    private Student $student;

    protected function setUp(): void
    {
        $this->student = New Student(New FullName("Marco", "Aurelio"));
    }

    public function testIfStudentIsCreated()
    {
        self::assertEquals("Marco Aurelio", $this->student->getFullName());
    }
}