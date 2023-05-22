<h1>Sign In</h1>

@if ($errors->any ())

<ul>

{{implode ('', $errors->all ('<li>: message</li>'))}}

</ul>

@endif

{{Form::open (array ('url' => 'logincheck'))}}

<p> {{Form::text ('username', ‘‘, array ('placeholder'=>'Username','maxlength'=>30))}} </p>

<p> {{Form::password ('password', array('placeholder'=>'Password','maxlength'=>30)) }} </p>

<p> {{Form::submit ('Submit')}} </p>

{{Form::close ()}}
