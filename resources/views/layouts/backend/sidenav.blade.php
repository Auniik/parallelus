<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> Visit Site</a>
            </li>
            <li>
                <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#Settings"><i class="fa fa-cogs fa-fw"></i> Site Settings<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/settings')}}">Basic Configs</a>
                    </li>
                    <li>
                        <a href="{{url('/background')}}">Background Image</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#slider"><i class="fa fa-picture-o fa-fw"></i> Slider<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/slider/add')}}">Add Slider</a>
                    </li>
                    <li>
                        <a href="{{url('/slider/all')}}">All Slider</a>
                    </li>
                </ul>
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
            <li>
                <a href="#user"><i class="fa fa-user fa-fw"></i> User Management<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{url('/user/add')}}">Add User</a>
                    </li>
                    <li>
                        <a href="{{url('/user/all')}}">All User</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>