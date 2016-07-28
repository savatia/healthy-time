<?php
  include("connect.php");
    // Reads the variables sent via POST from our gateway
    $sessionId   = $_POST["sessionId"];
    $serviceCode = $_POST["serviceCode"];
    $phoneNumber = $_POST["phoneNumber"];
    $text        = $_POST["text"];
    if ( $text == "" ) {
         // This is the first request. Note how we start the response with CON
         $response  = "CON Please select an option \n";
         $response .= "1. Register to Pambana \n";
         $response .= "2. Sexual Health Information \n";
         $response .= "3. Redeem your Points \n";
         $response .= "4. Invite a friend to Pambana \n";
         $response .= "5. Help";
        
    }
    else if ( $text == "1" ) {
      // Business logic for first level response
      //sql statement to insert

            $reg = "INSERT INTO `users`( `id`, `phonenumber`) 
                 VALUES ('$phoneNumber', '$phoneNumber')" ;
            $query= mysql_query($reg);

            if($query)
            {
              $response = "END Your registration was successful.We have stored your phone number" ;
            }

            else
            {
              $response = "END There was an error.This number is already registered";
            }

     }
     //Sexual Health Information option
     else if($text == "2") {
      // Business logic for second level response
      $response = "CON Please select an option you would like to know \n";
      $response .= "1. Contraceptive: Birth control, safe sex\n";
      $response .= "2. Facts About Sexual Health\n";
      $response .= "3. Myths About Sexual Health\n ";
      
     
      // This is a terminal request. Note how we start the response with END
     }
          else if ( $text == "2*3" ) {
      $response = "CON MYTHS\n";
         $response .= "1.You can catch an STD from a toilet seat.\n";
         $response .= "2.A lady can't get pregnant the first time she hs sex.\n";
         $response .= "3.A lady can't get pregnant during her period.\n";
         $response .= "4.If you get an STD once, you can never get it again.\n";
    }
    else if ( $text == "2*3*1" ){
        $response ="CON Sexually transmitted diseases or infections can't live outside the body for a long period of time.especially not on a cold, hard surface like a toilet seat.Plus, they aren't present in urine, anyway (it's usually sterile),so the chances of you catching one from whoever used the bathroom before you are slim to none";
    }

     // Redeem your points
      else if($text == "3") {
      // Business logic for second level response
      $response = "CON Please select an option \n";
      $response .= "1. Check your Points Balance\n";
      $response .= "2. Redeem points";
      // This is a terminal request. Note how we start the response with END
     }
       else if($text == "3*1") {
      // Business logic for second level response
      $response = "CON  Balance \n";
     /* $reg = "INSERT INTO `users`( `id`, `phonenumber`) 
                 VALUES ('$phoneNumber', '$phoneNumber')" ;
            $query= mysql_query($reg);

            if($query)
            {
              $response = "END Your registration was successful.We have stored your phone number" ;
            }

            else
            {
              $response = "END There was an error.This number is already registered";
            }
      // This is a terminal request. Note how we start the response with END*/
     }
     else if($text == "3*2") {
      $response = "CON Please select an option \n";
      $response .= "1. Redeem 50 points for Ksh.10 airtime.\n";
     }
      else if($text == "3*2*1") {
      $response = "CON Your points have been redeemed successfully.
                  You will receive airtime shortly \n";
      
     }
     //Invite a friend
       else if($text == "4") {
      // Business logic for second level response
      $response .= "CON Earn 50 Points just by Inviting a Friend to Pambana \n
     Enter Phone number\n";
      /* $reg = "INSERT INTO `users`( `id`, `phonenumber`) 
                 VALUES ('$phoneNumber', '$phoneNumber')" ;
            $query= mysql_query($reg);

            if($query)
            {
              $response = "END Your registration was successful.We have stored your phone number" ;
            }

            else
            {
              $response = "END There was an error.This number is already registered";
            }
      // This is a terminal request. Note how we start the response with END*/
    
     }
     //Help Information
          else if($text == "5") {
         $response = " CON HELP\n";
         $response .= "1.FAQ - Frequently Asked Questions.\n";
         $response .= "2. Contact Us\n";
}
          else if($text == "5*1") {
         $response = "CON HELP\n";
         $response .= "1. Who is Pambana\n";
         $response .= "2. Why do I need Sexual related Health Information \n";
         $response .= "3. How do I earn more points \n";
}
          else if($text == "5*1*1") {
       
         $response = "CON Pambana is a Health Access Platform which incentivizes the youth to access information on sexuality and sexual related health.\n";
}

    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;

    
    // DONE!!!
?>