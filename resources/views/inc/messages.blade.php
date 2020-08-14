 {{-- checks for errors and outputs them to the screen --}}

@if(count($errors)) > 0)
    @foreach ($errors->all() as $error)
        <div class=" alert alert-danger container p-3 pl-5">
            {{$error}}
           
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success container p-2 pl-5">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger container p-2 pl-5">
        {{session('error')}}
    </div>
@endif