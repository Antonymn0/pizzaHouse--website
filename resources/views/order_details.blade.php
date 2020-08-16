@extends('layouts.app')

@section('content')



<h2 class="text-center text-success"> Order details </h2>
<div>
    <form method="POST" action="/orderPizza" class="form-element form form-group border rounded p-3 container ">
        @csrf
        <h2 class="text-center text-success"></h2> <br />
        <div class="form-group">
            <legend class="text-success"> Personal details </legend>
            <label for='name'> Your Name </label>
            <input type="text" id="name" name="name" class="form-control" required>
            <br />
            <label for='email'> Email </label>
            <input type="email" id="email" name="email" class="form-control" required>
            <br />
            <label for='phone'> Phone number </label>
            <input type="text" id="phone" name="phone" class="form-control" required>
            <br />
            <label for='address'> Address </label>
            <input type="text" id="address" name="address" class="form-control" required>
            <br />
        </div>

        <h3 class="p-2 text-center  text-success "> Pizza details </h3>
        <div class=" row container border rounded p-3 justify-content-center m-auto ">
            {{-- output pizza details to the user --}}
            <div class=" col-sm-4 float-left">
                <div class="form-group">
                    <h4> Type </h4>
                    <i class="pl-2"> {{$pizzaDetails->type}} </i>
                    <input type="hidden" name="type" value=" {{$pizzaDetails->type}} "}
                </div>
                <div class=" ">
                    <h4> Size </h4>
                    <i class="pl-2"> {{$pizzaDetails->size}} </i>
                    <input type="hidden" name="size" value=" {{$pizzaDetails->size}} ">
                </div>
            </div> </div>
                <div class="col-sm-4 float-right">
                        <h4> Toppings </h4>
                        <ul class="list-unstyled">
                            @foreach ($pizzaDetails->toppings as $topping)
                                @if ( $pizzaDetails->toppings)
                                    <li class="pl-2"> <i> {{$topping}} </i> </li>
                                    <li> <input type="hidden" name="salad" value=" {{$topping}} "} </li>
                                @else
                                    <li> None </li>
                                @endif
                            @endforeach
                        </ul>
                </div>
            </div>
            <input type="submit" class="btn btn-lg btn-success text-center ml-5 mt-3 w-50" value="Checkout" name="submit">
        </div>
    </form>
</div>
@endsection