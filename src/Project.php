<?php
class Course
{
    var $name;
    var $description;
    var $dateOfCreation;
    var $dateOfLastModification;
    var $listOfTasks;

    function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

}
?>