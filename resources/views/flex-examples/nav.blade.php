@extends('layouts.layout')
@section('content')
<nav class="nav">
	<div class="nav__left"> 
		<a href="" class="nav__item">
		<i class="fa fa-home" aria-hidden="true"></i>
		Home</a>
		<a href="" class="nav__item">
			<i class="fa fa-info-circle" aria-hidden="true"></i>
			About
		</a>
		<a href="" class="nav__item"><i class="fa fa-plus-circle" aria-hidden="true"></i>Services</a>
	</div>
	<div class="nav__center">
		<a href="" class="nav__item">
		<i class="fa fa-facebook-square" aria-hidden="true"></i>
		Facebook
		</a>
		<a href="" class="nav__item">
		<i class="fa fa-twitter-square" aria-hidden="true"></i>
		Twitter</a>
	</div>
	<div class="nav__right">	
		<a href="" class="nav__item">
		<i class="fa fa-user-plus" aria-hidden="true"></i>
		Sign Up</a>
		<a href="" class="nav__item">
		<i class="fa fa-sign-in" aria-hidden="true"></i>
		Sign In
		</a>
	</div>
</nav>
@stop