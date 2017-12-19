<?php
    
 if(isset($_POST['traffic']) && isset($_POST['url'])) {
    $data = "\n" . '{ ' . "\n"  . 'Адрес сайта: '. $_POST['url'] . "\n"  . 'Посещаемость: ' . $_POST['traffic']  . "\n" . 'Прогнозы по сбору базы данных подписчиков: ' . $_POST['collection_forecast'] ."\n" . 'Количество рассылок в месяц: ' . $_POST['mailing_lists']  . $_POST['custom_mailing_list'] ."\n" . 'Расчетный CTR:'. $_POST['ctr'] . $_POST['custom_ctr'] . "\n" . 'Конверсия в покупку %: ' . $_POST['conversion']."\n" . 'Доходность на одного покупателя сайта (у.е.): ' . $_POST['profit']  . "\n"  . ' } ';
    $ret = file_put_contents('file_1.txt', $data, FILE_APPEND | LOCK_EX);

}
 else {
   die('no post data to process');
}
    
?>