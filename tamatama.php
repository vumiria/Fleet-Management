 <?php
         $to      = "kibategasandrine7171@gmail.com"; // Send email to our user
                       $subject = 'Signup | Verification'; // Give the email a subject 
                        $message = 'Hello! you have created an IPRC Fleet Account

                        balsal
                        '; // Our message above including the link

                        $headers = 'From:  yves1iriho@gmail.com' . "\r\n"; // Set from headers
                    echo   mail($to, $subject, $message, $headers); //
        echo "all okay";
?>