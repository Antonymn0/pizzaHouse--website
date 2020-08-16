
@extends('layouts.app')

@section('content')


 <h2 class='text-center p-3'> Custom Pizzas </h2>
<div class="container row m-auto">
   
     @foreach($data as $item)
       <div class="  col-sm-6 mb-3 p-1">
           <form class="form border rounded p-2" method="GET" action="/order_details">
                @csrf
                {{-- output image and title --}}
                <img src="{{ $item['recipe']['image']}}" alt="pizza image" class="img-fluid w-100 mb-2">
                <div class="bg-dark w-100 p-2" >
                    <h3> {{$item['recipe']['label']}}  </h3>
                    <input type="hidden" name="type" value="{{$item['recipe']['label']}}">
                    <p> <span>
                            Source - 
                            <a href="{{$item['recipe']["url"]}}"  > 
                                {{$item['recipe']["source"]}}
                            </a>  
                        </span> 
                        <span> 
                            <a href="{{$item['recipe']["url"]}}"  
                                class=" alert-primary badge rounded p-2 mr-3 float-right"> 
                                
                                See full recipe >>
                            </a>
                        </span>
                    </p>
                </div>


                <p class="accordion m-0"> <u class="pr-3 pl-3 text-white"> <span class="bg-dark text-white p-2"> Ingridients   </span> </u></p>
                <div class="panel rounded bg-dark w-100">
                    <ol> 
                        {{-- output ingridients --}}
                        @foreach ($item['recipe']["ingredientLines"] as  $ingridient) 
                        <li> {{$ingridient}} </li>
                        @endforeach
                    </ol>
                </div>
                
                







               {{--   <h4> Ingridients </h4>
                 <ol> 
                    {{-- output ingridients --}
                    @foreach ($item['recipe']["ingredientLines"] as  $ingridient) 
                    <li> {{$ingridient}} </li>
                    @endforeach
                </ol> --}}
                <h5>Health labels </h5>
                <p> 
                    {{-- output health label --}}
                    @foreach ($item['recipe']["healthLabels"] as $item)
                        <span class='label badge  badge-success  alert-success'> {{$item}} </span>
                    @endforeach
                </p>


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



                <div class='text-center mr-3 ml-3'> 
                    <p class='text-success'> <strong> KSH 1800 </strong> </p>
                    <input type="hidden" name="pageID" value="customPizza">
                    <button class='btn btn-success btn-lg align-items-center w-100  '> Place Special order! </button>
                </div> 
            </form>    
        </div>
   @endforeach
    

</div>
@endsection