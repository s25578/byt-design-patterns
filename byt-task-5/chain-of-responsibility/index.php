<?php

require_once 'handlers/Handler.php';
require_once 'handlers/AddHandler.php';
require_once 'handlers/SubtractHandler.php';
require_once 'handlers/MultiplyHandler.php';
require_once 'handlers/DivideHandler.php'

$addHandler = new AddHandler();
$subtractHandler = new SubtractHandler();
$multiplyHandler = new MultiplyHandler();
$divideHandler = new DivideHandler();

$addHandler->setNext($subtractHandler)
           ->setNext($multiplyHandler)
           ->setNext($divideHandler);


// Addition
echo $addHandler->handle("10+5") . "<br>"; 

// Subtraction
echo $addHandler->handle("10-5") . "<br>"; 

// Multiplication
echo $addHandler->handle("10*5") . "<br>"; 

// Division
echo $addHandler->handle("10/5") . "<br>"; 
