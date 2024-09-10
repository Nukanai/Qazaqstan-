<?php
// Получение IP-адреса клиента
$ip_address = $_SERVER['REMOTE_ADDR'];

// Сохранение IP-адреса в файл ips.txt в той же директории
file_put_contents('ips.txt', $ip_address . PHP_EOL, FILE_APPEND);

// Для отладки выводим IP-адрес
echo "IP-адрес сохранён: " . $ip_address;
?>
