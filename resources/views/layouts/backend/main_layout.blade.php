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

            @include('layouts.backend.sidenav')

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

    <script type="text/javascript">
        function confirmDelete() {
          return confirm('are you sure want to delete?');
        }
    </script>

    <script>
        $('#summernote').summernote({
            height: 300,
            toolbar: [
    // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
            ]
        });
    </script>   
    
</body>
</html>
