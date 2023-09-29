## Тестовое задание для DROPSALE
<p>Асинхронные запросы реализовал как на JavaScript, так и с использованием jQuery</p>
<p>Запись в БД через upsert() для оптимизации скорости</p>
<p>В среднем на запрос к стороннему API уходит 3-4с,а на запись данных 4с</p>
<br>
<p>composer install</p>
<p>cp .env.example .env</p>
<p>php artisan key:generate</p>
<p>php artisan migrate</p>
<p>или</p>
<p>php artisan migrate:fresh</p>
