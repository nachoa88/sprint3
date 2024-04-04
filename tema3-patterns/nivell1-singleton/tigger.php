<?php

class Tigger
{
    // We create a static property to store the instance of the class.
    private static $instance;
    private static int $counter = 0;

    private function __construct()
    {
        // PHP_EOL is a constant that represents the end of a line.
        echo "Building character..." . PHP_EOL;
    }

    // Singleton pattern. Is public and static so we can call it from anywhere and don't require an instance of the class to be used.
    public static function getInstance(): Tigger
    {
        // Check if the instance of the class doesn't exist.
        if (!isset(self::$instance)) {
            // Create a new instance of the class.
            self::$instance = new Tigger();
        }
        // Returns the instance of the class.
        return self::$instance;
    }

    public function roar(): void
    {
        echo "Grrr!" . PHP_EOL;
        // We increment the counter each time the roar method is called.
        self::$counter++;
    }

    public function getCounter(): int
    {
        // We return the value of the counter.
        return self::$counter;
    }
}
