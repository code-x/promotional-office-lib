<?php

class Logon
{
    /**
     * @var string $companyName
     */
    public $companyName = null;
    /**
     * @var string $userName
     */
    public $userName = null;
    /**
     * @var string $password
     */
    public $password = null;

    /**
     * @param string $companyName
     * @param string $userName
     * @param string $password
     */
    public function __construct($companyName, $userName, $password)
    {
        $this->companyName = $companyName;
        $this->userName = $userName;
        $this->password = $password;
    }
}