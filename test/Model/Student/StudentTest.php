<?php

use Lucas\Projeto\Model\Student\Address;
use Lucas\Projeto\Model\Student\Email;
use Lucas\Projeto\Model\Student\FullName;
use Lucas\Projeto\Model\Student\Student;
use Lucas\Projeto\Model\Student\WatchedVideos;
use Lucas\Projeto\Model\Video\Video;
use Lucas\Projeto\Service\DisplayRanking;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    private Student|array $student;

    protected function setUp(): void
    {
        $data1 = New DateTime();
        $data2 = New DateTime();
        $data3 = New DateTime();
        $listOfVideos[] = New Video("Uzziel", "Introduction", "Math Class", 240, true);
        $listOfVideos[] = New Video("Methuselah", "Arithmetics", "Math Class", 360, true);
        $listOfVideos[] = New Video("Tzadik", "Extra", "Math Class", 180, false);

        $this->student[0] = New Student(
            New FullName("Marco", "Aurelio"), 
            New Email("marco.aurelio@gmail.com"),
            $data1->modify('1997-04-26 00:18:38'),
            New Address("Franklin Avenue", "Liberty City", "New York", "America"),
            $listOfVideos
        );

        $this->student[1] = New Student(
            New FullName("Natasha", "Mikhalkov"), 
            New Email("natasha.mikhalkov@gmail.com"),
            $data2->modify('2002-10-18 11:06:38'),
            New Address("Petrograd", "Saint Petersburg", "Northwestern", "Russia"),
            $listOfVideos
        );

        $this->student[2] = New Student(
            New FullName("Yuriko", "Matsui"), 
            New Email("yuriko.matsui@gmail.com"),
            $data3->modify('2005-03-31 23:17:11'),
            New Address("Kuroshio", "Tanabe", "Wakayama", "Japan"),
            $listOfVideos
        );

        $this->student[0]->getExp()->addExpAfterVideoIsWatched(240, 1);
        $this->student[2]->getExp()->addExpAfterVideoIsWatched(360, 1);
    }

    public function testIfStudentIsCreated()
    {
        $listOfVideos = "";
        foreach ($this->student[0]->getWatchedVideos() as $video) {
            $listOfVideos = "{$video->getURLCode()} $listOfVideos";
        }
        
        self::assertEquals("Marco Aurelio", $this->student[0]->getFullName());
        self::assertEquals("marco.aurelio@gmail.com", $this->student[0]->getEmailAsString());
        self::assertEquals("26/Apr/1997 00:18:38", $this->student[0]->getBirthDate()->format('d/M/Y H:i:s'));
        self::assertEquals("Franklin Avenue, Liberty City. New York, America.", $this->student[0]->getAddress());
        self::assertEquals("Tzadik Methuselah Uzziel ", $listOfVideos);
        
        self::assertEquals("Natasha Mikhalkov", $this->student[1]->getFullName());
        self::assertEquals("natasha.mikhalkov@gmail.com", $this->student[1]->getEmailAsString());
        self::assertEquals("18/Oct/2002 11:06:38", $this->student[1]->getBirthDate()->format('d/M/Y H:i:s'));
        self::assertEquals("Petrograd, Saint Petersburg. Northwestern, Russia.", $this->student[1]->getAddress());
        self::assertEquals("Tzadik Methuselah Uzziel ", $listOfVideos);
        
        self::assertEquals("Yuriko Matsui", $this->student[2]->getFullName());
        self::assertEquals("yuriko.matsui@gmail.com", $this->student[2]->getEmailAsString());
        self::assertEquals("31/Mar/2005 23:17:11", $this->student[2]->getBirthDate()->format('d/M/Y H:i:s'));
        self::assertEquals("Kuroshio, Tanabe. Wakayama, Japan.", $this->student[2]->getAddress());
        self::assertEquals("Tzadik Methuselah Uzziel ", $listOfVideos);
    }

    public function testExperiencePoints()
    {
        self::assertEquals(120, $this->student[0]->getExp()->getExperiencePoints());
        self::assertEquals(0, $this->student[1]->getExp()->getExperiencePoints());
        self::assertEquals(180, $this->student[2]->getExp()->getExperiencePoints());
    }

    public function testRankingStudentsByExp()
    {
        $newRanking = New DisplayRanking;
        $studentSortedByExp = $newRanking->rankStudentsExp($this->student);
        self::assertEquals(180, $studentSortedByExp[0]->getExp()->getExperiencePoints());
        self::assertEquals(120, $studentSortedByExp[1]->getExp()->getExperiencePoints());
        self::assertEquals(0, $studentSortedByExp[2]->getExp()->getExperiencePoints());
    }
}