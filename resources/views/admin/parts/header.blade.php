<!DOCTYPE html>
<html lang="PL">
<head>
    <title>domixowe.dev - admin panel</title>
    <meta charset="utf-8">
    <meta name="description" content="lorem ipsum">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('assets/css/fullpage.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-panel.css') }}">
</head>
<body>

<div id="admin-app">
    
<div class="admin-navbar" id="admin-navbar">
    <ul class="admin-navbar-nav">
        <li class="admin-navbar-nav-item" id="translations-managment">
            <a href="/admin/panel/translations-managment" class="admin-navbar-nav-item-link">
                Menadżer translacji
            </a>
        </li>
        <li class="admin-navbar-nav-item" id="user-messages">
            <a href="/admin/panel/user-messages" class="admin-navbar-nav-item-link">
                Wiadomości od użytkowników
            </a>
        </li>
        <li class="admin-navbar-nav-item" id="content-managment">
            <a href="/admin/panel/content-managment" class="admin-navbar-nav-item-link">
                Zarządzanie treścią
            </a>
        </li>
        <li class="admin-navbar-nav-item" id="users-accounts">
            <a href="/admin/panel/users-accounts" class="admin-navbar-nav-item-link">
                Użytkownicy
            </a>
        </li>
        <li class="admin-navbar-nav-item" id="users-accounts">
            <a href="/admin/panel/loggout" class="admin-navbar-nav-item-link">
                Wyloguj się
            </a>
        </li>
    </ul>
</div>
    
   