@extends('layouts.app')

@section('content')

<div class="container-fluid row  "> 
    <form method="POST" action="/orderPizza" class="form-element form form-group border rounded p-3 container "> 
    @csrf
      <h2 class="text-center text-success">Order a pizza</h2> <br/>
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
@endsection