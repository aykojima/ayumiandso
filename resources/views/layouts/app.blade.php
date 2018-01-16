<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Ayumi and So</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
            <!-- <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.css') }}">
            <link rel="stylesheet" href="{{ asset('pickadate/lib/themes/default.date.css') }}"> -->
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    
    
@yield('content')
    

    <div class="row column">
      <img class="hr" src="{{ asset('images/line.png') }}" alt=" ">
      <div class="centering_footer">
      <ul class="footer">
        <li>Copyright 2017 ayumiandso.com All Rights Reserved</li>
        <li>Photo Credit - <a href="https://brianchuphotography.com/"><u>Brian Chu</u></a></li>
      </ul>
     </div>
    </div>

    <script>
      $(document).foundation();

        function show_menu(){
            var nav = document.getElementById("responsive_menu");
            var header = document.getElementById("responsive_header");
            var login = document.getElementById("responsive_login");
            if (nav.className === "menu" && header.className === "header" && login.className === "login") {
                nav.className += " responsive";
                header.className += " responsive";
                login.className += " responsive";
            } else {
                nav.className = "menu";
                header.className = "header";
                login.className = "login";
            }  
        }


      function hide(){
        document.getElementById('hide').style.display ='none';
      }
      function show(){
        document.getElementById('hide').style.display = 'block';
      }

      var sum = 0;

    </script>

        <!-- <script src="{{ asset('js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('js/vendor/what-input.js') }}"></script>
        <script src="{{ asset('js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('pickadate/lib/picker.js') }}"></script>
        <script src="{{ asset('pickadate/lib/picker.date.js') }}"></script> -->
        <script>

        </script>

    </body>
</html>