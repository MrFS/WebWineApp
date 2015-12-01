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
    <link rel="apple-touch-icon" href="img/icons/iphone76.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/icons/iphone76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/icons/iphone120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/iphone152.png">

    <link rel="icon" sizes="192x192" href="img/icons/iphone152.png">
    <link rel="icon" sizes="152x152" href="img/icons/iphone152.png">
    <link rel="icon" sizes="120x120" href="img/icons/iphone120.png">
    <link rel="icon" sizes="76x76" href="img/icons/iphone76.png">

    <!--   App loading screen --->
    <link rel="apple-touch-startup-image" href="img/WineHeroImage.jpg">

    <!--   Google Fonts: Josefin Sans + Open Sans-->
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,600|Open+Sans:300&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <!--   Orange Engine Css -->
    <link rel="stylesheet" href="css/_grid.css" />

    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/materialize.css" >

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
<div class="container active" date-page="page_home">
   <div class="heroContainer">
        <div class="menu">
            <i class="fa fa-bars fa-lg fa-fw color-white"></i>
        </div>
        <div class="page-header">
            <h1>WineCask</h1>
        </div>
   </div>
   <div class="actions">
       <ul>
            <li id="navigate_share_wine">
                <div class="action-icon">
                   <i class="fa fa-share fa-2x fa-fw"></i>
                </div>
            </li>
            <li>
                <div class="action-icon">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-glass fa-2x fa-fw fa-stack-2x"></i>
                        <i class="fa fa-star fa-lg fa-fw fa-stack-1x color-gold" style="margin-top: -22px;"></i>
                    </span>

                </div>
            </li>
            <li>
                <div class="action-icon">
                   <i class="fa fa-glass fa-2x fa-fw"></i>
                </div>
       </ul>
   </div>
</div>
    <div class="overlay">
        <div class="row agne">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                        <img src="img/about/Orangee_Avatar.png">
                        <span class="card-title">Agne Ødegaard</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Born 1994, likes ball and coding.
                            Currently studying WebDev @NTNU Gjøvik
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Personal Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<div class="overlay" style="position: absolute; left: 30vh;">
        <div class="row fs">
            <div class="col s12 m7">
                <div class="card">
                    <div class="card-image">
                        <img src="img/about/fs.jpg">
                        <span class="card-title">Joachim F. Stamnes</span>
                    </div>
                    <div class="card-content">
                        <p>
                            Born 1994, likes ball and coding.
                            Currently studying Bachelor of Science - Operation of computer systems @NTNU Trondheim
                            
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">Personal Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>