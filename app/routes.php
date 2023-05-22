Route::get ('login',function(){

Return View::make ('login');

});

Route::post('logincheck', function(){

// username and password validation rule

$rules = array (

'username' => 'required|max:25',

'password' => 'required|max:25',

);

$v = Validator::make (Input::all (), $rules);

if ($v->fails()) {

// username or password missing

// validation fails

// used to retain input values

Input::flash ();

// return to login page with errors

return Redirect::to('login')

->withInput()

->withErrors ($v->messages ());

} else {

$userdata = array (

'username' => Input::get('username'),

'password' => Input::get('password')

);

If (Auth::attempt ($userdata)) {

// authentication success, enters home page

return Redirect::to('home');

} else {

// authentication fail, back to login page with errors

return Redirect::to('login')

->withErrors('Incorrect login details');

}

}

});
