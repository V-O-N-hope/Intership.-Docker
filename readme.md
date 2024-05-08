Task:

Создание базового Dockerfile для PHP-приложения:

Создайте Dockerfile, который использует образ PHP 8.1 в качестве базового.
Установите рабочий каталог приложения.
Скопируйте исходные файлы приложения в контейнер.
Откройте порт 80 для веб-сервера.
Запустите PHP-FPM в качестве основного процесса.

Требования:
ОС с установленым докером

Порядок выполнения: 
Запуск команд:

    * docker build -t my-php-app .
    * docker run -p 80:80 my-php-app

Если все хорошо, то [тут](http://localhost:80) вас ждет запущенный сайт

Ps: контейнер привязан к консоли