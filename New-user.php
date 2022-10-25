<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet Care</title>
    <!-- google-fonts -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
    
    <!-- //Template CSS Style link -->
</head>

<style>
.about-section{
    margin: 0;
    padding: 0;
    min-height: 100vh;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: consolas;
}


.carding{
    width: 1000px;
    position: relative;
    display: flex;
    justify-content: space-between;
}

.carding .card{
    position: relative;
    cursor: pointer;
    background: #333;
}

.carding .card .face{
    width: 300px;
    height: 200px;
    transition: 0.5s;
}

.carding .card .face.face1{
    position: relative;
    background: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;
    transform: translateY(100px);
}

.carding .card:hover .face.face1{
    background: #ff0057;
    transform: translateY(0);
}

.carding .card .face.face1 .content{
    opacity: 0.2;
    transition: 0.5s;
}

.carding .card:hover .face.face1 .content{
    opacity: 1;
}

.carding .card .face.face1 .content img{
    max-width: 100px;
}

.carding .card .face.face1 .content h3{
    margin: 10px 0 0;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
}

.carding .card .face.face2{
    position: relative;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
    transform: translateY(-100px);
}

.carding .card:hover .face.face2{
    transform: translateY(0);
}

.carding .card .face.face2 .content p{
    margin: 0;
    padding: 0;
}

.carding .card .face.face2 .content a{
    margin: 15px 0 0;
    display:  inline-block;
    text-decoration: none;
    font-weight: 900;
    color: #333;
    padding: 5px;
    border: 1px solid #333;
}

.carding .card .face.face2 .content a:hover{
    background: #333;
    color: #fff;
}
</style>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg stroke">
                <h1>
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <i class='fa fa-paw'></i>&nbsp;Vet Care</a>
                </h1>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="New-user.php">New User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="map.php">Google Map</a>
                        </li>
                        <!-- search button -->
                        <div class="search-right">
                            <form action="#search" method="GET" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="" class="search-popup">
                                </div>
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->

    <!-- inner banner -->
    <div class="inner-banner">
        <div class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">New User</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>New User</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //inner banner -->

    <section class="about-section">
        <div class="carding">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="assets/images/logo.png">
                        <h3>Doctor</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Already a registered</p>
                            <a href="#">Login Here</a>
                        <p>New user?</p>
                            <a href="doc-register.php">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="assets/images/dog-logo.png">
                        <h3>Pet</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Already a registered</p>
                            <a href="#">Login Here</a>
                        <p>New user?</p>
                            <a href="pet-register.php">Register Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</body>
</html>
  