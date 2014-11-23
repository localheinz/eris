<?php
namespace Eris\Quantifier\Antecedent;

class SingleCallbackAntecedent
{
    private $callback;

    public static function from($callback)
    {
        return new self($callback);
    }

    private function __construct($callback)
    {
        $this->callback = $callback;
    }

    public function evaluate(array $values)
    {
        return call_user_func_array($this->callback, $values);
    }
}

