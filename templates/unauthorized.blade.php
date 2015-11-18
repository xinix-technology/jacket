@extends('skeleton1')

@section('pagetitle')
	Unautorized Access
@endsection

@section('navbar')
@endsection

@section('notification')
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
					<i class="xn xn-lock xn-5x"></i>
				@show
				<p>You are not authorized to access this page.<br />Please login first to access this page.</p>
				<div class="button-area">
					<a href="<?php echo URL::site('/login').'?!continue='.\Bono\Helper\URL::redirect() ?>" class="button solid">Login</a>
				</div>
				<small>or <a href="javascript:history.back()">go back</a> to previous page.</small>
			</div>
		</div>
		<div class="xlarge-4 large-4 medium-3 small-1 tiny-1">
			&nbsp;
		</div>
	</div>
@endsection