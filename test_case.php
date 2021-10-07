<?php

// @TODO This is not applicable for Horses!!!!

// At the bottom are general animal outputs of their sex, the functionality should be expanded for horses, according to the criteria below. 
//  1) Please create a new Horse class to deal with this problem.
//  2) Expand the examples at the bottom to demonstrate all different options for horse sex.
//  3) Feel free to change things in the Animal class as needed
//  4) Please use PSR formatting (or generally clean code style)

// INFO:
// Horses differentiate between young and old sexes. 
// A horse below 4 years of age is a "Filly" if female and a "Colt" if male
// Older female horses are a "Mare"
// Neutered Male horses are a "Gelding", 
// unneutered male, older than a Colt, are "Stallion"

class Animal {
    private int $sex; //1: Male, 2:Female, other:unknown
    private float $age;
    private bool $isDesexed;
    
    public function __construct(float $age = 1, int $sex = 1, bool $isDesexed = false)  {
        $this->age = $age;
        $this->sex = $sex;
        $this->isDesexed = $isDesexed;
    }

    public function getSexString(int $sex = 5, bool $isDesexed = false): string
    {
        switch ($sex) {
            case 1:
                return $isDesexed ? "Male" : "Male Neutered";
            case 2:
                return $isDesexed ? "Female" : "Female Speyed";
            default:
                return "?";
        }
    }
    
    public function getAge(): int
    {
        return $this->age;
    }
    
    public function printAgeAndSex()
    {
        echo('Hi, I am ' . $this->age  . ' years old and a '  . $this->getSexString($this->sex, $this->isDesexed) . PHP_EOL);
    }
}


// -> Put horse class here
class Horse extends Animal{
    
    
    public function __construct (float $age = 1, int $sex = 1, bool $isDesexed = false)  {
        $this->age = $age;
        $this->sex = $sex;
        $this->isDesexed = $isDesexed;
    }



    public function getSexString(int $sex = 5, bool $isDesexed = false): string
    {
        
        switch ($sex) {
            case 1:
                return $isDesexed ? "Gelding" : "Colt";
            case 2:
                return $isDesexed ? "Female" : "Filly";
            case 3:
                //return $isDesexed ? "Male" : "Stallion";
            default:
                return "?";
        }
    } 

    public function getAge(): int
    {
        return $this->age;
    }
    
    public function printAgeAndSex()
    {
        echo('Hi, I am ' . $this->age  . ' years old and a '  . $this->getSexString($this->sex, $this->isDesexed) . PHP_EOL);
    }
}
// Do not change Frank & Beans, but make sure they have the correct output

$frank = new Animal(1, 1, false); // Male example as output
$frank->printAgeAndSex();
$beans = new Animal(5, 2, true); // Female Speyed as output
$beans->printAgeAndSex();

// -> Add other test cases for horses here
$colt = new Horse(1, 1, false);
$colt->printAgeAndSex(); // Expected: Hi, I am 1 years old and a Colt
$filly = new Horse(3, 2, false); 
$filly->printAgeAndSex();// Expected: Hi, I am 3 years old and a Filly

# Create Gelding - Hi, I am 2 years old and a Gelding
$gelding = new Horse(2, 1, true); 
$gelding->printAgeAndSex();

# Create Stallion - Hi, I am 5 years old and a Stallion
$stallion = new Horse(5, 3, false); 
$stallion->printAgeAndSex();

# Create Mare - Hi, I am 5 years old and a Mare
$mare = new Horse(5, 2, true); 
$mare->printAgeAndSex();





///////////////////////////////////////