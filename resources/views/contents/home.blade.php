@extends('layouts.app')

@section('content')
<header class="header" id="responsive_header">
<ul class="menu" id="responsive_menu">
<li class="nav" id="menu_icon"><a href="javascript:void(0);" onclick="show_menu()">&#9776;</a></li>      
        <li class="nav"><a href="{{ url('/login') }}">{{ $logged_in == 1 ? '' : 'Login' }}</a></li>
        <li class="nav"><a href="{{route('guests')}}">{{ $logged_in == 1 ? 'Details' : ' ' }}</a></li>
        <li class="nav"><a href="{{route('rsvp')}}">{{ $logged_in == 1 ? 'RSVP' : ' ' }}  </a></li>
        <li class="login" id="responsive_login">
          <a href="{{route('logout')}}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      {{ $logged_in == 1 ? 'Logout' : ' ' }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" 
          method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>

          <!-- <form id="login-form" action="{{ route('login') }}" 
          method="POST" style="display: none;">
              {{ csrf_field() }}
          </form> -->

        </li>
        
      </ul>
</header>
    <!-- End Top Bar -->

    <!-- <br> -->
    
<img class="main_img" src="images/ayumiandso.jpg" alt="main">

<!-- <h1>{{ $title }}</h1>
<p class="date">Saturday, August 15 2018</p> -->
<div class="story">
<img class="hr" src="images/line.png" alt="line">
    <h3>Our Story</h3>
    <p>(As Told by Ward Williams)</p>
    <p>I met So while we were both working at Amazon about 4 years ago. 
    So’s easy-going nature and mutual thirst for alcohol drew him to Marc and I, 
    and he quickly became the fourth member of the exclusive weight-lifting, backpacking, and binge-drinking club 
    founded a year earlier by Marc, myself, and our friend Robert.<p>
    
    <p>It was during one of our weekly weight-lifting sessions in Robert’s garage 
    that we first learned how serious So and Ayumi’s relationship had gotten: 
    So had agreed to take a cat into his house. 
    The cat wasn’t actually Ayumi’s cat, but her friend’s cat that Ayumi had agreed to care of temporarily, 
    but the apartment that Ayumi was moving into wouldn’t allow the cat to stay with her. 
    So, she turned to So for help, and as he always does for people, he came through.<p>
    
    <p>Robert and I didn’t think that So taking care of the cat was such a big deal, 
    but Marc clearly saw the introduction of the cat into So’s home as a Trojan Horse, 
    and he was personally confident that Ayumi was bound to follow.<p>
    
    <p>This took a few months longer that Marc might have expected, 
    during which So must’ve been a competent feline caretaker, 
    because the cat survived, and So &amp Ayumi’s relationship continued to flourish. 
    It was another night back in Robert’s garage-cum-weight room 
    that So had a hesitant look on his face. 
    He turned to the group of us huddled around the bench press and asked, 
    “uhh, so what would be the fair market rent to charge your girlfriend?”<p>
    
    <p>I don’t know what figure he finally decided upon, 
    but Ayumi moved in shortly after with So, and since then they have been inseparable. 
    They’ve hosted epic cocktail and New Year’s parties together, camped, hiked and travelled together, 
    cooked &amp eaten many a delicious meal, and have continued to care for each other’s pets. 
    And now, fast-forward to this day, 
    where they have asked us all here to participate in the next step of their relationship: marriage.<p>
    <p class="ward_williams"> - Ward Williams (Our Officiant)</p>

    <h3 class="please_login"><a href="{{ url('/login') }}">{{ $logged_in == 1 ? '' : 'Please login for details and RSVP' }}</a></h3>
  
    <!-- <hr>
      <ul class="menu">
        <li class="float-right">Copyright 2017</li>
      </ul> -->
</div>

@endsection
