<?php
    if (isset($_POST['btnEnviar'])) {

        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $message = $_POST['message'];
        $subject = "MENSAJE DE LA WEBSITE CEIT"
       
        $emailTo = 'website-ceit-contact@ce-itt.pucmm.edu.do';
        $headers = "From: ".$emailFrom;
        $txt = "Se ha recibido este mensaje de ".$name." desde la WEBSITE del CEIT.\n\n".$message;
       
        mail($emailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }
   
