<?php
class Job
{
    private $id, $title, $location, $description, $requirements, $salery, $companyName;

    public function __construct($id, $title, $companyName, $salery, $requirements, $location, $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->companyName = $companyName;
        $this->salery = $salery;
        $this->requirements = $requirements;
        $this->location = $location;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getCompnayName()
    {
        return $this->companyName;
    }
    public function getSalery()
    {
        return $this->salery;
    }
    public function getRequirements()
    {
        return $this->requirements;
    }
    public function getLocation()
    {
        return $this->location;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public static function getAllJobs()
    {
        $jobs = array(
            new Job(1, 'Front End Developer', 'ABC Company', '$80,000 - $100,000', '5+ years of experience', 'San Francisco, USA', 'description'),
            new Job(2, 'Javascript Developer', 'DEF Company', '$90,000 - $120,000', '10+ years of experience', 'San Francisco, USA', 'description'),
            new Job(3, 'Digital Marketer', 'GHI Company', '$50,000 - $80,000', '3+ years of experience', 'San Francisco, USA', 'description'),
            new Job(4, 'Ghrapics Designer', 'JKL Company', '$70,000 - $150,000', '2+ years of experience', 'San Francisco, USA', 'description')
        );
        return $jobs;
    }

    public static function getJobById($id)
    {
        $jobs = self::getAllJobs();
        foreach ($jobs as $job) {
            if ($job->getId() == $id) {
                return $job;
            }
        }
        return null;
    }
}
