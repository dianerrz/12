@extends('layout')

@section('content')
<div class="top-right links">
    <!-- @if (Auth::check()) -->
        <a href="{{ url('/home') }}">Home</a>
    <!-- @else -->
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}">Register</a>
    <!-- @endif -->
</div>
                    
<div class="position-ref full-height">
            <!-- @if (Route::has('login')) -->
                
            <!-- @endif -->

            <div class="r">
                
             <center>
            <h2>Log in</h2>
                    <form>
                        <label>USERNAME</label>
                        <input type="text"/>
                        <br/>  
                        <label>PASSWORD</label>
                        <input type="password"/>
                        <input type="submit"></input>
                    </form>
                    </center>   
                
            </div>

        </div>


@stop