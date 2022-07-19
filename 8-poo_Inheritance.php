<?php
### Inheritance -> allow classes to inherit properties and methods from other classes.

class Animal
{
    public int $age;

    public function getAge(): int {
        return $this->age;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function eat(): string {
        return 'The animal is eating';
    }
}

// Child class allow use properties and methods
class Dog extends Animal {
    // we can overwrite methods from parent class
    public function eat(): string {
        return 'The dog is eating';
    }
}

$boomer = new Dog();
$boomer->eat();