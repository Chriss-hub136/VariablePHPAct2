<?php

// user-defined functions 
function calculate( $a, $b, $command ): mixed {
      switch($command) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a + $b;
        default:
            return "invalid operation";
    }
 }

 echo calculate 

// echo sum123(5,3);
//built -in functions

//$str = "Hello, Websys";
// echo strlen($str);
?>