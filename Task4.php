<?php

abstract class Animal{
    abstract public function makeSound();
}
class Dog extends Animal{
    public function makeSound(){
        return "Bark!";
    }
}
class Cat extends Animal{
    public function makeSound(){
        return "Meow!";
    }
}
class Bird extends Animal{
    public function makeSound(){
        return "Chrip!";
    }
}

$animals = [
    new Dog(),
    new Cat(),
    new Bird()
];

foreach($animals as $animal){
    echo $animal->makeSound(). "\n";
}