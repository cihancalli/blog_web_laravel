<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description"
          content=""/>
    <meta name="author"
          content=""/>
    <title>
        @yield('titlePerson','Home') |
        Cihan Çallı - Mobile App Developer
    </title>
@include('frontend.person.links.bootstrap-header-link')

<body class="d-flex flex-column @yield('bodyClassPerson','')">
<main class="flex-shrink-0">
    <!-- Navigation-->
    @include('frontend.person.widgets.menus.navbar')
    </head>
