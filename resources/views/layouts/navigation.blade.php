@if(Auth::check())
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="img/profile_small.jpg"></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                   <img src="{{asset('img/Universidad_de_Manila_Logo.png')}}" width="42" height="42">
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="{{ isActiveRoute('minor') }}">
                <a href="{{ url('/minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li>
            <li class="isActiveRoute('classmanage') ">
                <a href="{{ url('/classmanage') }}"><i class="fa fa-group"></i> <span class="nav-label">Class Management</span></a>
            </li>
             <li class="isActiveRoute('load') ">
                <a href="{{ url('/load') }}"><i class="fa fa-database"></i> <span class="nav-label">Teaching Load</span></a>
            </li>
            
        </ul>

    </div>


</nav>
 @else
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header" style="padding-bottom: 250px;">
              
                <div class="logo-element">
                   <img src="{{asset('img/Universidad_de_Manila_Logo.png')}}" width="42" height="42">
                </div>
            </li>
        
            <div class="dropdown profile-element">
            <li>

                <span><img src="{{asset('img/header_two.png')}}" width="210" height="150"></span>
            </li>
            </div>
        
        </ul>
        

    </div>


</nav>

@endif
