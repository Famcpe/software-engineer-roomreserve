<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('/css/styleHome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <title>Room-Reservation</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->



</head>

<body  style="background-color:#E0E3E4">

<main role="main" style="margin-top:50px" >

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar"style="width: -webkit-fill-available">
        <ul class="nav navbar-nav navbar-left" id="left-Menu">

          <li class="active"><a href=#>หน้าแรก</a></li>
          <li><a href="#section1">ดูห้อง</a></li>



          <li><a href="#" data-toggle="modal" data-target="#fam">ข้อปฏิบัติ</a></li>
          <li><a href="#section2">ติดต่อเรา</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        @else
            <li id="Login"><a href="{{ url('/logout') }}">Logout</a></li>
        @endif
          

        </ul>
      </div>
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
    </div>
  </div>

  <div class="container" id="section1" style="padding-top: 50px">

    <font id="room">Room</font>
    <font id="share">Reservation</font>
   <div class="hr"></div>
    <br>
     @foreach($Rooms as $Room)
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card" style="text-align:center">
          <img src="img/demo/{{$Room->remember_token}}" alt="Avatar" style="width:100%">
            <h4><b>{{ $Room->roomName }}</b></h4>
            <p>{{ $Room->roomDescription}}</p>
            <div class="col-md-12 columButton" style="text-align: center;padding-top: 1vw">

              <button id="button-menu" data-toggle="modal" data-target="#login-modal"><font id="textButton">จอง</font></button>
              <a href="room/view?txtroom=<?php echo "$Room->roomName" ?>" target='_parent'><button id="button-menu1" data-toggle="modal" ><font id="textButton">ดูห้อง</font></button></a>

    </div>
        </div>
      </div>
     @endforeach
   </div>

  <br>
  <br>
  <br>




  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer" id="section2">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 leftfooter" style="padding-left:10vw"style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">วันทำการจองห้อง</button>
        <p style="color:white;">เปิดให้บริการทุกวัน วันจันทร์ - อาทิตย์ เวลา 9.00–23.00 น.</p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rightfooter" style="padding-left:10vw"style="height:auto;">
        <button id="borderButton" style="margin-bottom:40px;font-size:17px !important;">ติดต่อห้องช่าง</button>
        <font style="color:white;display:block;">Room Kasetsart University Sriracha Campus</font>
        <font style="color:white;display:block;margin-top:40px;">เว็บไซต์ : -</font>
        <font style="color:white;display:block;">อีเมลล์ : -</font>
        <font style="color:white;display:block;">โทรศัพท์ : -</font>



      </div>
      <div id="desktopfooter">
        <font  style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:#DE2714;font-size:14px;">Copyright @ 2018, Room Reservation Powered By <font style="color:white;">Computer Engineering-KUSRC</font></font>
      </div>
      <div id="mobilefooter">
        <font style="margin-bottom:20px;width:100%;left:0;text-align:center;position:absolute;bottom:0;display:block;color:#DE2714;font-size:14px;">Powered By <font style="color:white;">CPE-KUSRC @ 2018</font></font>
      </div>
    </div>


</main>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999">
  <!--<div class="modal-dialog">
      <div class="loginmodal-container">
           <h1>Login to Your Account</h1><br>
          <form>
              <input type="text" name="user" placeholder="Email">
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" name="login" class="login loginmodal-submit" value="Login">
          </form>

          <div class="login-help">
            <a href="#">Forgot Password</a>
          </div>
          <button type="button" class="btn btn-secondary btn-sm"><span class="glyphicon glyphicon-user"></span> ADMIN</button>
      </div>
  </div>-->
  
        
      </ul>
</div>




  <div class="modal fade " id="fam" role="dialog" style="z-index: 9999">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ข้อปฏิบัติในการใช้งานการจองห้อง</h4>
        </div>
        <div class="modal-body">
          <p>
        <b>
          <span>1) เวลาการจองห้องต้องอยู่ในช่วง 45 นาที - 3 ชั่วโมง และสามารถจองล่วงหน้าได้ 1 เดือนเท่านั้น</span>
          <br>
          <span>2) ระบบจะส่งอีเมลแจ้งเตือนเมื่อถึงเวลาใช้งาน และยกเลิกการใข้งานกรณีไม่ได้ยืนยันสิทธิ์</span>
          <br>
          <span>3) ท่านสามารถยกเลิก / แก้ไข การจองของตนเองได้ที่หน้าการจองของท่านได้ทันที</span>
          <br>
          <span>4) เปิดให้บริการ วันจันทร์ - อาทิตย์ เวลา 9.00 - 23.00 น.</span>
          <br>
          <span>5) หากท่านลืมรหัสผ่านท่านสามารถติดต่อ Admin เพื่อทำการขอรหัสผ่านใหม่ได้</span>
        <br>
        <br>
        <span class ="pull-right" ><font color ="#711400">ROOM RESERVATION </font></span>
        </b>
      </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>




 @yield('content')
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
