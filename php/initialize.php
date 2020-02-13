<?php

require_once('functions.php');

function display()
{
    echo "hello ".$_POST["studentname"];
}
if(isset($_POST['submit']))
{
   display();
} 

?>