<?php
namespace Controllers;


class Base{

    var $mongodb = null;

    public function __construct($mongodb)
    {
        $this->mongodb = $mongodb;
    }
}

