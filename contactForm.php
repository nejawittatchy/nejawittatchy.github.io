<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message']; 


    $email_from = 'nejawittatchy@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "Username: $name. \n".
                    "User Email: $email. \n".
                        "User Subject: $subject. \n".
                            "User Message: $message. \n";


    $to = "neja@sack.edu.lk";

    $headers = "From: $email_from \r \n";

    $headers = "Reply-To: $email \r \n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>