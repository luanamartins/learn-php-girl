<?php
class Task
{
    var $name;
    var $description;
    var $listOfComments;
    var $dateOfCreation;
    var $dateOfLastModification;

    function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;

    }

}
?>