<?php
    include 'classes/db.php';
    include 'classes/mammal.php';
    include 'classes/dog.php';
    include 'classes/cat.php';
    include 'classes/gpstracker.php';

    $droopy = new Dog('Droopy');
    $droopy->communicate();
    $droopy->giveLocation();
    $droopy->save();

    $tiki = new Cat('Tiki');
    $tiki->communicate();

?>