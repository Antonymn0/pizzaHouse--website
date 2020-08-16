@extends('layouts.app')

@section('content')
<h2 class="text-center text-success">Order a pizza</h2> <br />
<div class="container-fluid m-auto row mb-5 p-5 ">
    @foreach ($popularPizzas as $popularPizza)
    <div class="p-1 mb-2 col-sm-4">
        <form method="GET" action="/order_details" class="form card justify-content-center p-1 w-10">
            @csrf
            <div class="bg-dark  w-100">
                <img src="{{ asset('images/pizza2.jpg')}}" class="img-fluid w-100" />
                <h4 class="mt-2 p-2"> <strong> {{$popularPizza->type}} </strong> </h4>
                <input type="hidden" name="type" value='{{$popularPizza->type}}'>
            </div>
            <div class="row form-inline ml-2 mt-2">
                <label for="size"> Size: </label>
                <select name="size" id=size class=" col-sm-6 float-right ml-3 w-50">
                    <option name="size" value="Large" default> Select</option>
                    <option name="size" value="Large"> Large</option>
                    <option name="size" value="Medium"> Medium</option>
                    <option name="size" value="Small"> Small</option>
                </select>
            </div>
            <div class="p-2">
                <h5> Toppings </h5>
                <input type="checkbox" name="salad" id="" value="Salad" class="ml-3">Salad <br />
                <input type="checkbox" name="bacon" id="" value="bacon" class="ml-3"> Bacon <br />
                <input type="checkbox" name="cheese" id="" value="Extra cheese" class="ml-3 "> Extra cheese <br />
                <input type="checkbox" name="mushroom" id="" value="Mushrooms" class="ml-3"> Mushrooms <br />
            </div>
            <div class="justify-content-center row">
                <p class="text-center m-auto p-2 w-100"> <strong> KSH </strong> 950 </p> <br />
                <input type="hidden" name="pageID" value="createPizza">
                <input type="submit" class="btn btn-m btn-success text-center w-50 pr-3 pl-3 mb-2 mt-3"
                    value="Place Order" name="submit">
            </div>
        </form>
    </div>
    @endforeach

</div>



<div class="container p-3 pl-3 mb-3  alert-dark rounded text-center">
    <p class="ml-5 text-left container lead"> Cant find a tasty pizza on our menu? <br />
        Press the button below to find a custom pizza and we will prepare it for you.
    </p>
    <form class="form mb-3  p-2 " method="POST" action="/custom_pizza">
        @csrf
        <input type="hidden" value="pageId" name="createPizza">
        <input type="submit" class="btn btn-dark btn-m w-50 " value="Create custom pizza!">
    </form>
</div>





{{-- <div>
    <form method="POST" action="/orderPizza" class="form-element form form-group border rounded p-3 container "> 
    @csrf
      <h2 class="text-center text-success"></h2> <br/>
      <div class="form-group"> 
        <legend>   Personal details </legend>
        <label for='name'> Your Name </label>
        <input type="text" id="name"  name="name" class="form-control" required>
             <br/>
        <label for='email'> Email </label>
        <input type="email" id="email"  name="email" class="form-control" required>
                <br/>
         <label for='phone'> Phone number </label>
        <input type="text" id="phone"  name="phone" class="form-control" required>
                <br/>
        <label for='address'> Address </label>
        <input type="text" id="address"  name="address" class="form-control" required>
                <br/>
      </div>
      <div class="form-group">
            <legend> Type </legend>
            <select id="type" name="type" class="form-control w-50" required>
                <option> Magharita </option>
                <option> Hawiian </option>
                <option> Veggie </option>
                <option> Crunchy </option>
            </select>
        </div>
        <div class="form-group container row">

            <div class="col-sm-4 ">    
               <legend> Size </legend>
                <input type="radio" name="size" id="size" value="L"> Large </input>   <br/>
                <input type="radio" name="size" id="" value="M" > Medium </input>   <br/>
                <input type="radio" name="size" id="" value="S"> Small </input>     <br/>
            </div>
            <div class="col-sm-4 float-right">  
              <legend> Toppings </legend>
                <input type="checkbox" name="toppings" id="" value="More_Cheese" > More cheese <br/>
                <input type="checkbox" name="toppings" id="" value="Veggies"> Veggies  <br/>
                <input type="checkbox" name="toppings" id="" value="Crust"> Crust      <br/>
            </div>
            
       </div>
     
        <input type="submit"  class="btn btn-lg btn-success text-center ml-5 mt-3" value="Place Order" name="submit">
    </form>
</div>

</div> --}}
@endsection