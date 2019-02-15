@extends('layouts.master')
@section('title')
Restaurant	
@endsection
@section('staticfiles')
	<link href="{{ asset('css/res-css.css') }}" rel="stylesheet">
@stop('staticfiles')
@section('body')	  	
<div class="container-fluid">
	<div class="row mb-4" style="padding-left:20px;">
		<h2>Retaurants</h2>	
	</div>
	<div class="row">
		<div class="col-sm-2">
			<div id="filter" >
				<p>Cuisines and Dishes</p>
				<ul type="none">
					<li><input type="checkbox" name="khmer1">&nbsp;&nbsp;&nbsp; Khmer</li>
					<li><input type="checkbox" name="Italian1">&nbsp;&nbsp;&nbsp; Italian</li>
					<li><input type="checkbox" name="lao1">&nbsp;&nbsp;&nbsp; Lao</li>
					<li><input type="checkbox" name="thai1" >&nbsp;&nbsp;&nbsp; Thailand</li>
				</ul>
				<hr>
				<p>Meals</p>
				<ul type="none">
					<li><input type="checkbox" name="b1">&nbsp;&nbsp;&nbsp; Breakfast</li>
					<li><input type="checkbox" name="l1">&nbsp;&nbsp;&nbsp; Launch</li>
					<li><input type="checkbox" name="br1" >&nbsp;&nbsp;&nbsp; Brunch</li>
					<li><input type="checkbox" name="d1">&nbsp;&nbsp;&nbsp; Dinner</li>
				</ul>
				<hr>
				<p>Price</p>
				<ul type="none">
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 1$-20$</li>
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 50$-100$</li>
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 100$</li>
				</ul>
			</div>
		</div>
	  	<div class="col-sm" id="all_res_container">
			@php($num_of_col = 1)
			@php($first_loop = true)

			<div class="row"> 		
			@foreach ($restaurants as $restaurant)

			{{-- handle creating new row if a row already has 3 column --}}
				@if($num_of_col > 3)
					{!! '</div>' !!}
					{!! "<div class='row'>" !!} 
					@php($num_of_col = 1)
					@php($first_loop = false)
				@endif
				@php($num_of_col++)


				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<a href="#"><img src="storage/{{ $restaurant->getOneImgLoc() }}" width="300"></a>
						</div>
						<p><a href="#">{{ $restaurant->name }}</a></p>
						<div class="review_res">
							<div>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>	
			@endforeach
			</div>
			{{-- <div class="row">
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="res_container">
						<div class="res_img_crop">
							<img src="/image/1.jpg" width="300">
						</div>
						<p>We cheer restaurant and Bar</p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-5">
			<nav aria-label="Page navigation example">
				<ul class="pagination pagination-sm justify-content-center pt-5">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>	
@endsection('body')