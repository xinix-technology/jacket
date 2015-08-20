<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>
			@section('pagetitle')
				{{ f('page.title', 'Dashboard') }}
			@show
			- Bono
		</title>
		<meta name="description" content="{{ f('page.title', 'Great App') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo Theme::base('img/favicon.ico') ?>" type="image/x-icon">

		<link href="<?php echo Theme::base('css/app.min.css') ?>" rel="stylesheet">

		@section('customcss')
			<!-- Custom CSS -->
		@show

		<script type="text/javascript" src="<?php echo Theme::base('js/app.min.js') ?>"></script>

		@section('customjs')
			<!-- Custom JS -->
		@show

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="<?php echo Theme::base('js/app.ie.min.js') ?>"></script>
		<![endif]-->
	</head>
	<body class="@section('has-sidebar')
			has-sidebar
		@show">
		@section('skeleton')
			<!--[if lt IE 7]>
			@section('iewarning')
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			@show
			<![endif]-->

			@section('notification')
				{{ f('notification.show') }}
			@show

			@section('topbar')
				<nav class="nav-menu">
					<div class="pull-left">
						@section('applogo')
							<h1 class="brand"><a href="<?php echo URL::base() ?>"><span class="logo"><img src="<?php echo Theme::base('img/bono.png') ?>" width="32" height="32" alt="x" /></span> <span>Bono</span></a></h1>
						@show
					</div>
					<!-- <div class="search">
						@section('mainsearch')
							<div class="navsearch">
								<form action="" method="get">
									<i class="xn xn-search"></i>
									<input type="text" tabindex="-1" placeholder="{{ l('Main') }} {{ l('Search') }}" id="searchMenu" style="width:120px" />
								</form>
							</div>
						@show
					</div> -->
					@section('actions')
						<nav class="actions">
							@section('back')
								<ul class="flat left">
									<li><a href="{{ f('controller.url') }}" class="disable"><i class="icon icon-left-open"></i>{{ l('Back') }}</a></li>
									<li><a href="{{ f('controller.url', '/null/create') }}"><i class="icon icon-plus"></i>{{ l('New') }}</a></li>
									<li><a href="{{ f('controller.url') }}" class="disable"><i class="icon icon-pencil"></i> {{ l('Edit') }}</a></li>
								</ul>
							@show
							@section('tabssearch')
								<div class="tabsearch">
									@section('search')
										<div class="navsearch">
											<form action="" method="get">
												<i class="icon icon-search"></i>
												@section('searchinput')
													<input type="text" tabindex="-1" placeholder="{{ l('Main') }} {{ l('Search') }}" id="searchMenu" style="width:120px" />
												@show
											</form>
										</div>
									@show
									@section('tabs')
										<div class="tabbarArea">
											<a href="" class="button active">{{ l('tab 1') }}</a>
											<a href="" class="button">{{ l('tab 2') }}</a>
											<a href="" class="button">{{ l('tab 3') }}</a>
										</div>
									@show
								</div>
							@show
							@section('menu')
								<ul class="flat right">
									@section('menusearch')
										<li><a href="#" onclick="$('.navsearch, .tabbarArea').fadeToggle(100);"><i class="icon icon-search"></i> {{ l('Search') }}</a></li>
									@show
									@section('menudefault')
										<li><a href="{{ f('controller.url') }}"><i class="icon icon-arrows-ccw"></i></a></li>
									@show
									@section('menumore')
										@section('menumorecontent')
										@show
									@show
								</ul>
							@show
							<div class="clear"></div>
						</nav>
					@show
					<div class="pull-right">
						@section('usermenu')
							<ul class="flat topbar">
								<li class="notification">
									<a href="#"> <i class="icon icon-bell"></i> <span class="badge">2</span></a>
									<ul class="sub animated">
										<li><a href="#"><i class="xn xn-comment-o"></i>New Comment <span class="sub-badge pull-right">+5</span></a></li>
										<li><a href="#"><i class="xn xn-envelope-o"></i>New Message <span class="sub-badge pull-right">+2</span></a></li>
									</ul>
								</li>
								<li class="user">
									<a href="#">
										<span class="avatar"><i class="icon icon-user"></i></span> User<i class="icon icon-down-open"></i>
									</a>
									<ul class="sub animated">
										<li><a href="#"><i class="xn xn-user"></i> Profile</a></li>
										<li><a href="#"><i class="xn xn-cogs"></i> Settings</a></li>
										<li><a href="#"><i class="xn xn-sign-out"></i> Logout</a></li>
									</ul>
								</li>
								<li class="help"><a href="#"><i class="icon icon-help"></i></a></li>
							</ul>
						@show
					</div>
				</nav>
			@show

			@section('sidebar')
				<aside class="sidebar">
					<ul class="nav with-icon">
						<li>&nbsp;</li>
						<li><a href="<?php echo URL::base() ?>"><i class="icn-left icon icon-home"></i> Dashboard <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('icons') ?>"><i class="icn-left icon icon-heart"></i> New Icons <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo URL::base('table') ?>"><i class="icn-left icon icon-book-open"></i> Table View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('list') ?>"><i class="icn-left icon icon-menu"></i> List View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('grid') ?>"><i class="icn-left icon icon-layout"></i> Grid View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo URL::base('detail') ?>"><i class="icn-left icon icon-newspaper"></i> Detail View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('form') ?>"><i class="icn-left icon icon-keyboard"></i> Form View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li>&nbsp;</li>
						<li><a href="<?php echo URL::base('user') ?>"><i class="icn-left icon icon-users"></i> User View <i class="icn-right icon icon-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('user') ?>"><i class="icn-left icon icon-vcard"></i> Role View <i class="icn-right icon icon-right-open-mini"></i></a></li>
					</ul>
				</aside>
			@show

			@section('page')
				<main class="content @section('main.classes')
						has-contextual
					@show">

					@section('content')
						<div class="wrapper">
							@section('fields')
								&nbsp;
							@show
						</div>
					@show

					@section('contextual')
						<nav id="contextual">
							@section('contextual.content')
								&nbsp;
							@show
						</nav>
					@show
				</main>
			@show
		@show
	</body>
</html>