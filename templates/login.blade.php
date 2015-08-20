@extends('skeleton1')

@section('pagetitle')
   Login to System
@endsection

@section('customcss')
   <link href="<?php echo Theme::base('vendor/naked2-theme/css/jacket.login.css') ?>" rel="stylesheet">
@endsection

@section('navbar')
@endsection

@section('sidebar')
@endsection

@section('body')
   <div id="login">
      @section('loginwording')
         <i class="xn xn-lock xn-5x"></i>
      @show
      <form method="POST" class="row">
         <input type="text" name="username" value="<?php echo @$entry['username'] ?>" placeholder="Username" />
         <input type="password" name="password" placeholder="Password" />
         <input type="submit" value="Login" class="button solid" />
         <label class="placeholder"><input type="checkbox" class="checkbox"> Keep me sign in</label>
      </form>
   </div>
@endsection