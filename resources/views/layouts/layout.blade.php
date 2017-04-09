<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PeruTroll</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css styles/main.css -->

    {!!Html::style('css/main.css')!!}    
    <!-- endbuild -->
    <!-- build:js scripts/vendor/modernizr.js -->    
    {!!Html::script('js/vendor/modernizr-custom.js')!!}
    <!-- endbuild -->
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container">
      @include('layouts.partials.header')
     
           @yield('main-content')  									 
     
	   @include('layouts.partials.footer')
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- build:js scripts/plugins.js -->
    <!--
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/affix.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/alert.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/dropdown.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/transition.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/button.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/popover.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/carousel.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/collapse.js"></script>
    <script src="/bower_components/bootstrap-sass/assets/javascripts/bootstrap/tab.js"></script>
    -->
    <!-- endbuild -->

    <!-- build:js scripts/main.js -->    
    {!!Html::script('js/main.js')!!}
    <!-- endbuild -->
  </body>
</html>
