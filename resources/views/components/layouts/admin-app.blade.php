<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - DUM</title>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">--}}
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    @stack('date-css')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    @stack('editor-css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link" target="_blank">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">{{ auth()->check()? auth()->user()->name:'' }}</span>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('home') }}" class="dropdown-item" target="_blank">
                        <i class="fas fa-globe mr-4"></i>На сайт
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-4"></i> Выход
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.dashboard') }}" class="brand-link">
            <img src="{{ asset('img/logo20.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('admin/dist/img/place-holder-user.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ route('admin.users.edit', ['id' => auth()->check()? auth()->user()->id:'']) }}" class="d-block" wire:navigate>{{ auth()->check()? auth()->user()->name:'' }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                <li class="nav-item">
                        <a href="{{ route('admin.news') }}" class="nav-link {{ Request::is('admin/news') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-newspaper"></i>
                            <p>
                                Новости
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.partners.index') }}" class="nav-link {{ Request::is('admin/partners') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-handshake"></i>
                            <p>
                                Партнеры
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.questions.index') }}" class="nav-link {{ Request::is('admin/questions') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-question-circle"></i>
                            <p>
                                Вопросы
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.awards.index') }}" class="nav-link {{ Request::is('admin/awards') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-trophy"></i>
                            <p>
                                Награды
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.contacts') }}" class="nav-link {{ Request::is('admin/contacts') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                Компания
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Пользователи
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.files') }}" class="nav-link {{ Request::is('admin/files') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Файлы
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                        <a href="{{ route('admin.contract') }}" class="nav-link {{ Request::is('admin/contract') ? 'active' : '' }}" wire:navigate>
                            <i class="nav-icon fas fa-file-invoice-dollar"></i>
                            <p>
                                Договор
                            </p>
                        </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a href="{{ route('admin.info') }}" class="nav-link {{ Request::is('admin/info') ? 'active' : '' }}" wire:navigate>--}}
{{--                        <i class="nav-icon fas fa-info-circle"></i>--}}
{{--                        <p>--}}
{{--                            Карточка--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{ $slot }}
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2024 <a href="#">dum-tm.com</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
@stack('datepicker')
@stack('editor-js')
</body>
</html>
