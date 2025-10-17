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

function pa {
    param([Parameter(ValueFromRemainingArguments = $true)] $args)
    php artisan @args
}
```

This command must be written in the bash profile depending on the system you are using!
first you have to open the notepad system using the command

```bash
Notepad $PROFILE
```

then you have to paste the above command in the notepad and save it.

Now after refreshing you terminal you can use `pa` instead of `php artisan`.

# what is acually migration and factory

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


# Eloquent: Relationships

Eloquent relationship has been a very intersting topic to learn and explore and why is that acually ?


- well one of thhe main reasons is that it makese the data management very easy and cool becuase it allows you do call some methods like what we do in `database sql` but in a very easy way.

- like for example if we have a `User` model and a `Post` model and we want to get all the
posts of a user we can do it like this:

```php
$user = App\Models\User::find(1);
$posts = $user->posts; // this will get all the posts of the user with id one
```

There for here you use the basic `php artisan tinker` to  run the above code and see the outcome in the terminal.


> [!TIP]
> there are Methods  for the relationships like `HasOne`, `HasMany`, `belongsTo`, `ManyToMany`, `OneToMany`, `OneToOne` etc.

---

# Pivot Tables in laravel Elequent

Pivot Tables are used to define many-to-many relationships between two or more models in Laravel

For example if we have a `User` model and a `Role` model and we want to define a many-to-many relationship between them we can use a pivot table called `Role_User`
This is called as a linked Table or junction table.

To create a pivot table we can use the following command

```bash
php artisan make:migration create_role_user_table --create=role_user
```
This command will create a migration file for the pivot table  `role_user`

Then we can define the columns of the pivot table in the migration file like this:

```php
Schema::create("role_user", function(Blueprint $table){
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('role_id')->constrained()->onDelete('cascade');
    $table->timestamps();
})
```

Finally we can run the migration using the following command:

```bash
php artisan migrate
```

*What do we mean with `constrained()->onDelete('cascade')`*

Well it means that when a record is deleted from a parent table the related ones in the pivot table will be deleted as well.

To define the many-to-many relationship in the models we can use the `belongsToMany` method like this:

```php
class User extends Model
{
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
```
```php
Class Role extends Model
{
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
```