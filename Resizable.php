<?php

// Classe parente
class Animal {
    public function makeSound() {
        return "Animal makes a sound";
    }
}

// Classe enfant 1
class Dog extends Animal {
    public function makeSound() {
        return "Dog barks";
    }
}

// Classe enfant 2
class Cat extends Animal {
    public function makeSound() {
        return "Cat meows";
    }
}

// Fonction pour utiliser le polymorphisme
function animalSound(Animal $animal) {
    return $animal->makeSound();
}

// Création d'objets
$dog = new Dog();
$cat = new Cat();

// Appels de méthode avec polymorphisme
echo animalSound($dog); // Output: Dog barks
echo animalSound($cat); // Output: Cat meows
