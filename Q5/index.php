<?php
require_once 'CourseSelector.php';
require_once 'CourseForA.php';
require_once 'CourseForB.php';

$groupA = new CourseForA();
$groupB = new CourseForB();

$selectorA = new CourseSelector($groupA);
$selectorB = new CourseSelector($groupB);

$generalSub = ['bangla', 'english'];
$specialSubGroupA = ['group A special sub1','group A special sub2'];
$optionalSubGroupA = ['group A optional sub1','group A optional sub2'];

$specialSubGroupB = ['group B special sub1','group B special sub2'];
$optionalSubGroupB = ['group B optional sub1','group B optional sub2'];

$coursesGroupA = $selectorA->assign()->generalSubjects($generalSub)->specialSubjects($specialSubGroupA)->optionalSubjects($optionalSubGroupA)->getCourses();

$coursesGroupB = $selectorB->assign()->generalSubjects($generalSub)->specialSubjects($specialSubGroupB)->optionalSubjects($optionalSubGroupB)->getCourses();

echo '<pre>';
echo '<h1>Group A</h1>';
print_r($coursesGroupA);

echo '<h1>Group B</h1>';
print_r($coursesGroupB);
