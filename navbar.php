<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="<span class="navbar-"></span>collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.php"><img src="brand.png" alt="" height="30" width="30"> Project Management</a>
    </div>


    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> Task 3
                            <span class="pull-right text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> Task 2
                            <span class="pull-right text-muted small">10 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> Task 1
                            <span class="pull-right text-muted small">20 minutes ago</span>
                        </div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Tasks</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>

        </li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['fullname'] ?> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="setting.php?id=<?php echo $_SESSION['id_user']?>"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>

        </li>

    </ul>


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>

                </li>
                <li>
                    <a class="active" href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <?php // if($_SESSION['position'] == '8' || $_SESSION['position'] == '7'): ?>
                <?php if($_SESSION['position'] == '8'): ?>
                    <li>
                        <a href="#"><i class="fa fa-database fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="customer_list.php"><i class="fa fa-suitcase fa-fw"></i> Customer</a>
                            </li>
                            <li>
                                <a href="position_list.php"><i class="fa fa-tags fa-fw"></i> Position</a>
                            </li>
                            <li>
                                <a href="propos_list.php"><i class="fa fa-tag fa-fw"></i> Project Position</a>
                            </li>
                            <li>
                                <a href="roles_list.php"><i class="fa fa-ban fa-fw"></i> Roles</a>
                            </li>
                            <?php //if($_SESSION['position'] == 'admin'): ?>
                                <li>
                                    <a href="user_list.php"><i class="fa fa-users fa-fw"></i> User</a>
                                </li>
                            <?php //endif ?>
                        </ul>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="project_list.php"><i class="fa fa-folder fa-fw"></i> Project</a>
                </li>
                <?php if($_SESSION['position'] == '8' || $_SESSION['position'] == '7' || $_SESSION['position'] == '6' || $_SESSION['position'] == '5' || $_SESSION['position'] == '4' || $_SESSION['position'] == '3'): ?>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Report<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="report_participant.php"> Project Participant</a>
                            </li>
                            <li>
                                <a href="report_performance.php"> Project Performance</a>
                            </li>
                            <li>
                                <a href="report_technology_platform.php"> Project Technology Platform</a>
                            </li>
                            <li>
                                <a href="report_timeline.php"> Project Timeline</a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</nav>