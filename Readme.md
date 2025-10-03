### Blogify-Laravel-app

## What I Learned

First things first, I learned that **`web.php`** in Laravel works like a router—it lets us handle **GET, POST, DELETE, and PATCH** requests, essentially controlling how the app responds to different actions. Alongside that, I explored **Artisan**, Laravel’s command-line tool (similar to Node.js for backend tasks), which I used for creating controllers, models, and other components quickly using commands like `php artisan make:controller` or `php artisan make:model`. You can even specify the folder where you want to install them, which is super handy.

I also learned about **Tinker**, which is like an SQL interface in the terminal. It allowed me to interact with the database directly, run queries, and test table relationships without opening a separate SQL client.

On the front-end side, I used **npm** to manage packages and scripts. To run the backend and frontend simultaneously, I used **concurrently**, which allowed Laravel and React to work together in real-time.

For the UI, I created a **Navbar component** and built **two pages**: a Home page and an About page. One of the more interesting challenges was making a **dynamic page title**, so that when I navigated between Home and About, the page would show which page I’m currently on. I learned how to pick a webpage and connect it to another page through routes and controllers, which helped me understand the flow between different pages in Laravel + React.


## Updating and Deleting Data with Laravel Migrations and Factories

Here i have approached a way to update and delete the data using the migration and factory in laravel.
first off i have created a migration and factory using the artisan command

```bash
php artisan make:models Post -m -f
```

Here i use `-m` and `-f` to tell the terminal i have created a migration and a factory along with the model.

Using these methods and shortcuts boosted my learning and typing speed significantly.
Then i have added a shortcut command for the `php artisan`

```bash
alias pa="php artisan"
```

This command must be written in the bash profile depending on the system you are using!
first you have to open the notepad system using the command

```bash
Notepad $PROFILE
```

then you have to paste the above command in the notepad and save it.

Now after refreshing you terminal you can use `pa` instead of `php artisan`.

# what is acually migration and factory

Migrations are like version control for you database, allowing you to define and share the application in no time using the terminal and its Commands.

Factories are used to create fake data and manipulate the data in the database.

here are the `pa tinker` commands to create the data in the database

```php
App\Models\Post::factory()->count(5)->create(); // to create 5 fake data in the database
```

This command will create 5 fake data in the database using the factory we created earlier.

Now to update the data in the database we hop in `pa tinker` and use the following command

```php
App\Models\Job::updateJob(2, [
    'title' => 'Senior React Developer',
   'location' => 'Remote',
     'type' => 'Full-time'
 ]);
```

But what about deleting the data in the database? is there anyway to get the data deleted?

Yes there is a way to delete the data in the database using the following command

```php
App\Models\Job::deleteJob(3); // to delete the data with id 3
```

> [!IMPORTANT]
> Make sure you have the methods `updateJob` and `deleteJob` in your model.
