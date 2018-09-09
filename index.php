<html>
    <head>
        <title>MHTalk</title>
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
        <script src="js/main.js" type="text/javascript"></script>
    </head>
        <body>
            <div id="wrapper">
                <style>
                    .middle{
                        background-image:url(<?php include_once('selectpic.php'); ?>);
                    }
                </style>
                <div class="top">
                    <div class="logo">
                        <a href="">
                            <img src="http://mhtalk.org/imgs/logo.png"/>
                        </a>
                    </div>
                    <i class="fas fa-bars fa-2x"></i>
                </div>
                <div class="middle">
                    <div class="cover"></div>

                    <div class="logsignpan">
                        
                        <form action="#" method="#">
                            <h2>Log In</h2>
                            <input type="email" placeholder="Email" class="useremail" />
                            <input type="password" placeholder="Password" class="userpass"/>
                            <input type="submit" value="Login" class="loginbtn"/>
                            <a class="signupbtn" href="/sign-up.php">Sign Up</a>
                        </form>
                    </div>


                        <div class="signup">
                            <form>
                                <h2>Sign Up</h2>
                               <input type="email" class="signupemail" placeholder="Email">
                               <input type="text" class="signupfirstname" placeholder="Firstname">
                               <input type="text" class="signuplastname" placeholder="Lastname">
                               <input type="date" class="signupdob" value="2000-01-06">
                               <input type="password" class="signuppass" placeholder="Password">
                               <input type="password" class="signuppassrep" placeholder="Password Repeat">
                               <input type="submit" value="Sign Up" class="signupbtnfin">
                               <div class="err"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>
