@extends('layouts.app')

@section('content')


<h2 class="text-center">{{$title}}</h2>
<div class="container-fluid row  mt-3 p-auto m-auto completed_orders"> 
    {{-- output piza orders to the screen --}}
   @foreach($pizzaOrders as $pizzaOrder)       
       <div class="card card-del complt-card  mb-3  mr-2"> 
           <div class="row container-fluid card-top bg-success text-white">                    
              <p class="font-weight-bold text-left mr-3 pr-2 col-sm-6">  <strong>  {{$pizzaOrder -> name }} </strong></p>  
              <p class="text-right float-right font-weight-bold  pr-2 ml-2  mr-1 col-sm-4"> <i> #00 {{$pizzaOrder -> id }} </i> </p>
           </div>
          <div class=" p-3"> 
           <p> <span class="font-weight-bold">  Phone: &nbsp; </span> {{$pizzaOrder -> phone }}</p>
           <p> <span class="font-weight-bold"> Type: &nbsp; </span> {{$pizzaOrder -> type }} </p>   
           <p> <span class="font-weight-bold"> size: &nbsp; </span> {{$pizzaOrder -> size }} </p>
           <p> <span class="font-weight-bold"> Toppings: &nbsp; </span>   
                <ul class="list-unstyled ml-5"> 
                    <li> {{$pizzaOrder->toppings}}  </li>
                    <li>   </li>
                    <li>     </li>
                    </ul>
           </p>
           <div class="container row opct opacity-50"> 
              <input type="button" disabled class="border rounded btn-warning px-5 mt-2" value="Order completed!">  
           </div>
</div>
       </div>

   @endforeach

</div>


@endsection