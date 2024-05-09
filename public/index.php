<?php

$dockerServiceHostName = 'mysql'; 

$dockerServiceIP = gethostbyname($dockerServiceHostName);

if ($dockerServiceIP !== $dockerServiceHostName) {
    echo "Подключение к сети Docker выполнено. IP-адрес сервиса '$dockerServiceHostName' равен: $dockerServiceIP";
} else {
    echo "Не удалось подключиться к сети Docker.";
}