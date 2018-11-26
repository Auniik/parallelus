<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('backend/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('backend/dist/css/sb-admin-2.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('backend/icons/favicon.ico')}}" sizes="32x32" />

    <!-- Morris Charts CSS -->
  {{--   <link href="{{asset('backend/vendor/morrisjs/morris.css')}}" rel="stylesheet"> --}}

    <!-- Custom Fonts -->
    <link href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{route('admin')}}">Hello</a>
</div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
        
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                {{-- <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li> --}}
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> Visit Site</a>
                        </li>
                        <li>
                            <a href="{{url('/admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('/edit-config')}}"><i class="fa fa-cogs fa-fw"></i> Basic Configs</a>
                        </li>
                        
                        <li>
                            <a href="#about"><i class="fa fa-comment fa-fw"></i> About<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/edit-about')}}">Update About</a>
                                </li>
                                <li>
                                    <a href="{{url('/edit-feature')}}">Update Feature</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#issues"><i class="fa fa-list-alt fa-fw"></i> Issues<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/issue-appearance')}}">Issue Config</a>
                                </li>
                                <li>
                                    <a href="{{url('/add-issue')}}">Add Issue</a>
                                </li>
                                <li>
                                    <a href="{{url('/all-issue')}}">View Issues</a>
                                </li>
                            </ul>                            
                        </li>                        
                        <li>
                            <a href="#news"><i class="fa fa-globe fa-fw"></i> News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/add-news')}}">Add News</a>
                                </li>
                                <li>
                                    <a href="{{url('/all-news')}}">All News</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#social"><i class="fa fa-link fa-fw"></i> Social<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/add-social')}}">Add Social</a>
                                </li>
                                <li>
                                    <a href="{{url('/all-social')}}">All Social</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#news"><i class="fa fa-comments fa-fw"></i> Contacts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/contact-appearance')}}">Contact Config</a>
                                </li>
                                <li>
                                    <a href="{{url('/messages')}}">Messages</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#events"><i class="fa fa-calendar-o fa-fw"></i> Events<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/add-event')}}">Add Event</a>
                                </li>
                                <li>
                                    <a href="{{url('/all-event')}}">All Event</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#videos"><i class="fa fa-youtube-play fa-fw"></i> Videos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/add-video')}}">Add Videos</a>
                                </li>
                                <li>
                                    <a href="{{url('/all-video')}}">All Video</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="{{url('/newsletters')}}"><i class="fa fa-comment-o fa-fw"></i> Newsletters</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
            <!-- /.row -->
            @yield('admin_content')
        </div>
        <!-- /#page-wrapper -->
    

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('backend/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('backend/vendor/raphael/raphael.min.js')}}"></script>
    {{-- <script src="{{asset('backend/vendor/morrisjs/morris.min.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/data/morris-data.js')}}"></script> --}}
    
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('backend/dist/js/sb-admin-2.js')}}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    {{-- Sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        function confirmDelete() {
          return confirm('are you sure want to delete?');
        }
    </script>

    <script>
        $('#summernote').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
    </script>
   
</body>

</html>