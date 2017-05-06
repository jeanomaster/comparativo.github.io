<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="Project.php">Project</a>
                            </li>
							<li>
                                <a href="Pictures.php">Picture</a>
                            </li>
							<li>
                                <a href="Activities.php">Activities</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="Administrator.php">Admin</a>
                    </li>
					<li>
                        <a href="Register.php">Register</a>
                    </li>
					<li>
                        <a href="Login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('image/yuuei.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Yuuei Building</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/Usj.jpg');"></div>
                <div class="carousel-caption">
                    <font color=black> <h2>Unforeseen Simulation Joint</h2> </font>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('image/Bnh.jpg');"></div>
                <div class="carousel-caption">
                    <!-- <font color=FF00C5> <h2>Boku no Hero Academia</h2> </font> -->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to U.A High
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="Project.php"> <!-- Portfolio item.php -->
                    <img class="img-responsive img-portfolio img-hover" src="image/1.jpg" alt="">
					<center> <font color=black> <h2>Project</h2> </font> </center>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="Pictures.php"> <!-- Portfolio item.php -->
                    <img class="img-responsive img-portfolio img-hover" src="image/2.jpg" alt="">
					<center> <font color=black> <h2>Picture</h2> </font> </center>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="Activities.php"> <!-- Portfolio item.php -->
                    <img class="img-responsive img-portfolio img-hover" src="image/3.jpg" alt="">
					<center> <font color=black> <h2>Activities</h2> </font> </center>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Introduction</h2>
            </div>
            <div class="col-md-6">
                <p><strong>U.A. High</strong></p>
                <ul>
                    <li>U.A High (雄英高校 Yūei Kōkō?) is an academy where students learn and train to become Heroes. It is one of the main settings in which the story takes place.</li>
                </ul>
				<br> </br>
				<p><strong>History</strong></p>
                <p>U.A. is the #1 ranked High School for heroics and is considered as the top Hero Academy in the world. Students are separated into specific Departments and Classes - A, B, C, D, E, F, G, H, I, J and K. At the entrance, there is a security wall nicknamed the “U.A. Barrier” that automatically closes if a person does not have a Student ID Card or Special Entry Permission ID. Many precautions have been made to keep members of the press and villains out.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="image/yuuei.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Reference: http://bokunoheroacademia.wikia.com/wiki/U.A._High</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Return to Top</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
