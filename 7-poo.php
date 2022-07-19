<?php
 class Dog
 {
     // public - accessible everywhere
     // private - inaccessible outside of class
     // protected - accessible in the class and in child classes

     public string $name;
     public int $age;
     public string $color;

     public function __construct(string $name, int $age, string $color) {
         $this->name = $name;
         $this->age = $age;
         $this->color = $color;
     }

     // Getters and Setters
     public function setName(string $name): void {
         $this->name = $name;
     }

     public function getName(): string {
         return $this->name;
     }

     public function setAge(int $age): void {
         $this->age = $age;
     }

     public function getAge(): int {
         return $this->age;
     }

     public function setColor(string $color): void {
         $this->color = $color;
     }

     public function getColor(): string {
         return $this->color;
     }

     // Methods
     public function bark(): string {
         return 'woof';
     }

     public function barked(): string {
          return $this->name . "has" . "baked";
     }

 }

 // New instance for Dog class
$boomer = new Dog('testName', 'testAge', 'testColor');

// change the name, age and color of the dog
$boomer->name = "Boomer";
$boomer->age = 3;
$boomer->color = "Black";

// Call Method
$bark = $boomer->bark();
$barked = $boomer->barked();
