<?php

//include the database functions...
include "db.php";

//get info from the form. $_POST is a special PHP variable
//if ($_POST["title"] != "" && $_POST["content"] != "")
//{
  
  $title = htmlspecialchars($_POST["title"]);
  $content = htmlspecialchars($_POST["content"]);

  //create the new ASCII Art in the database
  echo CreateASCIIInDB($title,$content);
/*
  header("Location: index.php");
}
else
{
  header("Location: contribute.php");
}
*/

?>
