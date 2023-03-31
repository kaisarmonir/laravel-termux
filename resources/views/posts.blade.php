@extends('layouts.layout')
@section('title','learning')

@section('content')
<div class="container">
	<img src="/laravel/blog/public/img/img1.jpg" class="rounded mx-auto d-block my-4">
	</div>
    <?php foreach ($posts as $post) : ?>
	<article>
	<?= $post   ?>
	</article>
    <?php endforeach; ?> 
	
	@stop