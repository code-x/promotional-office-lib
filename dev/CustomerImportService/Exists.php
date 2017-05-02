<?php

class Exists
{
    /**
     * @var ExistsArgument $argument
     */
    public $argument = null;

    /**
     * @param ExistsArgument $argument
     */
    public function __construct($argument)
    {
        $this->argument = $argument;
    }
}