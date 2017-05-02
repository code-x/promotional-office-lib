<?php

include_once('CommunicationException.php');

class FaultException extends CommunicationException
{
    public function __construct()
    {
        parent::__construct();
    }
}