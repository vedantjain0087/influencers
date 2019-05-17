<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul side-navigation class="nav" id="side-menu">
            <li class="nav-header">

                <div class="dropdown profile-element">
                    <img alt="image" class="img-circle" src="img/profile_small.jpg"/>
                    <a class="dropdown-toggle" href>
                            <span class="clear">
                                <span class="block m-t-xs">
                                    <strong class="font-bold">Amelia Smith</strong>
                             </span>
                                <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                            </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a ui-sref="profile">Profile</a></li>
                        <li><a ui-sref="contacts">Contacts</a></li>
                        <li><a ui-sref="inbox">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="../login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>

            </li>
            <li class="active">
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="dashboard_1">Dashboard v.1</a></li>
                    <li ui-sref-active="active"><a ui-sref="dashboard_2">Dashboard v.2</a></li>
                    <li ui-sref-active="active"><a ui-sref="dashboard_3">Dashboard v.3</a></li>
                </ul>
            </li>

            <li>
                <a href=""><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="flot_chart">Flot Charts</a></li>
                    <li ui-sref-active="active"><a ui-sref="morris_chart">Morris.js Charts</a></li>
                    <li ui-sref-active="active"><a ui-sref="rickshaw_chart">Rickshaw Charts</a></li>
                    <li ui-sref-active="active"><a ui-sref="chartjs_chart">Chart.js</a></li>
                    <li ui-sref-active="active"><a ui-sref="peity_chart">Peity Charts</a></li>
                    <li ui-sref-active="active"><a ui-sref="sparkline_chart">Sparkline Charts</a></li>
                </ul>
            </li>
            <li>
                <a ui-sref="inbox"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="inbox">Inbox</a></li>
                    <li ui-sref-active="active"><a ui-sref="email_view">Email view</a></li>
                    <li ui-sref-active="active"><a ui-sref="email_compose">Compose email</a></li>
                </ul>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="widgets"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span> <span class="label label-info pull-right">NEW</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="basic_form">Basic form</a></li>
                    <li ui-sref-active="active"><a ui-sref="advanced_plugins">Advanced Plugins</a></li>
                    <li ui-sref-active="active"><a ui-sref="wizard.step_one">Wizard</a></li>
                    <li ui-sref-active="active"><a ui-sref="file_upload">File Upload</a></li>
                    <li ui-sref-active="active"><a ui-sref="text_editor">Text Editor</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="contacts">Contacts</a></li>
                    <li ui-sref-active="active"><a ui-sref="profile">Profile</a></li>
                    <li ui-sref-active="active"><a ui-sref="projects">Projects</a></li>
                    <li ui-sref-active="active"><a ui-sref="project_detail">Project detail</a></li>
                    <li ui-sref-active="active"><a ui-sref="file_manager">File manager</a></li>
                    <li ui-sref-active="active"><a ui-sref="calendar">Calendar</a></li>
                    <li ui-sref-active="active"><a ui-sref="faq">FAQ</a></li>
                    <li ui-sref-active="active"><a ui-sref="timeline">Timeline</a></li>
                    <li ui-sref-active="active"><a ui-sref="pin_board">Pin board</a></li>
                    <li ui-sref-active="active"><a ui-sref="invoice">Invoice</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="search_results">Search results</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">404 Page</a></li>
                    <li><a href="500.html">500 Page</a></li>
                    <li ui-sref-active="active"><a ui-sref="empy_page">Empty page</a></li>
                </ul>
            </li>

            <li >
                <a href=""><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="typography">Typography</a></li>
                    <li ui-sref-active="active"><a ui-sref="icons">Icons</a></li>
                    <li ui-sref-active="active"><a ui-sref="buttons">Buttons</a></li>
                    <li ui-sref-active="active"><a ui-sref="video">Video</a></li>
                    <li ui-sref-active="active"><a ui-sref="tabs_panels">Tabs & Panels</a></li>
                    <li ui-sref-active="active"><a ui-sref="notifications_tooltips">Notifications & Tooltips</a></li>
                    <li ui-sref-active="active"><a ui-sref="badges_labels">Badges, Labels, Progress</a></li>
                </ul>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="grid_options"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="static_table">Static Tables</a></li>
                    <li ui-sref-active="active"><a ui-sref="data_tables">Data Tables</a></li>
                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ui-sref-active="active"><a ui-sref="basic_gallery">Basic Gallery</a></li>
                    <li ui-sref-active="active"><a ui-sref="bootstrap_carousel">Bootstrap Carusela</a></li>

                </ul>
            </li>
            <li>
                <a href=""><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="">Third Level <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="">Third Level Item</a>
                            </li>
                            <li>
                                <a href="">Third Level Item</a>
                            </li>
                            <li>
                                <a href="">Third Level Item</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="">Second Level Item</a></li>
                    <li>
                        <a href="">Second Level Item</a></li>
                    <li>
                        <a href="">Second Level Item</a></li>
                </ul>
            </li>
            <li ui-sref-active="active">
                <a ui-sref="css_animations"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
            </li>
            <li class="special_link">
                <a href="../index.html"><i class="fa fa-html5"></i> <span class="nav-label">HTML/CSS Version</span></a>
            </li>
        </ul>

    </div>
</nav>