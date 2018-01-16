@extends('layouts.app')

@section('content')
<header class="header">
          <ul class="menu">        
            <li class="login">
            <a href="{{ $logged_in == 1 ? route('logout') : route('login') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
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
<h1>Create a new guest</h1>
<div class="rsvp">
      <div class="medium-12 large-12 columns">
      <form action="{{ $update == 1 ? route('guest_update', [ 'guest_id' => 1 ]) : route('new_guest') }}" method="post"> 
          {{ csrf_field() }}
          <div class="medium-12  columns">
            <label>First Name</label>
            <input name="first_name" type="text" value="{{ old('first_name') }}">
          </div>

          <div class="medium-12  columns">
            <label>Last Name</label>
            <input name="last_name" type="text" value="{{ old('last_name') }}">           
          </div>

          <div class="medium-12  columns">
            <label>Password</label>
            <input name="password" type="text" value="{{ old('password') }}">           
          </div>

          <div class="medium-12  columns">
          <input type="radio" name="is_attending" value="Y" checked>Accept With Pleasure!
          <input type="radio" name="is_attending" value="N" >Decline With Regret<br>
          </div>
          
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


          <div class="medium-12  columns">
            <label>Food Allergy/ Special Diet</label>
            <input name="food_allergy" type="text" value="{{ old('food_allergy') }}">
            
          </div>

          <div class="medium-4  columns">
            <label>Email</label>
            <input name="email" type="text" value="{{ old('email') }}">
          </div>
          <div class="medium-12  columns">
            <input value="SUBMIT" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
@endsection