<?php
namespace \A\Fake\Token;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
     * method
     * 
     * @param string $string
     * 
     * @return ?string
     */
    
    public function setString($string)
    {
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
    
    public function setString($string)
    {
    }

}