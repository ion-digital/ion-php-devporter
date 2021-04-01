<?php

namespace \A\Fake\Token;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use \My\Classiness;
use \Throwable;

interface IInterface {
    
    function setString(string $string): ?string;
    
}

class ClassA implements IInterface {
    
    private const PRIVATE_CONSTANT = 1;
    protected const PROTECTED_CONSTANT = 2;
    public const PUBLIC_CONSTANT = 3;
    
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
    public function setString(string $string = null): ?string {
        
        $closure = function(string $anotherString = null, int $anotherInt = null) {
            return null;
        };
        
        return $string;
    }
    
}

class ClassB extends ClassA implements IInterface {
    
    public function setString(string $string = null): ?string {
        return $string;
    }    
    
    public function setInt(int $int): int {
        return $int;
    }
    
    public function returnVoid(): void {
        return;
    }
    
}

function setString(?string $string = null): ?string {
    return (string) $string;
}

function setInt(?int $int): int {
    return (int) $int;
}

function returnVoid(): void {
    return;
}

function setObject(?object $obj1, object $obj2): ?object {
	
	$obj = (object) $obj1;
	
	return (object) $obj1;
}

