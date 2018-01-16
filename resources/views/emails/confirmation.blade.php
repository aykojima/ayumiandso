<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard">
    <head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Ayumi and So</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta class="foundation-mq">

<style>
    *{
        font-family: 'Lora', serif;
    }

    body{
        background-color: #FFE4E1;
        margin: 0;
    }

    h1, h2, h3, h4, p, li, a{
        color: #7F7270;
        text-align: center;
        text-decoration: none;  
    }

    table, th, td{
        border: 1px solid #ccc;
        text-align: center;
    }

    .footer li{
        display: block;
        margin: auto;
    }

    .footer {
        list-style-type: none;
    }

    .centering_footer {
        width: 50%;
        margin: auto;
    }


</style>    
</head>
<body> 
<h2>Thank you for your response, {{ $guest_data->first_name }}!</h2>

<h3>You have responded: " {{ $guest_data->is_attending == 'Y' ? 'Accept With Pleasure! ' : 'Decline With Regret' }} "
<br>{{ $guest_data->is_attending == 'Y' ? ' ' : 'Sorry to miss you at the party!' }}</h3>

<div class="is_attending" style="display:{{ $guest_data->is_attending == 'N' ? 'none' : 'block' }};">
    <table>
        <tbody>
            <tr>
                <td>Number of Adults: </td><td>{{ $guest_data->number_adults }}</td>
            </tr>
            <tr>
                <td>Number of Children: </td><td>{{ $guest_data->number_children }}</td>
            </tr>
            <tr>
                <td>Food Allergy / Special Diet: </td><td>{{ $guest_data->food_allergy }}</td>
            </tr>
        </tbody>
    </table>
    <div>
        <h2> ~ Reception ~ </h2.>
        <h3>Saturday, August 25, 2018</h3>
        <h3>2:00PM</h3>
        <h3>Attire: Casual</h3>
        <p>For more information, visit <a href="ayumiandso.com"><u>ayumiandso.com</a></u></p>
    </div>
</div>

<p>Changed your mind? Please email us at <u>contact@ayumiandso.com</u></p>

    <div class="row column">
      <img class="hr" src="{{ asset('images/line.png') }}" alt=" ">
      <div class="centering_footer">
      <ul class="footer">
        <li>Copyright 2017 ayumiandso.com All Rights Reserved</li>
        <li>Photo Credit - <a href="https://brianchuphotography.com/"><u>Brian Chu</u></a></li>
      </ul>
     </div>
    </div>
    </body>
</html>
