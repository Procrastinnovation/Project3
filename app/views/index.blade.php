@extends('_master')

@section('title')
Project 3 Start Bootstrap Theme
@stop

@section('footer')
<!-- Download Section 
    <section id="download" class="content-section text-center">
      <div class="download-section">
        <div class="container">
          <div class="col-lg-8 col-lg-offset-2">
            <h2>Download Grayscale</h2>
            <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
            <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
          </div>
        </div>
      </div>
    </section>
    -->

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
@stop
