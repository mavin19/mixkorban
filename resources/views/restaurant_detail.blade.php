@extends('layouts.master')

@section('title')
Restaurant Detail
@stop('title')

@section('staticfiles')
    
    <style>
        .checked {
        color: orange;
        }
        /* .center{
            display: flex;
            align-items: center;
            justify-content: center;

            /* text-align: center;
            align-self: center;
            margin: auto; */
        } 
        /* .gmap_canvas {
            overflow:hidden;
            background:none!important;
            style="float:right;
        } */
        .picture{
            margin-left: 120px;
        }
        .overview{
            padding-left: 20px;
            /* display: flex; */
        }
        .form{
            border:1px solid black;
            padding: 20px;
            margin-top: 20px;
        }
        .type_rating{
            
            margin-left:-30px;
        }
        .star{
            margin-left:10px;
        }
        .icon{
            color:green; 
            padding-right:10px;
            padding-left:10px;
        }
    </style>
@stop('staticfiles')
@section('body')
<div class="container">
    
    <div class="row m-5">
        <div class="col-6 ">
            <H1>{{$restaurant->name}}</H1>
        </div>
        <div class="col-6" style="text-align: end">
            <a class="btn-success" style="display:inline-block;border: 1px solid;padding: 5px 15px;" href="/userprofileupdate">Edit</a>
        </div>
    </div>
    <div class="row">
      <div class="col-4 ">
          <img class="img-responsive" src="/image/panorama.jpg" alt="Chania" width="500" height="355">
    </div>
      <div class="col-3 picture">
        <img class="/image/img-responsive" src="/image/chair.jpg" alt="Chania" width="285" height="180">
        <img class="/image/img-responsive" src="/image/cocktail.jpg" alt="Chania" width="285" height="175">
      </div>
      <div class="col-3 ">
            <img class="/image/img-responsive" src="/image/chair.jpg" alt="Chania" width="285" height="180">
            <img class="/image/img-responsive" src="/image/cocktail.jpg" alt="Chania" width="285" height="175">
      </div>
    </div>
  </div>
<div class="form container ">
    <div class="row">
     <div class="col-md-6">
        <h3>Overview</h3>
        <div class="overview">
            <h6>
                <i class="far fa-clock" style="color:red">
                    Close Now Hour |
                </i>
                @foreach($cuisines as $cuisine)
                    <span>{{$cuisine->name}} ,</span>
                @endforeach
            </h6>
            <div>
                @if($restaurant->veganOpt)
                    Vegantable
                @endif
            </div>
            <div>
                @foreach($meals as $meal)
                    <span>{{$meal->name}} ,</span>
                @endforeach
            </div>
            <div>
                @foreach($features as $feature)
                    <span>{{$feature->name}} ,</span>
                @endforeach
            </div>
            <div>
                Price | $$$$
            </div>
            <div class="row">
                <p style="padding-left:15px;">Rating </p>
                <p class="overview">Food</p>
                <div class="col" >
                    <span class="fa fa-star checked" style="margin-left:40px;"  ></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <div class="row ">
                        <p style=" margin-left:-30px;">Service</p>
                        <div class="col">
                            <span class="fa fa-star checked" style="margin-left:30px;"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <div class="row ">
                                <p style=" margin-left:-40px;">value</p>
                                <div class="col star">
                                    <span class="fa fa-star checked" style="margin-left:31px;"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <div class="row ">
                                        <p style="margin-left:-40px;">Environment</p>
                                        <div class="col star">
                                            <span class="fa fa-star checked" style="margin-left:-7px;"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h6><i class="fas fa-home" style="color:green;"></i>
                {{$restaurant->address}}
            </h6>
            <h6 >
                <i class="fas fa-phone"style="color:green; padding-right:10px;"></i>(+855) {{$restaurant->phoneNumber}}
                @if($restaurant->website)
                    
                    <i class="fas fa-globe-americas icon"></i>
                    <a href="{{$restaurant->website}}">{{$restaurant->website}}</a>
                @endif
            </h6>
        </div>
    </div>   
    <div class="col-3" style="float:right; margin-left:230px;"> 
        
        <iframe  width="300px" height="200px" id="gmap_canvas" src="https://maps.google.com/maps?q=phnom%20penh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://www.pureblack.de/webseite-erstellen-lassen/"></a>
        
    </div>
    </div>
</div>
    <div class="container">
        <h3 class="mt-3"><u><b>Detail</b></u></h3>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col-md-3">Average Prices</th>
                    <th scope="col-md-3">
                       sss
                    </th>
                </tr>
                <tr>
                    <th scope="col">Culsine</th>
                    <th scope="col-md-3">
                        @foreach($cuisines as $cuisine)
                            <span>{{$cuisine->name}} ,</span>
                        @endforeach
                    </th>
                </tr>
                <tr>
                    <th scope="col">Meals</th>
                    <th scope="col-md-3">
                        @foreach($meals as $meal)
                            <span>{{$meal->name}} ,</span>
                        @endforeach
                    </th>
                </tr>
                <tr>
                    <th scope="col">Restaurant Features</th>
                    <th scope="col-md-3">
                        @foreach($features as $feature)
                            <span>{{$feature->name}} ,</span>
                        @endforeach
                    </th>
                </tr>
                <tr>
                    <th scope="col">Open Hours</th>
                    <th scope="col-md-3">Average PricesAverage PricesAverage PricesAverage</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container fluid">
        <h3 class="mt-4"><b>You may also like</b></h3>
        <div class="row justify-content-center">
             @foreach($restaurants as $restaurant)
                <div class="card mr-5" style="width: 15rem;">
                    <a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}"><img class="card-img-top" alt="..." src="{{asset('storage/restaurant_imgs/'.$restaurant->getOneImgLoc()) }}"></a>
                    <div class="card-body">
                        <h5 class="card-title">
                                <span><a href="{{route('restaurant_detail',['id'=>$restaurant->id]) }}">{{ $restaurant->name }}</a></span>
                        </h5>
                        <p class="card-text">{{$restaurant->detail}}</p>
                    </div>
                </div>
            @endforeach
            
        </div>
        
    </div>
    <div class="card container mt-3">
        <div class="card-body">
            <h5 class="card-title"><u><b>Review :</b></u></h5>
            <button type="button" class="btn btn-success btn-sm float-right">Write a review</button>
            <p class="pl-5">5.0</p>
            <h4>Star Rating</h4>
            <span class="fa fa-star checked pl-2"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <p class="pl-2">Total: 1,890</p>
            <p class="float-right"> 1 - 10 of 1,890reviews</p><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pl-5">
                        <div>
                            <img src="/image/icon.png" alt="..." width="50" height="50">
                        </div>
                        <span>username</span>
                    </div>
                    <div class="col-md">
                        <p>review: </p>
                        <span class="fa fa-star checked pl-2"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <p>food is the food and drink is for drink we can't eat drink.</p>
                    </div>
                </div>
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
    <div class="container mapouter" style="margin-top:20px;" >
        <h3>Nearby</h3>
        <div class="gmap_canvas">
            <iframe  width="100%" height="300px" id="gmap_canvas" src="https://maps.google.com/maps?q=phnom%20penh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.pureblack.de/webseite-erstellen-lassen/"></a>
        </div>
    </div>
</body>
</html>
@endsection(body)