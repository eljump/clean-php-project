# Создать новый проект на php.

Это проект создан для быстрого разворачивания среды для разработки на __PHP__.
Данный репозиторий создан для личного удобства, однако я не против если кто-то им воспользуется,
т.к. представленные здесь шаги и код не унмкальны и созданы исключительно для экономии времени.

В первую очередь необходимо склонировать весь репозиторий, внести изменения если требуется (описаны ниже) 
и запушить в новый репозиторий.

В первую очеред необходимо раскомментировать или удалить некоторые строчки конфигурационных файлов, 
в зависимости от требуемых технологий. Так же вы можете указать в них требующиеся версии и дополнить под свои нужды.  

Список файлов:
1. Отредактировать файл `docker/php-fpm/Dockerfile`
2. Отредактировать файл `docker/php-fpm/php.ini`
3. Отредактировать файл `docker-compose.yml`
4. Если требуется отредактировать файл `docker/nginx/hosts/dev.site.conf`

Так же, если требуется, добавить свой дамп базы данных в `docker/mysql/dump/dump.sql` 

Запуск:  
1. Скопировать файл `.env.example` в `.env` и заполнить пустые значения
2. Отредактировать файл `composer.json` (обратите внимание, возможно вам требуются не все зависимости
так же необходимо изменить название проекта и настроить автозагрузчик)
3. Вызвать `docker-compose up -d`
4. Зайти в контейнер php и установить зависимости:  
```
docker exec -it php-app bash
composer install
```
* `php-app` - имя контейнера по умолчанию, указанное в `docker-compose.yml`, вы можете указать свое 
или использовать вместо него __CONTAINER ID__

В папке `public` находиться точка входа.  
В папке `src` код прилодения.
Это основные папки для работы.

Проверьте доступность служб по пути: `http://localhost`
Вы так же можете добавить в файл `hosts` (файл в вашей ОС, а не в проекто) домен `dev.site` (по умолчанию).