<!DOCTYPE html>
<html lang="en">
    <head>
    <!--   Meta Tags -->
        <meta charset="utf-8">
        <meta name="author" content="Agne Ødegaard &amp; Joachim Stamnes" />
    
    <!--   Mobile friendly-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--   Chrome on Andriod Theme Color in hex-->
        <meta name="theme-color" content="#546E7A">

    <!--   Andriod Mobile web app meta tags -->
        <meta name="mobile-web-app-capable" content="yes">
        
    <!--   iPhone Web App meta tags-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        
    <!--   Make the app title different than the page title. -->
        <meta name="apple-mobile-web-app-title" content="WineCask">
    
    <!--   Safari, iPhone and iPad home screen icons and Andriod-->
        <link rel="apple-touch-icon" href="img/icons/winecask.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/icons/winecask.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/icons/winecask.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/icons/winecask.png">
        
        <link rel="icon" sizes="192x192" href="img/icons/winecask.png">
        <link rel="icon" sizes="152x152" href="img/icons/winecask.png">
        <link rel="icon" sizes="120x120" href="img/icons/winecask.png">
        <link rel="icon" sizes="76x76" href="img/icons/winecask.png">
  
    <!--   App loading screen --->
        <link rel="apple-touch-startup-image" href="img/WineHeroImage.jpg">
   
    <!--   Google Fonts: Josefin Sans + Open Sans-->
        <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,600|Open+Sans:300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <!--   Orange Engine Css -->
        <link rel="stylesheet" href="css/_grid.css" />
        
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <title>WineCask</title>
    </head>
    <body>
      <div class="navbar" id="navbar">
          <ul>
              <li class="home"><i class="fa fa-arrow-left"></i></li>
              <li id="navigate_home" data-navigate="home"><i class="fa fa-glass"></i> Home</li>
              <li id="navigate_popular" data-navigate="popular"><i class="fa fa-comment"></i> Popular</li>
              <li id="navigate_top" data-navigate="top"><i class="fa fa-line-chart"></i> Top</li>
              <li id="navigate_profile" data-navigate="profile"><i class="fa fa-user"></i> Profile</li>
              <li id="navigate_settings" data-navigate="settings"><i class="fa fa-cog"></i> Settings</li>
              <li id="navigate_logout" data-navigate="logout"><i class="fa fa-sign-out"></i> Log out</li>
          </ul>
      </div>
       <?php include("inc/pages/all.php") ?>
       <script src="js/jquery-2.1.4.min.js"></script>
       <script src="js/main.js"></script>
    </body>
</html>