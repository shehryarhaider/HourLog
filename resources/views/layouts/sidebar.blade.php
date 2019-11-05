 <!-- Start: Sidebar -->
 <aside id="sidebar_left" class="nano nano-primary">
    <div class="nano-content">
        <!-- sidebar menu -->
        <ul class="nav sidebar-menu">
            <li>
                <a class="accordion-toggle" href="#">
                    <span class="glyphicons glyphicons-cup"></span>
                    <span class="sidebar-title">User Managment</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="{{route('users')}}">
                            <span class="glyphicons glyphicons-edit"></span>Users</a>
                    </li>
                    <li>
                        <a href="{{route('roles')}}">
                            <span class="glyphicons glyphicons-calendar"></span>Roles </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="accordion-toggle" href="#">
                    <span class="glyphicons glyphicons-cup"></span>
                    <span class="sidebar-title">Master Files</span>
                    <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                    <li>
                        <a href="{{route('clients')}}">
                            <span class="glyphicons glyphicons-edit"></span>Clients</a>
                    </li>
                    <li>
                        <a href="{{route('phases')}}">
                            <span class="glyphicons glyphicons-calendar"></span>Phases </a>
                    </li>
                    <li>
                        <a href="{{route('roles')}}">
                            <span class="glyphicons glyphicons-calendar"></span>Status</a>
                    </li>
                </ul>
            </li>
        </ul>
        </li>
        </ul>
        <div class="sidebar-toggle-mini">
            <a href="#">
                <span class="fa fa-sign-out"></span>
            </a>
        </div>
    </div>
</aside>
