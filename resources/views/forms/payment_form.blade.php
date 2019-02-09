
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
   <div class="alert alert-warning" role="alert">
      NOTE : You have to fill in your bill Information before you can post your restaurant
   </div>
   @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
   <div class="row-payment">
      <div class="col-75">
         <div class="container-payment">
            <form action="{{ route('payment_store') }}" method="POST">
               @csrf
               <div class="row-payment">
                  <div class="col-50">
                     <h3>Billing Address</h3>
                     <label for="fname"><i class="fa fa-user"></i> First Name</label>
                     <input required type="text" id="fname" name="firstname"  value="{{ old('firstname')}}"  placeholder="John M. Doe">

                     <label for="lastname">Last Name</label>
                     <input required type="text" id="lastname" name="lastname" value="{{ old('lastname')}}" >

                     <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                     <input required type="text" id="adr" name="address"  value="{{ old('address')}}"  placeholder="542 W. 15th Street">
                     
                     <label for="city"><i class="fa fa-institution"></i> City</label>
                     <input required type="text" id="city" name="city"  value="{{ old('city')}}"  placeholder="New York">

                     <div class="row-payment">
                        <div class="col-50">
                           <label for="state">State</label>
                           <input required type="text" id="state" name="state"  value="{{ old('state')}}"  placeholder="NY">
                        </div>
                        <div class="col-50">
                           <label for="zip">Zip</label>
                           <input required type="text" id="zip" name="zip" value="{{ old('zip')}}"  placeholder="10001">
                        </div>
                     </div>
                  </div>

                  <div class="col-50">
                     <h3>Payment</h3>
                     <label for="fname">Accepted Cards</label>
                     <div class="icon-container-payment">
                        <i class="fab fa-cc-visa" style="font-sieze:23px;color:navy;"></i>
                        <i class="fab fa-cc-mastercard" style="color:red;font-size:23px;"></i>
                     </div>
                     {{-- <label for="cname">Name on Card</label>
                     <input required type="text" id="cname" name="cardname" placeholder="John More Doe"> --}}

                     <label for="ccnum">Credit card number</label>
                     <input required type="text" id="ccnum" name="cardnumber"  value="{{ old('cardnumber')}}"  placeholder="1111-2222-3333-4444">
                     
                     <label for="expmonth">Exp Month</label>
                     <input required type="text" id="expmonth" maxlength="2" name="expmonth"  value="{{ old('expmonth')}}"  placeholder="September">
                     <div class="row-payment">
                        <div class="col-50">
                           <label for="expyear">Exp Year</label>
                           <input required type="text" id="expyear" maxlength="4" name="expyear"  value="{{ old('expyear')}}"  placeholder="2020">
                        </div>
                        <div class="col-50">
                           <label for="cvv">CVV</label>
                           <input required type="text" id="cvv" maxlength="3" name="cvv"  value="{{ old('cvv')}}"  placeholder="352">
                        </div>
                     </div>
                  </div>
               </div>
               <input type="submit" value="DONE" class="btn">
            </form>
         </div>
      </div>
   </div>
</div>
@endsection