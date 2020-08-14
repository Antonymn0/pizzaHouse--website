@extends('layouts.app')

@section('content')


<h2 class="text-center"> Pizza orders</h2>
<div class="container-fluid row p-auto m-auto "> 
         {{-- output piza orders to the screen --}}
        @foreach($pizzaOrders as $pizzaOrder)       
             <div class="card card-del complt-card    mr-3 mb-3"> 
                <div class="row container-fluid card-top bg-success text-white">                    
                   <p class="font-weight-bold text-left mr-3 pr-2 col-sm-6">  <strong>  {{$pizzaOrder -> name }} </strong></p>  
                   <p class="text-right float-right font-weight-bold text-dark pr-2 ml-2  mr-1 col-sm-4"> <i> #00 {{$pizzaOrder -> id }} </i> </p>
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
                <div class="container row"> 
                    <form method="POST" action="/pizzas/{{$pizzaOrder-> id}}" class="ml-2">
                        @csrf  
                        @method('DELETE')               
                        <input type="hidden" name="stamp" value='Complete_order'>                        
                        <input type="submit" class="btn btn-sm btn-success p-1" value="Complete order"> 
                     </form>
                    <form method="POST" action="/pizzas/{{$pizzaOrder-> id}}" class="ml-2">
                        @csrf  
                        @method('DELETE')               
                        <input type="hidden" name="stamp" value='Drop_order'>
                        <input type="submit" class="btn btn-sm btn-danger p-1" value="Cancel order"> 
                     </form>
                </div>
     </div>
            </div>
     


        @endforeach
    
</div>


@endsection