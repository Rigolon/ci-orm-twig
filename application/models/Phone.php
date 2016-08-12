<?php

use Elegant\Model as Timex;

class Phone extends Timex {

    protected $table = "phone";

    function user()
    {
        return $this->belongsTo('User');
    }
}