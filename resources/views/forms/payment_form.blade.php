
@extends('layouts.master')
@section('title')
Payment
@endsection

@section('staticfiles')
   <link rel="stylesheet" href="{{ asset('css/payment_form.css') }}">
@endsection


@section('body')
<div class="container">
   <h2>Payment Information</h2>
   <div class="row-payment">
      <div class="col-75">
         <div class="container-payment">
            <form action="/action_page.php">
               <div class="row-payment">
                  <div class="col-50">
                     <h3>Billing Address</h3>
                     <label for="fname"><i class="fa fa-user"></i> First Name</label>
                     <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                     <label for="lastname">Last Name</label>
                     <input type="text" id="lastname" name="lastname" >
                     <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                     <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                     <label for="city"><i class="fa fa-institution"></i> City</label>
                     <input type="text" id="city" name="city" placeholder="New York">

                     <div class="row-payment">
                        <div class="col-50">
                           <label for="state">State</label>
                           <input type="text" id="state" name="state" placeholder="NY">
                        </div>
                        <div class="col-50">
                           <label for="zip">Zip</label>
                           <input type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                     </div>
                  </div>

                  <div class="col-50">
                     <h3>Payment</h3>
                     <label for="fname">Accepted Cards</label>
                     <div class="icon-container-payment">
                        <i class="fab fa-cc-visa" style="color:navy;"></i>
                        <i class="fab fa-cc-mastercard" style="color:red;"></i>
                     </div>
                     {{-- <label for="cname">Name on Card</label>
                     <input type="text" id="cname" name="cardname" placeholder="John More Doe"> --}}

                     <label for="ccnum">Credit card number</label>
                     <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                     
                     <label for="expmonth">Exp Month</label>
                     <input type="text" id="expmonth" maxlength="2" name="expmonth" placeholder="September">
                     <div class="row-payment">
                        <div class="col-50">
                           <label for="expyear">Exp Year</label>
                           <input type="text" id="expyear" maxlength="4" name="expyear" placeholder="2020">
                        </div>
                        <div class="col-50">
                           <label for="cvv">CVV</label>
                           <input type="text" id="cvv" maxlength="3" name="cvv" placeholder="352">
                        </div>
                     </div>
                  </div>
               </div>
               <input type="submit" value="DONE" class="btn">
            </form>
         </div>
      </div>
   {{-- <div class="col-25">
      <div class="container-payment">
         <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
         <p><a href="#">Product 1</a> <span class="price">$15</span></p>
         <p><a href="#">Product 2</a> <span class="price">$5</span></p>
         <p><a href="#">Product 3</a> <span class="price">$8</span></p>
         <p><a href="#">Product 4</a> <span class="price">$2</span></p>
         <hr>
         <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
   </div> --}}
   </div>
</div>
@endsection