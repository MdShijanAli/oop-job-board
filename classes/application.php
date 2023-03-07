<?php
class Application
{
    private $job_id;
    private $name;
    private $email;
    private $phone;
    private $resume;

    public function __construct($job_id, $name, $email, $phone)
    {
        $this->job_id = $job_id;
        $this->name = $name;
        $this->email = $job_id;
        $this->phone = $phone;
    }

    public function save()
    {
        return true;
    }
}
