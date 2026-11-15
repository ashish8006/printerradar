<!DOCTYPE html>
<html lang="en">

<head>

    <!-- TITLE -->
    <title>Printerradar</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url('admin-asset/asset/chartist.min.css'); ?>">
    <link href="<?php echo base_url('admin-asset/asset/bootstrap-select.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('admin-asset/asset/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/global.css'); ?>">

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <!-- Nav header start -->
        <div class="nav-header">
            <a href="<?php echo base_url('/');  ?>" class="brand-logo fs-3 text-primary">
                Printerradar
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!-- Nav header end -->


        <!-- Header start -->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="<?php echo base_url('admin-asset/asset/1.jpg') ?>" width="20" alt="">
                                    <div class="header-info">
                                        <span>Smith</span>
                                        <small>Admin</small>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?= base_url('admin/logout') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header end ti-comment-alt -->

        <!-- Sidebar start -->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        
                    </li> -->
                      <li><a href="javascript:void(0);">Dashboard</a></li>

                      <li><a href="<?php echo base_url('admin/reviews'); ?>">Manage Review</a></li>
                            <li><a href="<?php echo base_url('admin/blogs'); ?>">Blogs</a></li>

                </ul>

                
            </div>
        </div>
        <!-- Sidebar start -->
        <div class="content-body">