<?php
class Course
{
    var $name;
    var $description;
    var $listOfTasks;

    function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

}
?>