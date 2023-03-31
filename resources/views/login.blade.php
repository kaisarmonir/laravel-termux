@extends('layouts.layout')
@section('title','learning')

@section('content')
<img src="/laravel/blog/public/img/img2.jpg" class="rounded-circle mx-auto d-block">
	<div class="container">
	<div class="row">
	
	<div class="col-md-8 offset-md-2"> 
		<div class="card">
			<div class="card-header">
				Login
			</div>
			<div class="card-body">
			<div class="form-group">
				<form action="{{route('login.submit')}}" method="post" >
				@csrf
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" name="email">
					
				</div>
			<div class="form-group">
				<label for="pass">
				Password
				</label>
				<input type="password" class="form-control" id="pass" name="pass">
			</div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  </form>
			</div></div>
	<div class="alert alert-success alert-dismissible fade show"> <button type="button" class="close" data-dismiss="alert">&times</button> <strong>Success!</strong> you're done.
	</div>
	
	<a href="/laravel/blog/public/">Go back</a>
	</div>
		</div>
	</div>
	@stop