<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; 


    $email_from = 'nejawittatchy@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Username: $name. \n".
                    "User Email: $email. \n".
                        "User Message: $message. \n";


    $to = "neja@sack.edu.lk";

    $headers = "From: $email_from \r \n";

    $headers = "Reply-To: $email \r \n";

    if(mail($to, $email_subject, $email_body, $headers)){
        header("Location: index.html");
    }else{
        $errorMessage = 'Oops, something went wrong. Please try again later';
    }

    

?>