<?php
if($_POST)
    {
    $to = "почта@mail.ru"; //куда отправлять письмо
    $from = 'почта@mail.ru'; // от кого
    $subject = "Проверка почты"; //тема
    $message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <почта@mail.ru>\r\n";
    $result = mail($to, $subject, $message, $headers);

    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['website'])) {
    $data =' The name: '. $_POST['name'] . ' - ' . $_POST['email'] . ' - ' . $_POST['phone'] . ' - ' . $_POST['website'] . "\n";
    $ret = file_put_contents('file_1.txt', $data, FILE_APPEND | LOCK_EX);
}
 
    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
    }
?>