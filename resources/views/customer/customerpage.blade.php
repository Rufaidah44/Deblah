@extends('layouts.app')

@section('content')
@if (\Session::has('success'))
                <div>
                <p>{{\Session::get('success')}}</p>
                </div>
    @endif
    <h1>this is user personal page</h1>
    <p> this is the main users page {{ Auth::user()->name}}</p>
    <p><a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a></p>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endsection