
- Any AMP server (WAMP, XAMPP) with PHP version updated to **7.1** at least.
- [Composer](https://getcomposer.org/)

### Laravel Homestead way
- [Laravel Homestead](https://laravel.com/docs/5.4/homestead)

## Installation
1. Go to the folder where you will serve the web app, preferrably `htdocs` or `www` folder 
of your development enviroment.

2. Clone the repository.
    ```bash
    git clone https://github.com/RohmaAli/TeckQuiz.git
    ```

3. Change directory to the TeckQuiz folder
    ```bash
    cd TechQuiz
    ```

4. Copy **.env.example** file to **.env** and edit the database credentials there.

5. Install the dependencies of the app:
    ```bash
    composer install
    ````

6. Migrate the database:
    ```bash
    php artisan migrate
    ```
    Or if you want to use seeded data in addition of creating tables for testing:
    ```bash
    php artisan migrate --seed
    ```
7. Generate the application key
    ```bash
    php artisan key:generate
    ``` 
#### If you are not using Laravel Homestead:
- Serve the project to start the app on http://localhost:8000
    ```bash
    php artisan serve
    ```

## Starting from scratch
Assuming you have not seeded the database.
1. Before anything, make sure you have created a subject AND a teacher in the administrator account. (This can be found on the *Settings* panel)

2. Login to the teacher's account.

3. Create a new event quiz by clicking the tab in left sidebar *quiz events*.

4. you can view attempted quizzez by clicking button *view student list*


## Testing the web app with seeded database
1. Login to the teacher's account using `Teacher` as username and `password` as password.

2. Go to the `Quiz Events` panel then click on a quiz entry. This will direct you to the `Manage Quiz` page.

3. Enable the quiz by clicking `Enable Quiz`.

4. Logout then login as a student using `Student` as username and `password` as password.

5. Click `Start` on the quiz you have earlier enabled.
