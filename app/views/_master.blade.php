<!DOCTYPE html>
<html>

<head>


  <link rel='stylesheet' href='/css/theme.css' type='text/css'>

    @yield('head')



    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
        <meta name="author" content="">

          <title>@yield('title','Project3')</title>

          <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/grayscale.css" rel="stylesheet">

              <!-- Custom Fonts -->
              <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
                  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
                    
</head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand page-scroll" href="#page-top">
            <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Home
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li>
              <a class="page-scroll" href="#about">About</a>
            </li>
            <li>
              <a class="page-scroll" href="http://p1.projectjohnlim.com/">P1</a>
            </li>
            <li>
              <a class="page-scroll" href="http://p2.projectjohnlim.com/">P2</a>
            </li>
            <li>
              <a class="page-scroll" href="#credit">Credit</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h1 class="brand-heading">Project 3</h1>
              <p class="intro-text">
                Lorem Ipsum Generator and Random User Generator.
              </p>
              <a href="#about" class="btn btn-circle page-scroll">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h2>About Project 3</h2>
          <p>
            Project 3 uses 'Lorem Ipsum Generator' and 'Random User Generator' to demonstrate MVC in Laravel based web application.
          </p>
          <p>
            Lorem Ipsum Generator: This function will generate random paragraphs using <a href="/lorem">lorem-ipsum</a> PHP package.
          </p>
          <p>
            Random User Generator: This function will generate random user information using <a href="/user">fzaninotto/faker</a> PHP package.
          </p>
        </div>
      </div>
    </section>

    @yield('footer')