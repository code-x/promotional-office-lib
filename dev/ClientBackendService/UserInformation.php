<?php

class UserInformation
{
    /**
     * @var string $Email
     */
    public $Email = null;
    /**
     * @var string $Fax
     */
    public $Fax = null;
    /**
     * @var string $FirstName
     */
    public $FirstName = null;
    /**
     * @var string $Language
     */
    public $Language = null;
    /**
     * @var string $LastName
     */
    public $LastName = null;
    /**
     * @var string $Phone
     */
    public $Phone = null;
    /**
     * @var string $SelfDefined1
     */
    public $SelfDefined1 = null;
    /**
     * @var string $SelfDefined2
     */
    public $SelfDefined2 = null;
    /**
     * @var string $SelfDefined3
     */
    public $SelfDefined3 = null;
    /**
     * @var string $SelfDefined4
     */
    public $SelfDefined4 = null;
    /**
     * @var string $SelfDefined5
     */
    public $SelfDefined5 = null;
    /**
     * @var string $ShortName
     */
    public $ShortName = null;
    /**
     * @var int $UserId
     */
    public $UserId = null;
    /**
     * @var guid $UserIdentifier
     */
    public $UserIdentifier = null;

    /**
     * @param int $UserId
     * @param guid $UserIdentifier
     */
    public function __construct($UserId, $UserIdentifier)
    {
        $this->UserId = $UserId;
        $this->UserIdentifier = $UserIdentifier;
    }
}