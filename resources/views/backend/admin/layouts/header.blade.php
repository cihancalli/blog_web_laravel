<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.admin.links.meta')
    @include('backend.admin.links.bootstrap-header-link')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('backend.admin.widgets.menus.sidebars.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('backend.admin.widgets.menus.topbars.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
@include('backend.admin.widgets.headings.page-title-heading')
