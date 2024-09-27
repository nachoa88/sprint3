<?php

class Duck
{

    public function quack()
    {
        echo "Quack \n";
    }

    public function fly()
    {
        echo "I'm flying \n";
    }
}

class Turkey
{

    public function gobble()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter extends Turkey
{
    private Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }
    // Adapts the quack method of a duck to the gobble method of a turkey.
    public function quack()
    {
        $this->turkey->gobble();
    }

    // Adapts the fly method of a duck to the fly method of a turkey, we call it 5 times to simulate the duck's flying behavior.
    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}
