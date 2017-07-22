<?php
class Comment
{
    var $title;
    var $body;

    function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;

    }

}
?>