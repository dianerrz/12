@extends('layout')

@section('content')
<div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login')) -->
                
            <!-- @endif -->

            <div class="content">
                <div class="title m-b-md">
                    Laravels
                </div>
                <div class="top-right links">
                    <!-- @if (Auth::check()) -->
                        <a href="{{ url('/home') }}">Home</a>
                    <!-- @else -->
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    <!-- @endif -->
                </div>
            </div>
        </div>


@stop