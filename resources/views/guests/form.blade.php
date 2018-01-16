@extends('layouts.app')

@section('content')

<header class="header" id="responsive_header">
          <ul class="menu" id="responsive_menu">
            <li class="nav" id="menu_icon"><a href="javascript:void(0);" onclick="show_menu()">&#9776;</a></li>      
            <li class="nav">Hi {{ $first_name }} !</li>
            <li class="nav"><a href="{{ url('/') }}">HOME</a></li>
            <li class="nav"><a href="{{ route('guests') }}">DETAILS</a></li>           
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
    
    
<h2>{{ $responded == 'Y' ? 'Thank you for your response! ' . $message : '' }}</h2>
<div class="rsvp{{ $responded == 'Y' ? '_hide' : '' }}">
      <div class="medium-12 large-12 columns">
      <h1>~ RSVP ~ </h1>
      <form action="{{ route('rsvp_submit', [ 'guest_id' => $guest_id ]) }}" method="post"> 
          {{ csrf_field() }}
          <div class="medium-12  columns">
          <input type="radio" name="is_attending" value="Y" checked onclick="show()">Accept With Pleasure!
          <input type="radio" name="is_attending" value="N" onclick="hide()">Decline With Regret<br>
          </div>
          <div id="hide">
            <div class="medium-6  columns">
              <label>Number of Adults</label>
              <select name="number_adults">
              @foreach( $number_attendees as $number_attendee )
                            <option value="{{ $number_attendee }}" >{{ $number_attendee }}</option>
              @endforeach
              </select>
              <small class="error">{{$errors->first('number_adults')}}</small>
            </div>

            <div class="medium-6  columns">
              <label>Number of Children</label>
              <select name="number_children">
              @foreach( $number_attendees as $number_attendee )
                            <option value="{{ $number_attendee }}" >{{ $number_attendee }}</option>
              @endforeach
                          </select>
            </div>


            <div class="allergy">
              <label>Food Allergy/ Special Diet</label>
              <input name="food_allergy" type="text" value="{{ old('food_allergy') }}">
              
            </div>
          </div>
          <!-- <div class="email">
            <label>Email</label>
            <input name="email" type="text" value="{{ old('email') }}">
            <small class="error">{{$errors->first('email')}}</small>
          </div> -->
          <div class="medium-12  columns">
            <input value="SUBMIT" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection