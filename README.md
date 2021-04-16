### Вставновлення


1. Клонувати або завантажити репозиторій 'git clone'
1. [Встановлення залежностей](https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies) за допомогою команди `composer install`
1. Копіювати `.env.example` to `.env` та модифікувати з Вашими налаштуваннями (параметри підключення до БД і т.і.)
1. Згенерувати ключ

    ```bash
    php artisan key:generate
    ```
1. [Запустити міграції ](http://laravel.com/docs/8.x/migrations#running-migrations). Якщо ви хочете додати фейкові дані то додайте розширення `--seed` до команди що написана нижче.

    ```bash
    php artisan migrate
    ```
1. [Встановлення frontend залежностей](https://docs.npmjs.com/cli/install)  `npm install`
1. Зупустити командою `npm run dev`
1. Запустити сервер командою `php artisan serve`