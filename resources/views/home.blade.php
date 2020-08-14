@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="text-center"> {{ __('Order processing') }}  </h5><br/>
                    <a href="/all_orders" class="btn btn-sm btn-success mr-2 mt-3"> View pizza orders </a> 
                    <a href="/Completed_Orders" class="btn btn-sm btn-success ml-2 mt-3"> Completed orders </a>
                    <a href="/deleted_Orders" class="btn btn-sm btn-success ml-2 mt-3"> Deleted orders </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
