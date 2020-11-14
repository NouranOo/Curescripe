<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Cure Ticket | @yield('title')</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/dashboard/images/favicon.png" type="/dashboard/image/x-icon" />
    <link rel="apple-touch-icon" href="/dashboard/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
    integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    <!-- Site CSS -->
     <!--datatables-->
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" >    
    <!-- Colors CSS -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/dashboard/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/dashboard/css/responsive.css">
    <!-- Custom CSS -->
    
    <link rel="stylesheet" href="/dashboard/css/style.css">
    
    
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="dashboard">
    @include('includes.dashboard.header')
    @yield('content')
        

   
    @include('includes.dashboard.script')

</body>
</html>