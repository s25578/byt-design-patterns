<?php

namespace VersionControl;

class Originator {
    private $state;

    public function setState($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }

    public function saveStateToMemento() {
        return new Memento($this->state);
    }

    public function getStateFromMemento(Memento $memento) {
        $this->state = $memento->getState();
    }
}

