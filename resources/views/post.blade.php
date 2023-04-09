@extends('layouts.layout')
@section('title','learning')

@section('content')
<div class="container">
	<img src={{url("/img/img1.jpg")}} class="rounded mx-auto d-block my-4">
	</div>
    
	<article>
	<?= $post   ?>
	</article>
    
	
	@stop