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
          <a class="navbar-brand page-scroll" href="/">
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
              <a class="page-scroll" href="/">Back</a>
            </li>
            <li>
              <a class="page-scroll" href="http://p1.projectjohnlim.com/">P1</a>
            </li>
            <li>
              <a class="page-scroll" href="http://p2.projectjohnlim.com/">P2</a>
            </li>
            <li>
              <a class="page-scroll" href="#user">Generate User</a>
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

    <?php

	$faker = Faker\Factory::create();
	$value = Input::get('submit');
	$users = e(Input::get('users'));

	
	$birthdate = e(Input::get('birthdate'));	//Se obtiene la variable del iput 'birthdate' y se asigna a la variable $birthdate
	$profile = e(Input::get('profile'));		//Se obtiene la variable del iput 'profile' y se asigna a la variable $profile
	$phone = e(Input::get('phone'));			//Se obtiene la variable del iput 'phone' y se asigna a la variable $phone

?>
    <!--
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>User Generator</title>
    
    <meta name='viewport' content='width=device-width, initial-scale=1'>	
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/journal/bootstrap.min.css" rel="stylesheet">    


</head>  -->
    <body>

      <section id="user" class="content-section text-center">
        <div class='download-section'>

          <div class="container">
            <div class="col-lg-8 col-lg-offset-2">

<h1>User Generator</h1>

              {{ Form::open() }}

              {{ Form::label('users', 'How many users?') }}

              {{ Form::text('users', '1', array('id' => 'users', 'maxlength' => 2)) }} (Default 1 | Maximum: 99)

              <br>
                <br>
                  
                {{ Form::checkbox('birthdate') }} {{ Form::label('birthdate', 'Birthdate') }}<br>
                              
                {{ Form::checkbox('profile') }} {{ Form::label('profile', 'Profile') }}<br>
                               
                {{ Form::checkbox('phone') }} {{ Form::label('phone', 'Phone Number') }}<br>

                  {{ Form::token()}}

                  {{ Form::submit('Generate', array('name' => 'submit')) }}

                  {{ Form::close() }}

                  <?php 	
	 if ($value) {
	// JLim Validation check for null or no value
			if (($users=='0')||($users==null))	
			{		
				echo "Required value at least 1";
			}
			else{
			
			 for ($i=0; $i < $users; $i++) {
				
				 echo "<b>".$faker->name, "</b><br>";
					
					 if ($birthdate!=null){
					
						echo $faker->date($format = 'Y-m-d', $max = 'now'), "<br>";
						
					 }			 
					 if($profile!=null){
					
						echo "<em>".$faker->text($maxNbChars = 150), "</em><br>";
						
					 }			 
					 if($phone!=null){
					
						echo "Phone: ".$faker->phoneNumber, "<br>";
						
					 }
					 
					 
				echo '<br>';
				
			 }
			 /***End For loop***/
			
		}
	} 
?>
      </div>
        </div>

     	
	</div>
	</section>

      <!-- credit Section -->
      <section id="credit" class="container content-section text-center">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <h2>--- Credit ---</h2>
            <p>Feel free to email and provide some feedback or any inquiry. Bootstrap template was modified into MVC in Laravel for this application.</p>
            <p>
              <a href="mailto:JohnLim@g.harvard.edu">JohnLim@g.harvard.edu</a>
            </p>
            <ul class="list-inline banner-social-buttons">
              <li>
                <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">
                  <span class="network-name">BootStrap</span>
                </a>
              </li>
              <li>
              <li>
                <a href="https://github.com/Procrastinnovation/Project3/" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li>
                <a href="#page-top" class="btn btn-default btn-lg">
                  <span class="network-name">TOP</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

    <!-- Map Section 
    <div id="map"></div>
    -->
    <!-- Footer -->
      <footer>
        <div class="container text-center">
          <p>Copyright &copy; DWA15 Fall 2014</p>
        </div>
      </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
  
</body>

</html>




   
