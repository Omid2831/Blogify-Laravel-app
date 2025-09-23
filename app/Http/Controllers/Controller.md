## Using MVC in Laravel – GET Method

### What I Learned

I explored **how Laravel implements the MVC (Model-View-Controller) pattern** and how to handle GET requests. This helped me understand the flow of data from backend to frontend.

1. **Controller (C)**

   * Handles GET requests and gathers data to pass to the view.
   * Example: `HomepageController@index` retrieves meta data and messages from the backend:

   ```php
   public function index() {
       $data = [
           'meta' => [
               'title' => 'Homepage',
               'description' => 'Welcome to the homepage!',
           ],
           'messages' => null,
       ];
       return view('homepage.index', $data);
   }
   ```

2. **Route (R)**

   * Maps URLs to the controller method.

   ```php
   Route::get('/', [HomepageController::class, 'index'])->name('homepage');
   ```

3. **View (V)**

   * Displays the data passed from the controller using **Blade templates**.
   * Example of dynamic display with fallback:

   ```blade
   <h2>{{ $meta['description'] ?? 'No description available' }}</h2>

   @if($messages && count($messages) > 0)
       <ul>
           @foreach($messages as $message)
               <li>{{ $message }}</li>
           @endforeach
       </ul>
   @else
       <h1>There is nothing on the backend at the moment</h1>
   @endif
   ```

### Key Takeaways

* I learned **how a GET request flows**: Route → Controller → View.
* How to **pass a single “data package”** from the controller and extract it in Blade.
* How to **conditionally render data** in Blade templates.
* Gained a practical understanding of **Laravel’s MVC structure** in real application development.
