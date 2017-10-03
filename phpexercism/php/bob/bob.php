<?php

class Bob {

function respondTo($string) {

    
    if (strchr($string, ".") == true || strchr($string, "!") == true) {
        $statement = 'statement';
    }
    
    if (strchr ($string, "?") == true){
        $statement = 'question';
    }
    
    if(strtoupper($string) == $string) {
        $statement = 'yell';
    }
    
    if(ctype_space($string)) {
        $statement = 'nonsense';
    }
   
   
    
    
    switch($statement) {
    case 'statement':
        $response = 'Whatever.';
        break;
    case 'nonsense':
        $response = 'Fine. Be that way!';
        break;
    case 'question':
        $response = 'Sure.';
        break;
    case 'yell':
        $response = 'Whoa, chill out!';
        break;

    }
    
    return $response;
}

}