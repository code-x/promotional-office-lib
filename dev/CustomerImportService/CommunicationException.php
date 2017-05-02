<?php

include_once('SystemException.php');

class CommunicationException extends SystemException
{
    public function __construct()
    {
        parent::__construct();
    }
}