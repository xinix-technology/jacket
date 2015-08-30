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
						<h1>
							<a href="<?php echo URL::base() ?>">
								@section('applogo')
									<span class="logo">
										@section('applogo.image')
											<img src="<?php echo Theme::base('img/bono.png') ?>" alt="Bono" />
										@show
									</span>
									<span>
										@section('applogo.title')
											Bono
										@show
									</span>
								@show
							</a>
						</h1>
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
									<li><a href="{{ f('controller.url') }}" class="disable"><i class="xn xn-left-open"></i>{{ l('Back') }}</a></li>
									<li><a href="{{ f('controller.url', '/null/create') }}"><i class="xn xn-plus"></i>{{ l('New') }}</a></li>
									<li><a href="{{ f('controller.url') }}" class="disable"><i class="xn xn-pencil"></i> {{ l('Edit') }}</a></li>
								</ul>
							@show
							@section('tabssearch')
								<div class="tabsearch">
									@section('search')
										<div class="navsearch">
											<form action="" method="get">
												<i class="xn xn-search"></i>
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
										<li><a href="#" onclick="$('.navsearch, .tabbarArea').fadeToggle(100);"><i class="xn xn-search"></i> {{ l('Search') }}</a></li>
									@show
									@section('menudefault')
										<li><a href="{{ f('controller.url') }}"><i class="xn xn-arrows-ccw"></i></a></li>
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
							<ul class="topbar">
								<li class="sub notification">
									<a href="#">
										<i class="xn xn-bell"></i>
										<span class="badge solid round error">2</span>
									</a>
									<ul class="context-menu">
										<li><a href="#">Inbox</a></li>
										<li><a href="#">Trash</a></li>
										<li><a href="#">Deleted</a></li>
									</ul>
								</li>
								<li class="sub user">
									<a href="#">
										<span class="photo" style="background: #000"></span>
										<span>Admin</span>
										<i class="xn xn-down-open-mini"></i>
									</a>
									<ul class="context-menu right">
										<li><a href="#">Design</a></li>
										<li><a href="#">Web Design</a></li>
										<li><a href="#">Web Development</a></li>
										<li class="divider"></li>
										<li><a href="#">Illustrations</a></li>
										<li><a href="#">Designer</a></li>
									</ul>
								</li>
								<li class="devider"></li>
								<li><a href="#"><i class="xn xn-help-circled"></i></a></li>
							</ul>
						@show
					</div>
				</nav>
			@show

			@section('sidebar')
				<aside class="sidebar">
					<ul class="nav with-icon">
						<li><a href="<?php echo URL::base() ?>"><i class="icn-left xn xn-home"></i> Dashboard <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li class="devider"></li>
						<li><a href="<?php echo URL::base() ?>"><i class="icn-left xn xn-home"></i> Inbox <span class="icn-right badge round solid error">10</span></a></li>
						<li><a href="<?php echo URL::base('icons') ?>"><i class="icn-left xn xn-heart"></i> New Icons <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li class="devider"></li>
						<li><a href="<?php echo URL::base('table') ?>"><i class="icn-left xn xn-book-open"></i> Table View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('list') ?>"><i class="icn-left xn xn-menu"></i> List View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('grid') ?>"><i class="icn-left xn xn-layout"></i> Grid View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li class="devider"></li>
						<li><a href="<?php echo URL::base('detail') ?>"><i class="icn-left xn xn-newspaper"></i> Detail View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('form') ?>"><i class="icn-left xn xn-keyboard"></i> Form View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li class="devider"></li>
						<li><a href="<?php echo URL::base('user') ?>"><i class="icn-left xn xn-users"></i> User View <i class="icn-right xn xn-right-open-mini"></i></a></li>
						<li><a href="<?php echo URL::base('user') ?>"><i class="icn-left xn xn-vcard"></i> Role View <i class="icn-right xn xn-right-open-mini"></i></a></li>
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