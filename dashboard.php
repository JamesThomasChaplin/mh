<?php 
session_start();
    if(!isset($_SESSION["userid"]) && !isset($_SESSION['firstname'])){
       header("Location: http://mhtalk.org/"); 
      } else {
          ?>
<html>
    <head>
        <title>MHTalk - Dashboard</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <meta property="og:url"                content="http://mhtalk.org" />
        <meta property="og:type"               content="website" />
        <meta property="og:title"              content="MHTalk a place of transparency & support" />
        <meta property="og:description"        content="" />
        <meta property="og:image"              content="http://mhtalk.org/imgs/logo.png" />
        <meta name="description" content="A safe place to discuss mental health & learn new information">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="http://mhtalk.org/css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/dashboard.js" type="text/javascript"></script>
    </head>
        <body class="dashboard">
               <div class="top">
                    <div class="logo">
                        <a href="http://mhtalk.org/dashboard.php">
                            <img src="http://mhtalk.org/imgs/logo.png"/>
                        </a>
                    </div>
                    <p><?php echo $_SESSION['firstname'] ?></p>
                    <i class="fas fa-bars fa-2x"></i>
                </div>            
            <a href="http://mhtalk.org/assets/sign-out.php">Log out</a>     
            
            <div class="createuser">
                <p>Looks like you need to make a username famo</p>
                <input class="usernamecreate" placeholder="Username" type="input">
                <input type="submit" value="Check" class="usernamecreatebtn">
                <span class="usernameerror"></span>
            </div>
        </body>
</html>

<?php } ?>

