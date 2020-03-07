<?php
 
 $result="";
 if(isset($_POST['submit'])){
     require'phpmailer/PHPMailerAutoload.php';
     $mail = new PHPMailer;

     $mail->Host='smtp.gmail.com';
     $mail->Port=587;
     $mail->SMTPAuth=true;
     $mail->SMTPSecure='tls';
     $mail->Username='jan.otte.mailbox@gmail.com';
     $mail->Password='Aspenracingteam1';

     $mail->setFrom($_POST['email'],$_POST['name']);
     $mail->addAddress('jan.otte@hotmail.com');
     $mail->addReplyTo($_POST['email'],$_POST['name']);

     $mail->isHTML(true);
     $mail->Subject= 'Form Submission: ' .$_POST['subject'];
     $mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['msg'].'</h1>';

     if(!$_mail->send()){
        $result= "something went wrong. please try again.";
     } else {
        $result= "Thanks ".$_POST['name']."  for contacting us. we'll get back to you soon!";
     }

     
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-img p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-body">
                    <h5 class="text-center text-success"><?= $result; ?></h5>
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Naam en voornaam</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="jan.leroy@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Adres:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="address" placeholder="Gemeente, straat, nummer">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telefoonnummer:</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="number" placeholder="04758961">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Aanvraag:</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="msg" placeholder="Message sent to the employer"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit" id="submit">Verzenden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->