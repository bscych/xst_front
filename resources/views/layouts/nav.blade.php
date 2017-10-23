<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
     <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">
         <!-- Navigation -->

          <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/public/home">TW HCP Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} </a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        </li>
                        @endguest
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li-->
                        <li>
                            <a href="/public/mockup/speaker"><i class="glyphicon glyphicon-user"></i> Speaker</a>
                        </li>
                        <li>
                            <a href="/public/mockup/hcp"><i class="fa fa-users"></i> HCP</a>
                            
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/public/mockup/seminar"><i class="glyphicon glyphicon-hd-video"></i> Live Web Seminar</a>
                        </li>
                        <li>
                            <a href="/public/mockup/product"><i class="fa fa-barcode"></i> Lilly Product</a>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-copyright-mark"></i> TA/Brand<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/public/mockup/ta"> TA</a>
                                </li>
                                <li>
                                    <a href="/public/mockup/brand"> Brand</a>
                                </li>
                                <li>
                                    <a href="/public/mockup/brandMapping"> Brands Mapping</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/public/mockup/medical_sqaure"><i class="fa fa-square"></i> Medical Square</a>
                        </li>
                        <li >
                            <a href="/public/mockup/recommended_item"><i class="fa fa-photo"></i> Recommended Item</a>
                        </li>
                        <li>
                            <a href="/public/mockup/tool"><i class="fa fa-android"></i> Digital Tool</a>
                        </li>
                        <li>
                        <a href="/public/mockup/log"><i  class="fa fa-files-o"></i> User activity Log</a>
                        </li>
                        <li>
                        <a href="/public/mockup/user"><i  class="fa fa-files-o"></i> User Management</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

          
            <!-- /.navbar-static-side -->
        </nav>
 <!-- Page Content -->
        <div id="page-wrapper">
          @yield('content')   
        </div>
       
    </div>

    <!-- Scripts -->
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('js/metisMenu.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>

                                            <script>
$.when( $.ready ).then(function() {
 
  $("#type_of_items").change(function(){
   hideAll();
    var id = $("select").find("option:selected").text();
    $(document.getElementById(id)).show();
  });
});

function hideAll(){
    $("#PDF_PPT").hide();
    $("#PDF").hide();
    $("#PPT").hide();
    $("#Video").hide();
    $("#Hyperlink").hide();
    $("#WebSite").hide();
    $("#URL").hide();
}
</script>
</body>
</html>
