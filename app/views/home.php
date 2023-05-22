 
<h1>Home Page</h1>

<h5>Home page contents</h5>

Now open ' app/routes.php' and add a route to this file

Route::get ('home',function(){

return View::make('home');

});

