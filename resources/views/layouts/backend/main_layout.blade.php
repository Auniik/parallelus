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
    <!-- Custom Fonts -->
    <link href="{{asset('backend/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
</head>

<body>
    @include('layouts.backend.navbar')
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
                            <a href="{{url('/settings')}}"><i class="fa fa-cogs fa-fw"></i> Basic Configs</a>
                        </li>
                        
                        <li>
                            <a href="#about"><i class="fa fa-comment fa-fw"></i> About<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/about/edit')}}">Update About</a>
                                </li>
                                <li>
                                    <a href="{{url('/feature/edit')}}">Update Feature</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#issues"><i class="fa fa-list-alt fa-fw"></i> Issues<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/issue/appearance')}}">Issue Config</a>
                                </li>
                                <li>
                                    <a href="{{url('/issue/add')}}">Add Issue</a>
                                </li>
                                <li>
                                    <a href="{{url('/issue/all')}}">View Issues</a>
                                </li>
                            </ul>                            
                        </li>                        
                        <li>
                            <a href="#news"><i class="fa fa-globe fa-fw"></i> News<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/news/add')}}">Add News</a>
                                </li>
                                <li>
                                    <a href="{{url('/news/all')}}">All News</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#social"><i class="fa fa-link fa-fw"></i> Social<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/social/add')}}">Add Social</a>
                                </li>
                                <li>
                                    <a href="{{url('/social/all')}}">All Social</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#news"><i class="fa fa-comments fa-fw"></i> Contacts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/contact/appearance')}}">Contact Config</a>
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
                                    <a href="{{url('/event/add')}}">Add Event</a>
                                </li>
                                <li>
                                    <a href="{{url('/event/all')}}">All Event</a>
                                </li>
                            </ul>                            
                        </li>
                        <li>
                            <a href="#videos"><i class="fa fa-youtube-play fa-fw"></i> Videos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('/video/add')}}">Add Videos</a>
                                </li>
                                <li>
                                    <a href="{{url('/video/all')}}">All Video</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
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
