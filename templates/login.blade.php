@extends('skeleton1')

@section('pagetitle')
   Login to System
@endsection

@section('navbar')
@endsection

@section('sidebar')
@endsection

@section('skeleton')
	<div class="row">
		<div class="xlarge-4 large-4 medium-3 small-1 tiny-1">
			&nbsp;
		</div>
		<div class="xlarge-4 large-4 medium-6 small-10 tiny-10">
			<div id="login">
				@section('loginwording')
					<i class="xn xn-lock-open xn-5x"></i>
				@show
				<form method="POST" class="row">
					<input type="text" name="username" value="<?php echo @$entry['username'] ?>" placeholder="Username" />
					<input type="password" name="password" placeholder="Password" />
					<input type="submit" value="Login" class="button solid"/>
					<label class="placeholder"><input type="checkbox" class="checkbox"> Keep me sign in</label>
				</form>
			</div>
		</div>
		<div class="xlarge-4 large-4 medium-3 small-1 tiny-1">
			&nbsp;
		</div>
	</div>
@endsection