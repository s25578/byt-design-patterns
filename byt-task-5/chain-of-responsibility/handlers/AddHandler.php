<?php

class AddHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler): Handler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?float {
        if (strpos($request, '+') !== false) {
            list($a, $b) = explode('+', $request);
            return $a + $b;
        } else {
            return $this->nextHandler ? $this->nextHandler->handle($request) : null;
        }
    }
}

