<?php
require_once 'tigger.php';

// As the constructor is private, we can't create a new instance of the class using the new keyword.
// $tigger = new Tigger();

// Create two instances of Tigger by calling the getInstance method.
$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
// Just to check if they are the same instance:
echo "Are they the same instance? " . ($tigger1 === $tigger2 ? "Yes" : "No") . PHP_EOL;

// Call the roar method 5 times.
for ($i = 0; $i < 5; $i++) {
    // Just to check that getInstance is not creating a new Tigger but is returning the same instance.
    $tigger = Tigger::getInstance();
    $tigger->roar();
}

// We try the getCounter method, as $tigger and $tigger1 are the same instance, the counter should be 5.
printf($tigger1->getCounter());
