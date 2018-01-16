@extends('layouts.app')

@section('content')
<header class="header" id="responsive_header">
    <ul class="menu" id="responsive_menu">
             <li class="nav" id="menu_icon"><a href="javascript:void(0);" onclick="show_menu()">&#9776;</a></li>   
             <li class="nav"><a href="{{ url('/') }}">HOME</a></li> 
             <li class="nav"><a href="{{ url('admin/guests/new') }}">CREATE NEW GUESTS</a></li>
             <li class="nav"><a href="{{ route('guests') }}">DETAILS</a></li>           
             <li class="nav"><a href="{{ route('rsvp') }}">RSVP</a></li>        
             <li class="login" id="responsive_login">
             <a href="{{ $logged_in == 1 ? route('logout') : route('login') }}"
                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          {{ $logged_in == 1 ? 'Logout' : 'Login' }}
            </a>
              <form id="logout-form" action="{{ $logged_in == 1 ? route('logout') : route('login') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
            
          </ul>
    </header>
    <!-- End Top Bar -->

    <br>
    
<h1>Guest List</h1>
<div class="guest_list">
<table>
    <tbody>
        <th>Guest Name</th>
        <th>Attendance</th>
        <th>Number of Adults</th>
        <th>Number of Children</th>
        <th>Food Allergy</th>
        <th>Email</th>   
    @foreach( $guests as $guest)
        
        <tr>
            <td>{{ $guest->first_name }} {{ $guest->last_name }}</td>
            <td>{{ $guest->is_attending }}</td>
            <td>{{ $guest->number_adults }}</td>
            <td>{{ $guest->number_children }}</td>
            <td>{{ $guest->food_allergy }}</td>
            <td>{{ $guest->email }}</td>            
        </tr>
    @endforeach
        <tr>
            <td></td>
            <td></td>
            <td>Adult Total: <b>{{ $total_adults }}</b></td>
            <td>Children Total: <b>{{ $total_children }}</b></td>
            <td></td>
            <td></td>   
        </tr>
    </tbody>
</table>
</div>
@endsection