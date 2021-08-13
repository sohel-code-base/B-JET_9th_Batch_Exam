<?php

class CourseSelector
{
    private Course $course;
    public function __construct(Course $course)
    {
        $this->course = $course;
    }

    public function assign()
    {
        return $this->course;
    }

}