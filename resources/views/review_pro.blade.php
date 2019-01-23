@extends('layouts.master')

@section('title')
Restaurant Detail
@stop('title')

@section('staticfiles')
    
    <style>
        .checked {
        color: orange;
        }
        .bgnav{
        background-color: #A8F1B7 ;
        }
        .bgsignup{
            background-color: #FF8A8A;
        }
        /* .center{
            display: flex;
            align-items: center;
            justify-content: center;

            /* text-align: center;
            align-self: center;
            margin: auto; */
        } */
        .mapouter{
            height:400px;
            width:700px;
        }
        .gmap_canvas {
            overflow:hidden;
            background:none!important;
            height:350px;
            width:100%;
        }
       
    </style>
@stop('staticfiles')
@section('body')
<div class="container">
    <H1 class="p-5">Panorama</H1>
    <div class="row">
        <div class="col-md-7">
            <img class="img-responsive" src="/image/panorama.jpg" alt="Chania" width="500" height="355">
        </div>
        <div class="col-md-5">
            <img class="/image/img-responsive mb-2" src="/image/chair.jpg" alt="Chania" width="300" height="150">
            <img class="/image/img-responsive mt-5" src="/image/cocktail.jpg" alt="Chania" width="300" height="150">
        </div>
    </div> 
</div>
<div class="card container mt-3">
    <div class="card-body">
        <h5 class="card-title"><u>Overview</u></h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
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