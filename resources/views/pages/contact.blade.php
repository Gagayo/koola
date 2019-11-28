
@extends('layouts.default', ['title'=>'Contact'])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			<div class="text-center">
				<h1>Get In Touch</h1>
				<p class="text-muted">if you having trouble with this service please <a href="mailto:{{ config('koola.admin_support_email') }}">ask for help</a></p>
			</div>
			<form action="{{ route('contact.store') }}" method="POST" novalidate="">
			  {{ csrf_field() }}
			  <div class="form-group @error('name') @enderror">
			    <label for="name" class="control-label">Name</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required" value="{{ old('name')}}">
			    {!! $errors->first('name', '<span>:message</span>') !!}
			  </div>
			  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
			    <label for="email" class="control-label">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required" value="{{ old('email')}}">
			    {!! $errors->first('email', '<span>:message</span>') !!}
			  </div>
			  <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
			  	<label for="message" class="control-label">Message</label>
			    <textarea name="message" class="form-control" placeholder="Message" cols="10" rows="10" required="required">{{ old('message')}}</textarea>
			    {!! $errors->first('message', '<span>:message</span>') !!}
			  </div>
			  <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
			</form>	
		</div>
	</div>
</div>
@stop