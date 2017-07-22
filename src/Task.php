<?php
class Task
{
    var $name;
    var $description;
    var $listOfComments;

    function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;

    }

}
?>