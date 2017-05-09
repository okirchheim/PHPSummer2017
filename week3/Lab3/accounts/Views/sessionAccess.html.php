<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] <= 0 )
        {
            EXIT("YOU'RE NOT ALLOWED");
        }           
       
        else
        {
            echo 'Youre in';
        }