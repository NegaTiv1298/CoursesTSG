<?php
require_once 'IUser.php';
require_once 'IEmployee.php';
require_once 'Employee.php';

$employeeObject1 = new Employee();

$employeeObject1->setName('Kristian');
$employeeObject1->setAge(23);
$employeeObject1->setGender('Male');
$employeeObject1->setSalary(10000);

echo $employeeObject1->getName(). ' - '. $employeeObject1->getAge(). ' - '. $employeeObject1->getGender(). ' - '. $employeeObject1->getSalary().'<br>';


$employeeObject2 = new Employee();

$employeeObject2->setName('Bogdan');
$employeeObject2->setAge(31);
$employeeObject2->setGender('Male');
$employeeObject2->setSalary(13203);

echo $employeeObject2->getName(). ' - '. $employeeObject2->getAge(). ' - '. $employeeObject2->getGender(). ' - '. $employeeObject2->getSalary().'<br>';


$employeeObject3 = new Employee();

$employeeObject3->setName('Anastasia');
$employeeObject3->setAge(21);
$employeeObject3->setGender('Female');
$employeeObject3->setSalary(12521);

echo $employeeObject3->getName(). ' - '. $employeeObject3->getAge(). ' - '. $employeeObject3->getGender(). ' - '. $employeeObject3->getSalary().'<br>';