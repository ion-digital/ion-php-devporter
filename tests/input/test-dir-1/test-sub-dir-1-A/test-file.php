<?php

namespace \A\Fake\Token;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IInterface {
    
    function setString(string $string): ?string;
    
}

class ClassA implements IInterface {
    
    public function setString(string $string): ?string {
        
    }
    
}

class ClassB extends ClassA implements IInterface {
    
    public function setString(string $string): ?string {
        
    }    
    
}

