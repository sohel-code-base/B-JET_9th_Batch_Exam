<?php

abstract class Course
{
    public abstract function generalSubjects(array $subjects);
    public abstract function specialSubjects(array $subjects);
    public abstract function optionalSubjects(array $subjects);
}