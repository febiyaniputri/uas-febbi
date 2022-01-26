<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>sunshine</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ url('public/shopp') }}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{ url('public/shopp') }}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ url('public/shopp') }}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{ url('public/shopp') }}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ url('public/shopp') }}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <link rel="stylesheet" href="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('/public/assets/js/templatemo.js') }}" type="text/css">
      <link rel="stylesheet" href="{{ asset('/public/assets/js/custom.js') }}" type="text/css">

      @stack('style')
    <!--
        
    TemplateMo 559 Zay Shop
    
    https://templatemo.com/tm-559-zay-shop
    
    -->    


   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ url('public/shopp') }}/images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include ('client.section.navbar')
      <!-- end banner -->
     
      <!-- about -->
      @yield('content_front')
      <!-- end about -->
     
      <!--  footer -->
      @include ('client.section.footer')>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ url('public/shopp') }}/js/jquery.min.js"></script>
      <script src="{{ url('public/shopp') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ url('public/shopp') }}/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="{{ url('public/shopp') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{ url('public/shopp') }}/js/custom.js"></script>

      @stack('script')
      <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
      <script src="{{ asset('/public/assets/js/custom.js') }}"></script>

   </body>
</html>