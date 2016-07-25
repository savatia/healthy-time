<?php
  

    include("connect.php");

 $from = $_POST['from'];
 $to = $_POST['to'];
 $text = $_POST['text'];
 $date = $_POST['date'];
 $id = $_POST['id'];
 $linkId = $_POST['linkId']; //This works for onDemand subscription products
 
 
  //Manipulate the data as required

 
     $reg = "INSERT INTO `users`( `id`, `phonenumber`) 
                 VALUES ('$text', '$text')" ;
            $query= mysql_query($reg); 

?>
 