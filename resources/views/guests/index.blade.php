@extends('layouts.app')

@section('content')

<header class="header" id="responsive_header">
    <ul class="menu" id="responsive_menu">
            <li class="nav" id="menu_icon"><a href="javascript:void(0);" onclick="show_menu()">&#9776;</a></li>      
            <li class="nav">Hi {{ $first_name }} !</li>
            <li class="nav"><a href="{{ url('/') }}">HOME</a></li>  
            <li class="nav"><a href="{{ route('rsvp') }}">RSVP</a></li>        
            <li class="login" id="responsive_login">
            <a href="{{route('logout')}}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ $logged_in == 1 ? 'Logout' : ' ' }}
             </a>
        <form id="logout-form" action="{{ route('logout') }}" 
        method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
            </li>
            
          </ul>
    </header>
    <!-- End Top Bar -->

    <br>
<h4 class="after_submit">{{ $form_submit == 0 ? '' : 'Thank you for your response!' }}</h4>
     

<div class="details">
    <h1> ~ Reception ~ </h1>
    <h3>Saturday, August 25, 2018</h3>
    <h3>2:00PM</h3>
    <h3>Attire: Casual</h3>

    <h1>~ Accomodations ~</h1>
    <div class="accomodations">
        We do not have any holtes that we have special offers for this time.<br>
        You can find so many hotels in Seattle. But please keep in mind that hotel rates get higher in Summer
        as it is the tourist season in Seattle.<br>
        You may also want to consider <a href ="https://www.airbnb.com/s/Seattle--WA" target="_blank"><u>Airbnb</u></a>
        to expand your options.
    </div>


    <h1>~ Travel And Transportation ~</h1>
    <div>
        Downtown Seattle is located about 13 miles North of Seattle-Tacoma Intrnational Airport.<br>
        Getting around Seattle is pretty easy with the buses, street car, monorail, and light rail.
    </div>
    <div class="travel_and_transportation">
        Visit <a href="https://www.visitseattle.org/visitor-information/getting-around/" target="_blank">
        <u>visitseattle.org</u></a> to plan your trip
        <a href="https://www.visitseattle.org/visitor-information/getting-around/" target="_blank">
            <img class="img_getting_around" src="{{ asset ('images/getting_around.jpg') }}" alt="Getting Around">
        </a>
    </div>




    <h1>~ Things To Do ~</h1>
    <div>
        <div class="what_to_do_in_seattle">
            Seattle Summer offers so many things to do inside, and outside of the city.
        </div>
        <div class="div_things_to_do">
            <a href="http://pikeplacemarket.org/" target="_blank">
                <img class="img_things_to_do" src="{{ asset ('images/pike_place.jpg') }}" alt="Pike Place Market">
            </a>
            <figcaption>photo - lonelyplanet.com</figcaption>
            <a href="http://pikeplacemarket.org/" target="_blank"><h3>Pike Place Market</h3></a>
            <div class="discription">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of 
                Lorem Ipsum.
            </div>
        </div>
        <div class="div_things_to_do">
            <a href="http://www.seattlecenter.com/" target="_blank">
                <img class="img_things_to_do" src="{{ asset ('images/seattle_center.jpg') }}" alt="Seattle Center">
            </a>
            <figcaption>photo - spaceneedle.com</figcaption>
            <a href="http://www.seattlecenter.com/" target="_blank"><h3>Seattle Center</h3></a>
            <div class="discription">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of 
                Lorem Ipsum.
            </div>
        </div>
        <div class="div_things_to_do">
        <a href="https://www.switchbacktravel.com/great-day-hikes-near-seattle" target="_blank">    
            <img class="img_things_to_do" src="{{ asset ('images/rainier.jpg') }}" alt="Mount Rainier">
        </a>
        <figcaption>photo - site.pus.edu</figcaption>
        <a href="https://www.switchbacktravel.com/great-day-hikes-near-seattle" target="_blank"><h3>Outdoors</h3></a>
            <div class="discription">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of 
                Lorem Ipsum.
            </div>
        </div>    
        <div class="div_things_to_do">
            <div class="discription"></div>
            <a href="https://washingtonbeer.com/" target="_blank">    
                <img class="img_things_to_do" src="{{ asset ('images/brewery.jpg') }}" alt="Breweries">
            </a>
            <figcaption>photo - drinkmemag.com</figcaption>
            <a href="https://washingtonbeer.com/" target="_blank"><h3>Brewery</h3></a>
            <div class="discription">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. 
                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of 
                Lorem Ipsum.
            </div>
        </div>
    </div>
<div>
@endsection