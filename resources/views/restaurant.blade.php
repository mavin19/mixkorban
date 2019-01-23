@extends('layouts.master')
@section('title')
Restaurant	
@endsection
@section('staticfiles')
	<link href="{{ asset('css/res-css.css') }}" rel="stylesheet">
@stop('staticfiles')
@section('body')	  	
<div class="container-fluid">
	<div class="row" style="padding-left:20px;">
		<h2>Retaurants</h2>	
	</div>
	<div class="row">
		<div class="col-sm-2">
			<div id="filter" >
				Cuisines and Dishes
				<ul type="none">
					<li><input type="checkbox" name="khmer1">&nbsp;&nbsp;&nbsp; Khmer</li>
					<li><input type="checkbox" name="Italian1">&nbsp;&nbsp;&nbsp; Italian</li>
					<li><input type="checkbox" name="lao1">&nbsp;&nbsp;&nbsp; Lao</li>
					<li><input type="checkbox" name="thai1" >&nbsp;&nbsp;&nbsp; Thailand</li>
				</ul>
				<hr>
				Meals
				<ul type="none">
					<li><input type="checkbox" name="b1">&nbsp;&nbsp;&nbsp; Breakfast</li>
					<li><input type="checkbox" name="l1">&nbsp;&nbsp;&nbsp; Launch</li>
					<li><input type="checkbox" name="br1" >&nbsp;&nbsp;&nbsp; Brunch</li>
					<li><input type="checkbox" name="d1">&nbsp;&nbsp;&nbsp; Dinner</li>
				</ul>
				<hr>
				Price
				<ul type="none">
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 1$-20$</li>
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 50$-100$</li>
					<li><input type="checkbox">&nbsp;&nbsp;&nbsp; 100$</li>
				</ul>
			</div>
		</div>
	  	<div class="col-sm">

	  		<div class="row">
				<div class="col-sm">
				   	<img src="/image/1.jpg" width="300">
				   	<p>We cheer restaurant 
				   	and Bar</p>
				</div>
				<div class="col-sm">
				    <img src="/image/2.jpg" width="300">
				    <p>Rivercrown</p>
				</div>
				<div class="col-sm">
				    <img src="/image/3.jpg" width="300">
				    <p>Brown</p>
				</div>
	  		</div>	
			<div class="row">
				<div class="col-sm">
				    <img src="/image/4.jpg" width="300">
				    <p>Panorama</p>
				</div>
				<div class="col-sm">
				    <img src="/image/5.jpg" width="300">
				    <p>Teacher's guest house</p>
				</div>
				<div class="col-sm">
				    <img src="/image/6.jpg" width="300">
				    <p>cup cake store</p>
				</div>
	  		</div>
	  		<div class="row">
				<div class="col-sm">
				    <img src="/image/7.jpg" width="300">
				    <p>Tbal Khmer</p>
				</div>
				<div class="col-sm">
				    <img src="/image/8.jpg" width="300">
				    <p>Reak Reay Restaurant</p>
				</div>
				<div class="col-sm">
				    <img src="/image/9.jpg" width="300">
				    <p>myBurgerLab</p>
				</div>
			</div>
			<div>
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
</div>	
@endsection('body')