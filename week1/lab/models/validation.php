<?php

function isZipValid($zip)
{
  $regexZip = '/^[0-9]{5}$/';
   if (preg_match($regexZip, $zip))
   {
       return true;
   }
   return false;
}
function isDateValid($date)
{
    return (bool) strtotime($date);
}

function isEmailValid($email)
{
    
}