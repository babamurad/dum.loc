<?php
//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!=""))

{
        //$to = 'babamurad0305@gmail.com'; mail@dum-tm.com babamurad2010@yandex.com
        $to = 'mail@dum-tm.com, ofis@dum-tm.com, babamurad0305@gmail.com';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mmessage='
            <html>
                <head>
                    <title>Письмо с вашего сайта.</title>
                </head>
                <body>
                    <p>Имя: '.$name.'</p>
                    <p>Email: '.$email.'</p>
                    <p>Тема письма: '.$subject.'</p>
                    <p>Сообщение: '.$message.'</p>
                </body>
            </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
//        $headers .= "From: babamurad0305@gmail.com\r\n";
        $headers .= "From: mail@dum-tm.com\r\n";
        mail($to, $subject, $mmessage, $headers);
    }
?>
