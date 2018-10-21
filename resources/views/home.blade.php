<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>HOME</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
</head>
<body  bgcolor="#8B8B83">


<main role="main">
  
 
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
      </div>
      <ul class="nav navbar-nav" id="right-Menu">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Room</a></li>
        <li><a href="#">Admin</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      
    </div>
  </nav>
  
    <div id="background">
    <div class="col-md-12 col-sm-12 col-xs-12" id="allTextWelcome">
    <div class="col-md-12" style="text-align: center;">

        <font id="welcometext">ระบบจองห้องเรียนออนไลน์</font>
    </div>
    <div class="col-md-12 columDes" style="text-align: center;">
        <font id="destext" >สะดวก มีประสิทธิภาพ ใช้งานง่าย</font>

    </div>
    <div class="col-md-12 columButton" style="text-align: center;">
        <form action=" http://libapp.src.ku.ac.th/userlogin">
              <button id="button-menu"><font id="textButton">เข้าสู่ระบบ</font></button>
        </form>
    </div>
  </div>
  </div>
  </div>
   


  <div class="container">
    
    <font id="aaa">ROOM</font>
    <hr/>
    <br>
     @foreach($Rooms as $Room)
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card">
          <img src="img_avatar.png" alt="Avatar" style="width:100%">
          <div class="container">
            <h4><b>{{ $Room->roomName }}</b></h4> 
            <p>{{ $Room->roomDescription}}</p> 
          </div>
        </div>
      </div>
     @endforeach
  
  </div>


</main>
 @yield('content')
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>

