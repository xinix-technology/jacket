@extends('layout')

@section('actions')
@stop

@section('content')
	<div class="wrapper">
		<h1>Hello Friend!</h1>
		<p>You see me because you haven't override templates or default routes. May be this is your fist journey through the world of Bono. I wish you will enjoy and get comfortable to the world of productive application development.</p>
		<p>You can override the route from templates/static/index.php file. Or if you just want to override the template, you can override it from (or create new file at) templates/home.php.</p>
		<p>If you dont like the way your application looks like you can override the layout or implement custom theme.</p>
		<p>Best regards,<br />Bono &amp; Naked Team</p>
	</div>
@stop