<?php

class Cat extends Mammal{

    private $name;
    private $color;
    private $taleLength;
    private $race;
    public  $location;

    function __construct($name='Cat Doe', $race='Cat Doe Race'){

        $this->name = $name;
        $this->color = 'White';
        $this->taleLength = 15;
        $this->race = $race;
        $this->location = 'Maastricht';

    }

    public function meow($loudness='low'){  //default is low
        if ($loudness == 'high'){
            echo 'MEOW MEOW';
        }

        if ($loudness == 'low') {
            echo 'meow meow';
        }
    }

    public function __get($value){

        if ($value == 'race'){
            return $this->race;

        } elseif ($value == 'name'){
            return $this->name;
        }

    }
}