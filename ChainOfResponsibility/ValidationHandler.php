<?php
abstract class ValidationHandler {
    private $next_handler;

    public function __construct()
    {
        $this->next_handler = null;
    }

    public function setHandler(ValidationHandler $handler) {
        $this->next_handler = $handler;
        return $this;
    }

    public function getNextHandler(): object|null {
        return $this->next_handler;
    }

    public function validate($input) {
        $result = $this->execValidation($input);

        if (!$result) {
            return $this->getErrorMessage();
        } elseif (!is_null($this->getNextHandler())) {
            return $this->getNextHandler()->validate($input);
        } else {
            return true;
        }
    }

    protected abstract function execValidation($input);

    protected abstract function getErrorMessage();
}