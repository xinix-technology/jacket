@extends('skeleton1')

@section('pagetitle')
	Unautorized Access
@endsection

@section('customcss')
	<link href="<?php echo Theme::base('vendor/naked2-theme/css/jacket.login.css') ?>" rel="stylesheet">
@endsection

@section('navbar')
@endsection

@section('notification')
@endsection

@section('sidebar')
@endsection

@section('body')
	<div id="login">
		@section('loginwording')
			<i class="xn xn-ban xn-5x"></i>
		@show
		<p>You are not authorized to access this page.<br />Please login first to access this page.</p>
		<p><a href="<?php echo URL::site('/login').'?!continue='.\Bono\Helper\URL::redirect() ?>" class="button solid success">Login</a><br /><small>or <a href="javascript:history.back()">go back</a> to previous page.</small></p>
	</div>
@endsection