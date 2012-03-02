<?php

namespace PHPPeru\Parenthesis;

/**
 * @author Luis Cordova <cordoval@gmail.com>
 */
class Parenthesis
{
    protected $findString = array("()", "[]", "{}");

    public function validateString($inputString)
    {
        return true;
    }
}
