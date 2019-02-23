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
    <H1 class="p-5">Panorama</H1>
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
            <h6><i class="far fa-clock" style="color:red"></i> Close Now Hour | Cusine</h6>
            <div>Cambodia, vegetarian, friendly, vegan options</div>
            <div>Price | $$$$</div>
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

            <h6 ><i class="fas fa-home" style="color:green;"></i>
                Between Phsar Dey Hoy market and Angkor High School | Wat Damnak Villige, Sala Kamreuk
                Commune Siem Reap 17000, Cambodia
                All detail improve This Listing</h6>
            <h6 ><i class="fas fa-phone"style="color:green; padding-right:10px;"></i>+885 12 546 784  
                <i class="fas fa-globe-americas icon"></i>WWW.Mixkorban.com.kh 
                <i class="fas fa-bars icon"></i>Menu</h6>
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
                    <th scope="col-md-3">Average PricesAverage PricesAverage PricesAverage</th>
                </tr>
                <tr>
                    <th scope="col">Culsine</th>
                    <th scope="col-md-3">Average PricesAverage PricesAverage PricesAverage</th>
                </tr>
                <tr>
                    <th scope="col">Meals</th>
                    <th scope="col-md-3">Average PricesAverage PricesAverage PricesAverage</th>
                </tr>
                <tr>
                    <th scope="col">Restaurant Features</th>
                    <th scope="col-md-3">Average PricesAverage PricesAverage PricesAverage</th>
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
        <div class="row">
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Food</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Drink</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fry</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Draft</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Draft</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card" style="width: 15rem;">
                <img src="/image/panorama.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Draft</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
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