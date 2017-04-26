@extends('layouts.layout')
@section('content')
<form class="box">
    <div class="control has-addon">
        <input type="text" class="control-field" placeholder="Username">

        <span class="control-addon">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
    </div>

    <div class="control has-addon">
        <input type="email" class="control-field" placeholder="Email Address">

        <span class="control-addon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>
</form>
@stop