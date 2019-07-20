<?php 
    if(isset($_POST['submit'])){
        $firstName= $_POST['firstName'];
        $lastName= $_POST['lastName'];
        $phone= $_POST['phone'];
        $subject= "Mail From Website";
        $email= $_POST['email'];
        $message= $_POST['message'];

        $mailTo="khalil.froughkmu@gmail.com";
        $headers= "From: ".$email;
        $text=" You have recieved an email from: ".$firstName.".\n\n".$message;

        mail($mailTo, $subject, $text, $headers);
        header("Location:index.php ");
    }

?>