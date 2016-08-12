<?php

use Elegant\Model as Timex;

class User extends Timex {

    protected $table = "user";

    function phones()
    {
        return $this->hasMany('Phone');
    }

}