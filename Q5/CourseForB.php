<?php
require_once 'Course.php';
class CourseForB extends Course
{
    private array $courses = [];

    public function generalSubjects(array $subjects)
    {
        $this->courses['general'] = $subjects;
        return $this;
    }
    public function specialSubjects(array $subjects)
    {
        $this->courses['special'] = $subjects;
        return $this;
    }
    public function optionalSubjects(array $subjects = null)
    {
        $this->courses['optional'] =  $subjects;
        return $this;
    }

    public function getCourses()
    {
        return $this->courses;
    }
}