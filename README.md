## Тестовое задание для DROPSALE
<p>composer install</p>
<p>cp .env.example .env</p>
<p>php artisan key:generate</p>
<p>php artisan migrate</p>
<p>или</p>
<p>php artisan migrate:fresh</p>

Тестовое задание, вакансия PHP-fullstack разработчик
<br>
Общее описание задачи
<br>
В рамках тестового задания требуется реализовать функционал получения данных по api с последующим сохранением в базу данных. Дополнительно реализовать интерфейс взаимодействия для пользователей.
<br>
При нажатии на кнопку “импортировать пользователей” требуется отправить команду(запрос) на импортирование пользователей на сервер. 
<br>
На сервере нужно обработать запрос и выполнить импорт пользователей. После импорта требуется вернуть ответ с результатом:
сколько всего пользователей в базе
сколько было добавлено пользователей
сколько было обновлено пользователей
<br>
Для получения списка пользователей отправьте GET запрос https://randomuser.me/api/?results=5000. Документация: https://randomuser.me/documentation#multiple. Обязательным условием является установка параметра results=5000.
<br>
Ожидания по стеку используемых технологий
<br>
JS
PHP >8.0
Mysql 
Фреймворк Laravel(Symfony)
<br>
Детали задачи
<br>
Общий принцип работы
Пользователь открывает страницу с приложением и нажимает на кнопку “импортировать пользователей”
Фронтенд отправляет запрос на сервер
Сервер принимает запрос и запускает команду импорта
Команда импорта отпраляет запрос https://randomuser.me/api/?results=5000
Команда импорта обрабатывает полученный результат и сохраняет в БД(см. Структура базы данных и Обновление данных)
Сервер отдает результат выполнения команды(см. Содержание ответа сервера)
<br>
Обновление данных
Если в базе данных уже есть запись где совпадают first_name и last_name(с name.first и name.last из api запроса https://randomuser.me/api/?results=5000) то такую строку нужно обновить(email, age). В противном случае добавляем новую строку.
<br>
Содержание ответа сервера
сколько всего пользователей в базе
сколько было добавлено пользователей
сколько было обновлено пользователей
<br>
Интерфейс
В интерфейсе у нас имеется 1 кнопка и блок с текстовой информацией. Верстка произвольная, на оценку выполнения тестового задания не влияет.
Текстовая информация состоит из:
-  “Всего” - общее кол-во пользователей в базе
-  “Добавлено” - сколько пользователей было добавлено, после нажатия на кнопку “импортировать пользователей”. Дефолтное значение 0 (до нажатия на кнопку).
-  “Обновлено” - сколько пользователей было обновлено, после нажатия на кнопку “импортировать пользователей”. Дефолтное значение 0 (до нажатия на кнопку).
<br>
Рекомендации
<br>
Будет плюсом если интерфейс(фронтенд) будет работать без перезагрузки страницы.
Основной фокус задачи направлен на импорт большого кол-ва записей. Поэтому постарайтесь уделить особое внимание скорости вставки и обновления записей в базе данных.
Следует учесть что кол-во записей в базе данных со временем может достигать нескольких миллионов пользователей.
