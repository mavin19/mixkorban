@extends('layouts.master')
@section('title')
Restaurant	
@endsection
@section('staticfiles')
	<link rel="stylesheet" href="{{asset('snippets/css/ion.rangeSlider.css')  }}"/>
	<link href="{{ asset('css/res-css.css') }}" rel="stylesheet">
@stop('staticfiles')
@section('body')	  	
<div class="container-fluid">
	<div class="row mb-4" style="padding-left:20px;">
		<h2>Retaurants</h2>	
	</div>
	<div class="row">
		<div class="col-sm-2">
			<form action="" method="get">
				<div id="filter" >
					<div class="filter-each">
						<p>Cuisine</p>
						<ul type="none">
							@foreach ($cuisines as $cuisine)
							
								<li>									
									<div><input type="checkbox" name="cuisines[]"></div>
									<div>{{$cuisine->name}}</div>
								</li>
							@endforeach

						</ul>
						<div class="filter-btn-wrapper">
							<button type="button">Submit</button>
						</div>
						<hr>
					</div>
					<div class="filter-each">
						<p>Meals</p>
						<ul type="none">
								@foreach ($meals as $meal)
							
								<li>									
									<div><input type="checkbox" name="meals[]"></div>
									<div>{{$meal->name}}</div>
								</li>
							@endforeach
						</ul>
						<div class="filter-btn-wrapper">
							<button type="button">Submit</button>
						</div>
						<hr>
					</div>
					<div class="filter-each">
						<p>Feature</p>
						<ul type="none">
								@foreach ($features as $feature)
								<li>
									<div><input type="checkbox" name="features[]"></div>
									<div>{{$feature->name}}</div>
								</li>
							@endforeach
						</ul>
						<div class="filter-btn-wrapper">
							<button type="button">Submit</button>
						</div>
						<hr>
					</div>
					<div class="filter-each">
						<p>Price</p>
						<div>
							<input type="text" class="js-range-slider" name="my_range" value="" />
						</div>
						<div class="filter-btn-wrapper">
							<button type="button" id="range-btn">Submit</button>
						</div>
					</div>
				</div>
			</form>
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
							<a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}"><img src="{{asset('storage/restaurant_imgs/'.$restaurant->getOneImgLoc()) }}" width="300"></a>
						</div>
						<p><a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}">{{ $restaurant->name }}</a></p>
						<div class="review_res">
							<div>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star checked"></span>
							</div>
							<div>158 reviews</div>
						</div>
					</div>
				</div>	
			@endforeach
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
	</div>
</div>	
@endsection('body')

@section('scripts')
<script src="{{ asset('js/restaurant.js') }}"></script>
<script src="{{asset('snippets/js/ion.rangeSlider.js')  }}"></script>
<script>

	$(".js-range-slider").ionRangeSlider({
		type: "double",
        min: 0,
        max: 1000,
        from: 200,
		to: 500,
		onChange: function(data){
			$('#range-btn').css('visibility','unset');
		}
	});
</script>
@endsection