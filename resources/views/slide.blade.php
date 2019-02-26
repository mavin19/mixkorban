<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Prism Effect Slider</title>
  
  
<!-- <link rel='stylesheet' href='https://tympanus.net/Tutorials/PrismEffectSlider/css/demo.css'> -->
<link rel='stylesheet' href='https://tympanus.net/Tutorials/PrismEffectSlider/css/component.css'>

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

  <html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!--[if IE]>
  		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="demo-3">
		<div class="container slide-container">
			<div class="content">
				<!-- Start Demo -->

				<div class="cache">
					masks 
					<img src="https://tympanus.net/Tutorials/PrismEffectSlider/img/masks/cube-a.svg"> -->
					<img src="https://tympanus.net/Tutorials/PrismEffectSlider/img/masks/cube-b.svg">
					<img src="ihttps://tympanus.net/Tutorials/PrismEffectSlider/img/masks/cube-c.svg">
					photos
					<img src="/image/restaurant1.jpg">
					<img src="/image/restaurant2.jpg">
					<img src="/image/restaurant3.jpeg">
					<img src="/image/cocktail.jpg">
				</div>

				<div class="wrapper">
					<div class="prism-slider prism-slider--left">
						<ul class="navigation"></ul>
					</div>
					<div class="copy copy--left">
						<article>
							<h2>{{$restaurant->name}}</h2>
							<p>
								{{$restaurant->detail}}
							</p>
						</article>
					</div>
				</div>

				<!-- End Demo -->
			</div>
			
		</div><!-- /container -->


	</body>
</html>
<script src='https://tympanus.net/Tutorials/PrismEffectSlider/js/PrismSlider.js'></script>
<script src='https://tympanus.net/Tutorials/PrismEffectSlider/js/utils/easing.js'></script>
<script src='https://tympanus.net/Tutorials/PrismEffectSlider/js/utils/rAF.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

<script src="{{ asset('js/index.js') }}"></script> 
</body>

</html>
