
@extends('layouts.default', ['title'=>'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<div class="text-center">
				<h1>Get In Touch</h1>
				<p>if you having trouble with this service please <a href="#">ask for help</a></p>
			</div>
			<form action="#" method="POST">
			  {{ csrf_field() }}
			  <div class="form-group">
			    <label for="name" class="control-label">Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
			  </div>
			  <div class="form-group ">
			    <label for="email" class="control-label">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
			  </div>
			  <div class="form-group">
			  	<label for="message" class="control-label">Message</label>
			    <textarea name="message" class="form-control" placeholder="Message" cols="10" rows="10" required="required"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
			</form>	
		</div>
	</div>
</div>
@stop