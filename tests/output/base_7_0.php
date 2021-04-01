<?php
namespace \A\Fake\Token;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use My\Classiness;
use Throwable;

interface IInterface
{
    /**
     * method
     * 
     * 
     * @return ?string
     */
    
    function setString(string $string);

}

class ClassA implements IInterface
{
    const PRIVATE_CONSTANT = 1;
    const PROTECTED_CONSTANT = 2;
    const PUBLIC_CONSTANT = 3;
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
    
    public function setString(string $string = null)
    {
        $closure = function (string $anotherString = null, int $anotherInt = null) {
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
     * 
     * @return ?string
     */
    
    public function setString(string $string = null)
    {
        return $string;
    }
    
    /**
     * method
     * 
     * 
     * @return int
     */
    
    public function setInt(int $int) : int
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
 * 
 * @return ?string
 */

function setString(string $string = null)
{
    return (string) $string;
}

/**
 * function
 * 
 * 
 * @return int
 */

function setInt(int $int) : int
{
    return (int) $int;
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

/**
 * function
 * 
 * 
 * @return ?object
 */

function setObject($obj1, $obj2)
{
    $obj = $obj1;
    return $obj1;
}
