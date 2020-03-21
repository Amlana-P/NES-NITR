<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Portal</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="../img/nes.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <style type="text/css">
    body {
      background-color: #00FFCF;
    }

    .Iam {
      padding: 2em 5em;
      font: normal 40px/50px Montserrat, sans-serif;
      color: #999;
    }
    .Iam p {
      height: 50px;
      float: left;
      margin-right: 0.3em;
    }
    .Iam b {
      float: left;
      overflow: hidden;
      position: relative;
      height: 50px;
      top: 40px;
    }
    .Iam .innerIam {
      display: inline-block;
      color: #e74c3c;
      position: relative;
      white-space: nowrap;
      top: 0;
      left: 0;


      /*animation*/
      -webkit-animation:move 5s;
      -moz-animation:move 5s;
      -ms-animation:move 5s;
      -o-animation:move 5s;
      animation:move 5s;
      /*animation-iteration-count*/
      -webkit-animation-iteration-count:infinite;
      -moz-animation-iteration-count:infinite;
      -ms-animation-iteration-count:infinite;
      -o-animation-iteration-count:infinite;
      animation-iteration-count:infinite;
      /*animation-delay*/
      -webkit-animation-delay:1s;
      -moz-animation-delay:1s;
      -ms-animation-delay:1s;
      -o-animation-delay:1s;
      animation-delay:1s;
    }
    @keyframes move{
      0%  { top: 0px; }
      20% { top: -50px; }
      40% { top: -100px; }
      60% { top: -150px; }
      80% { top: -200px; }
    }

    @-webkit-keyframes move {
      0%  { top: 0px; }
      20% { top: -50px; }
      40% { top: -100px; }
      60% { top: -150px; }
      80% { top: -200px; }
    }
    @-moz-keyframes move {
      0%  { top: 0px; }
      20% { top: -50px; }
      40% { top: -100px; }
      60% { top: -150px; }
      80% { top: -200px; }
    }
    @-o-keyframes move {
      0%  { top: 0px; }
      20% { top: -50px; }
      40% { top: -100px; }
      60% { top: -150px; }
      80% { top: -200px; }
    }
    @keyframes move {
      0%  { top: 0px; }
      20% { top: -50px; }
      40% { top: -100px; }
      60% { top: -150px; }
      80% { top: -200px; }
    }

    @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro');


    p.w {
      font-family: 'Source Code Pro', monospace;  
      font-size: 28px;
      font-weight: bold;
      text-align: left;
    }

    .z{
      float: left;
      padding-top: 30px;
      font-family: 'Source Code Pro', monospace;
    }
    #anchor {
      text-decoration: none;
    }

  </style>
</head>
<body style="text-align: center;">
  <div class="Iam">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome,</p>
      <b>
        <div class="innerIam">
          <strong><?php echo $_SESSION['username']; ?>.</strong><br /> 
          Thank you<br />
          for registering<br />
          for NES-NITR'2020<br />
          Hope to see you soon!
        </div>
      </b>
    </div>
    <div class="content" style="float: left; padding-top: 50px;">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
      <p class="w">Please take note of you username and password for online payment.</p>
      <p class="w">Pay now if you haven't paid already!</p>
      <a href="https://chat.whatsapp.com/JEmoKOIAfSV6GQ99DfwT5d"><p class="w" style="color: green;">Join our Whatsapp group.</p></a>
      <a href="https://www.instamojo.com/@nesnitr/le20d75d59bb9409bb00fba8a7334db8b/" rel="im-checkout" data-text="Pay" data-css-style="color:#ffffff; background:#75c26a; width:300px; border-radius:4px"  data-description="Registration fee is Rs 250, which includes entry to all the events.
      Hostel Accommodation is optional, fee is Rs 200 for 3 nights (7,8,9 February 2020)." data-layout="vertical"></a>
      <p class="z"><a href="./login.php" style="color: red; font-size: 25px;" id="anchor"><strong> Logout</strong></a> <a id="anchor" href="../" style="color: blue; font-size: 25px;"><strong> Explore</strong></a> </p>
    <?php endif ?>
  </div>
  <script type="text/javascript">
    var content = 'If life is so blue, then select another colour from the rainbow';

    var ele = '<span>' + content.split('').join('</span><span>') + '</span>';


    $(ele).hide().appendTo('p').each(function (i) {
      $(this).delay(100 * i).css({
        display: 'inline',
        opacity: 0
      }).animate({
        opacity: 1
      }, 100);
    });
  </script>
  <script src="https://js.instamojo.com/v1/button.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>