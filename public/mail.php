<?php
//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['email'])&&$_POST['email']!=""))

{
        $to = 'ofidum@mail.ru'; //mail@dum-tm.com babamurad2010@yandex.com
//        $to = ', ofis@dum-tm.com, babamurad0305@gmail.com';
        $subject = 'Заявка на расчет ставок с вашего сайта';
        $name_of_comp = $_POST['name_of_comp'];
        $email = $_POST['email'];
        $railcar_owner = $_POST['railcar_owner'];
        $depart_station = $_POST['depart_station'];
        $name = $_POST['name'];
        $railcar_type = $_POST['railcar_type'];
        $destin_station = $_POST['destin_station'];
        $ter_exp = $_POST['ter_exp'];
        $cargo_name = $_POST['cargo_name'];
        $cargo_code = $_POST['cargo_code'];
        $cargo_weight = $_POST['cargo_weight'];
        $message='
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Наименование компании:'.$name_of_comp.'</p>
                    <p>Email: '.$email.'</p>
                    <p>Имя: '.$name.'</p>
                    <p>Принадлежность вагона: '.$railcar_owner.'</p>
                    <p>Тип вагона: '.$railcar_type.'</p>
                    <p>Станция отправления: '.$depart_station.'</p>
                    <p>Станция назначения: '.$destin_station.'</p>
                    <p>Территория экспедирования: '.$ter_exp.'</p>
                    <p>Наименование груза: '.$cargo_name.'</p>
                    <p>Код груза: '.$cargo_code.'</p>
                    <p>Вес: '.$cargo_weight.'</p>
                </body>
            </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: ofidum@mail.ru\r\n";
        mail($to, $subject, $message, $headers);
    }
?>
