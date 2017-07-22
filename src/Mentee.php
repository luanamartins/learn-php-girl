<?php
class Mentee
{
    var $name;
    var $emailAddress;
    var $nationality;
    var $login;
    var $password;

    function __construct($name, $emailAddress, $nationality)
    {
        $this->name = $name;
        $this->emailAddress = $emailAddress;
        $this->nationality = $nationality;
    }


}
?>