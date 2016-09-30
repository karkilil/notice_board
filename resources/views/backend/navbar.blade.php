<?php
/**
 * Created by PhpStorm.
 * User: LILz
 * Date: 16/09/27
 * Time: 11:39 AM
 */
        ?>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand header-title" href="#">NOTICE BOARD SYSTEM</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-user fa-fw"></i>User Account <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

        </ul>

        <div class="navbar-default sidebar" role="navigation" style="text-align: center;">

            <img src="/img/pls.png" class="img-circle" alt="Cinque Terre" width="70" height="70">
            <h5>admin</h5>


            <li class="sidebar-search">

                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>

            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Post Notice</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square"></i>Edit Notice </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-plus-square"></i>Add User </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-eye-slash"></i> View User</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-share-square-o"></i> View Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
{{--</div>--}}
<!-- /#wrapper -->
