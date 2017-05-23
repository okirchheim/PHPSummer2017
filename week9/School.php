<?php
interface ISchoolModel
{
    function getColor($color);
    function getSize();
}
class School implements ISchoolModel {
    
Public function display()
{    
    try
    {
        $school = new school;
        $school = array
            (
                ":color" => $color,
                ":size" => $size,
                ":location" => $location
            );
        
    }
    catch (Exception $err)
    {
        
            
    }

    return $school;
    }
//custom exception class show example working, throwing, catching, and displaying
Public function customException($ex)
{
     if ( !is_Array($school) )
         {
            throw new Exception('Object is not an array');
        }
          try {
           throw new Exception('I am an exception.');
           
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
            
        }
        
        
        
        try {
            $dbConfig = array(
                "DB_DNS"=>'',
                "DB_USER"=>'',
                "DB_PASSWORD"=>''
            );
            
            $dbConfig = true;
            
           $db = new DB($dbConfig);
           $pdo = $db->getDB();
        
        }
        catch (ArrayException $e)
        {
            echo '<br /> Caught ArrayException: ',  $e->getMessage(), "\n";       
           
        }
        catch (DBException $e) {
            echo '<br /> Caught DBException: ',  $e->getMessage(), "\n";
        }
        
}

}

//create interface called school 2 methods color (parameter), size no parameters
//implements interface class school  return and echo out string


//input html stop echo from executing

// zip upload, page 1, send a value to page 2 via url only, page 2 will take, validate and test. 

//populate array with random numbers, size can be different, output using php template syntax. 5 and 10, random values

//class definition
//magic method, constructor
//namespaces and variations
//sessions
//exceptions
//default value parameters
//interfaces
//IS SET function
//php doc
//autload
//create class, how to handle within class
//custom exceptiomn
//proper interface and implement
//handle improper input
//pass results via url
//validation and output 
//array and looping through

