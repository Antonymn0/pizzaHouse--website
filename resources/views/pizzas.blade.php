@extends('layouts.app')

@section('content')
        <div class="flex-center position-ref ">
            <div class="content">
                <img src="/images/icon.png" alt="pizza-logo"/> <br/>
                <div class=" m-b-md i">
                     mn Pizza Restaurant <br/>
                     <a href="/all_orders" class="btn btn-sm btn-success mr-2 mt-3"> View pizza orders </a> 
                    <a href="/Completed_Orders" class="btn btn-sm btn-success ml-2 mt-3"> Completed orders </a>
                    <a href="/deleted_Orders" class="btn btn-sm btn-success ml-2 mt-3"> Deleted orders </a>
                    </div>
                
            </div>
        </div>
    
@endsection