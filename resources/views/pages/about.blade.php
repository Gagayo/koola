
@extends('layouts.default', ['title'=>'About'])

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>What is the {{ config('app.name') }}</h1>
				<p>koola is the best service in IT</p>
				<p class="alert alert-info"> This app has been built by @gagayo for learning porpuse</p>	
			</div>	
		</div>
	</div>
@stop