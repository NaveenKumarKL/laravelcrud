@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div> --}}
                

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Welcome
                </div>     
                <br><br>  
                             
                 
               <a class="btn btn-info" href="{{url('/view')}}">Dashboard</a>    
                   

               
                
            {{-- </div>
        </div>
    </div> --}}
</div>
@endsection
