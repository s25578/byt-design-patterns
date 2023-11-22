<?php

class DivideHandler implements Handler {
    private $nextHandler;

    public function setNext(Handler $handler): Handler {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function handle(string $request): ?float {
        if (strpos($request, '/') !== false) {
            list($a, $b) = explode('/', $request);
            if ($b == 0) {
                throw new Exception("Division by zero is not allowed, it can broke the whole universe :((( ");
            }
            return $a / $b;
        } else {
            return $this->nextHandler ? $this->nextHandler->handle($request) : null;
        }
    }
}

