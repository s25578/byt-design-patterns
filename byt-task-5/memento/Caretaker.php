<?php

namespace VersionControl;

class Caretaker {
    private $mementoList = [];

    public function addMemento(Memento $memento) {
        $this->mementoList[] = $memento;
    }

    public function getMemento($index) {
        return $this->mementoList[$index] ?? null;
    }
}

