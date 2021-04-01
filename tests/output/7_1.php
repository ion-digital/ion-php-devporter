<?php
namespace \A\Fake\Token;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use My\Classiness;
use \Exception as Throwable;

interface IInterface
{
    /**
     * method
     * 
     * @param string $string
     * 
     * @return ?string
     */
    
    function setString($string);

}

class ClassA implements IInterface
{
    /**
     * 
     * This is the original PHP Doc comment.
     * 
     * Lorem ipsum dolor.
     * 
     * @param string $string
     * 
     * @return ?string
     */
    
    public function setString($string = null)
    {
        $closure = function ($anotherString = null, $anotherInt = null) {
            return null;
        };
        return $string;
    }

}

class ClassB extends ClassA implements IInterface
{
    /**
     * method
     * 
     * @param string $string
     * 
     * @return ?string
     */
    
    public function setString($string = null)
    {
        return $string;
    }
    
    /**
     * method
     * 
     * @param int $int
     * 
     * @return int
     */
    
    public function setInt($int)
    {
        return $int;
    }
    
    /**
     * method
     * 
     * @return void
     */
    
    public function returnVoid()
    {
        return;
    }

}
/**
 * function
 * 
 * @param string $string
 * 
 * @return ?string
 */

function setString($string = null)
{
    return $string;
}

/**
 * function
 * 
 * @param int $int
 * 
 * @return int
 */

function setInt($int)
{
    return $int;
}

/**
 * function
 * 
 * @return void
 */

function returnVoid()
{
    return;
}
