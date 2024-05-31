<?php
//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!=""))

{
        //$to = 'babamurad0305@gmail.com'; mail@dum-tm.com babamurad2010@yandex.com
        $to = 'mail@dum-tm.com, ofis@dum-tm.com, babamurad0305@gmail.com';        
        $phone = $_POST['phone'];       
        $mmessage='
            <html>
                <head>
                    <title>Заказ на звонок с вашего сайта.</title>
                </head>
                <body>
                    <p>Номер телефона: '.$phone.'</p>                                      
                </body>
            </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: babamurad0305@gmail.com\r\n";
        mail($to, $subject, $mmessage, $headers);
    }
?>