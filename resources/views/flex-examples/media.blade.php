@extends('layouts.layout')
@section('content')
	<div class="media media--box">
		<div class="media__left">
			<img src="http://placehold.it/50x50">
		</div>
		<div class="media__content">
			<h4>
				John Doe
			</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<form>
				<textarea></textarea>
				<div class="media__buttons">
					<button>Clear</button>
					<button>Publish</button>
				</div>
			</form>
		</div>
		<div class="media__right">
			<i class="fa fa-trash"></i>
		</div>
	</div>
@stop