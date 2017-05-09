<?php

/**
 * A method to check if a Post request has been made.
 *    
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/**
 * A method to validate a Phone number.
 *    
 * @return boolean
 */
function phoneIsValid($phone){
<<<<<<< HEAD
=======
    
     $phoneRegex = '/^\(?([2-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
    
     if (preg_match($phoneRegex, $phone))
     {return true;}
>>>>>>> origin/master
    return false;
}
