<!DOCTYPE html>
<html>

<head>
  <title>Global Business Development</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="Global Business Development"/>
  <META NAME="keywords" CONTENT="Global Business Development">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="SHORTCUT ICON" href="assets/img/air_fav.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="" />

      
      <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/webflow.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/arce-ru.webflow.css" type="text/css" />
    <script type="text/javascript" src="assets/js/modernizr.js"></script>
    
		<link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" href="">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
</head>

<body>
@include('layouts.nav')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
