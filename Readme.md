### Blogify-Laravel-app

## What I Learned

First things first, I learned that **`web.php`** in Laravel works like a router—it lets us handle **GET, POST, DELETE, and PATCH** requests, essentially controlling how the app responds to different actions. Alongside that, I explored **Artisan**, Laravel’s command-line tool (similar to Node.js for backend tasks), which I used for creating controllers, models, and other components quickly using commands like `php artisan make:controller` or `php artisan make:model`. You can even specify the folder where you want to install them, which is super handy.

I also learned about **Tinker**, which is like an SQL interface in the terminal. It allowed me to interact with the database directly, run queries, and test table relationships without opening a separate SQL client.

On the front-end side, I used **npm** to manage packages and scripts. To run the backend and frontend simultaneously, I used **concurrently**, which allowed Laravel and React to work together in real-time.

For the UI, I created a **Navbar component** and built **two pages**: a Home page and an About page. One of the more interesting challenges was making a **dynamic page title**, so that when I navigated between Home and About, the page would show which page I’m currently on. I learned how to pick a webpage and connect it to another page through routes and controllers, which helped me understand the flow between different pages in Laravel + React.

