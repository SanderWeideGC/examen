<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/backend.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/css/bootadmin.min.css">
    <link rel="stylesheet" href="/css/datatables.min.css">

    <title>DTV</title>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#">DTV</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Doe</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profiel</a>
                    <a href="#" class="dropdown-item">Uitloggen</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex main">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li><a href="/admin" class="{{ (request()->segment(1) == 'admin' && request()->segment(2) == '') ? 'active' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="/admin/gebruikers" class="{{ (request()->segment(2) == 'gebruikers') ? 'active' : '' }}"><i class="fas fa-utensils"></i> Gebruikers</a></li>
            <li><a href="/admin/leden" class="{{ (request()->segment(2) == 'leden') ? 'active' : '' }}"><i class="fas fa-users"></i> Leden</a></li>
            <li><a href="/admin/banen" class="{{ (request()->segment(2) == 'banen') ? 'active' : '' }}"><i class="fas fa-baseball-ball"></i> Banen</a></li>
            <li><a href="/admin/toernooien" class="{{ (request()->segment(2) == 'toernooien') ? 'active' : '' }}"><i class="fas fa-trophy"></i> Toernooien</a></li>
            <li><a href="/admin/kantine" class="{{ (request()->segment(2) == 'kantine') ? 'active' : '' }}"><i class="fas fa-utensils"></i> Kantine</a></li>
        </ul>
    </div>
