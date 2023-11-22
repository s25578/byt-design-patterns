<?php

require_once 'Memento.php';
require_once 'Originator.php';
require_once 'Caretaker.php';

use VersionControl\Memento;
use VersionControl\Originator;
use VersionControl\Caretaker;

$originator = new Originator();
$caretaker = new Caretaker();

$originator->setState("Version 1");
$caretaker->addMemento($originator->saveStateToMemento());

$originator->setState("Version 2");
$caretaker->addMemento($originator->saveStateToMemento());

$originator->getStateFromMemento($caretaker->getMemento(0));
echo "Current State: " . $originator->getState(); 

// Output: Version 1
