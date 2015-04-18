<?php

class Dog extends Mammal{

    private $name;
    private $color;
    private $taleLength;
    private $race;
    public  $gpsTracker;

    public static $dogCount = 0;

    function __construct($name='Dog Doe', $race='Dog Doe Race'){

        $this->name = $name;
        $this->color = 'White';
        $this->taleLength = 15;
        $this->race = $race;
        $this->gpsTracker = new GpsTracker();

        self::$dogCount ++;

    }

    public static function showDogCount(){
        echo 'We hebben ' . self::$dogCount . ' honden aangemaakt.';
    }

    public function giveLocation(){
        return $this->gpsTracker->giveLocation();
    }

    public function bark($loudness='low'){  //default is low
        if ($loudness == 'high'){
            echo 'BARK BARK BARK';
        }

        if ($loudness == 'low') {
            echo 'bark bark';
        }
    }

    public function communicate(){
        echo 'I\'m communicating like a dog';
    }

    public function eat(){
        echo 'I\'m eating';
        $this->digest();
    }

    public function save(){

        $conn = Db::connect();

        if (!empty($conn)) {
            $query = "INSERT INTO dogs (name, race) VALUES ('" . $this->name . "', '" . $this->race . "')";

            if ($result = mysqli_query($conn, $query)) {

                echo 'success';
            }
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