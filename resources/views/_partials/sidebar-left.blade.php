<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="/" class="td-n">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="{{ asset('admin-templates/assets/static/images/logo.png')}}" alt="">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 active">
                <a class="sidebar-link" href="{{route('admin.dashboard')}}" default>
                    <span class="icon-holder"><i class="c-blue-500 ti-home"></i> 
  						</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-email') }}">
                    <span class="icon-holder"><i class="c-brown-500 ti-email"></i> 
  						</span>
                    <span class="title">Email</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-compose') }}">
                    <span class="icon-holder"><i class="c-blue-500 ti-share"></i> 
  						</span>
                    <span class="title">Compose</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-calendar') }}">
                    <span class="icon-holder"><i class="c-deep-orange-500 ti-calendar"></i> 
  						</span>
                    <span class="title">Calendar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-chat') }}">
                    <span class="icon-holder"><i class="c-deep-purple-500 ti-comment-alt"></i> 
  						</span>
                    <span class="title">Chat</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-chart') }}">
                    <span class="icon-holder"><i class="c-indigo-500 ti-bar-chart"></i> 
  						</span>
                    <span class="title">Charts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="sidebar-link" href="{{ route('admin.template-form') }}">
                    <span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> 
  						</span>
                    <span class="title">Forms</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="sidebar-link" href="{{ route('admin.template-element') }}">
                    <span class="icon-holder"><i class="c-pink-500 ti-palette"></i> 
                    </span><span class="title">UI Elements</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span>
                    <span class="title">Tables</span> <span class="arrow"><i class="ti-angle-right"></i></span></a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{ route('admin.template-basictable') }}">Basic Table</a></li>
                    <li><a class="sidebar-link" href="{{ route('admin.template-datatable') }}">Data Table</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="c-purple-500 ti-map"></i> </span>
                    <span class="title">Maps</span> 
                    <span class="arrow"><i class="ti-angle-right"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('admin.template-googlemaps') }}">Google Map</a></li>
                    <li><a href="{{ route('admin.template-vectormaps') }}">Vector Map</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="c-red-500 ti-files"></i> </span>
                    <span class="title">Pages</span> <span class="arrow"><i class="ti-angle-right"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="sidebar-link" href="{{ route('admin.dashboard') }}">404</a></li>
                    <li><a class="sidebar-link" href="{{ route('admin.dashboard') }}">500</a></li>
                    <li><a class="sidebar-link" href="{{ route('admin.dashboard') }}">Sign In</a></li>
                    <li><a class="sidebar-link" href="{{ route('admin.dashboard') }}">Sign Up</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="c-teal-500 ti-view-list-alt"></i> </span>
                    <span class="title">Multiple Levels</span> 
                    <span class="arrow"><i class="ti-angle-right"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                    <li class="nav-item dropdown"><a href="javascript:void(0);"><span>Menu Item</span> 
                        <span class="arrow"><i class="ti-angle-right"></i></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Menu Item</a></li>
                            <li><a href="javascript:void(0);">Menu Item</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>