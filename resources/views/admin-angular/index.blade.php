<!DOCTYPE html>
<html lang="pl" ng-app="DomixoweDev">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DomixoweDev - Admin panel</title>
        <link rel="stylesheet" href="{{ asset('assets/css/admin-angular.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>

        <div class="admin" ng-controller="mainAdminController" ng-cloak>
            <div class="admin-left">
                <ul class="navbar">
                    <li 
                        ng-repeat="item in navbarItems" 
                        class="navbar-item" 
                        ng-click="setActiveItem(item); recognizeNavItem(item)"
                        ng-class="{ 'active' : item.id == activeItem }"
                    >
                        <a href="#${ item.url }" class="navbar-item-link">${ item.displayName }</a>
                    </li>
                </ul>
            </div>
            <div class="admin-right">
                <ng-view></ng-view>
            </div>
        </div>

        <script src="{{ asset('assets/js/angular/angular.min.js') }}"></script>
        <script src="{{ asset('assets/js/angular/angular-route.js') }}"></script>
        <script src="{{ asset('assets/js/angular/app.js') }}"></script>

        <!-- Kontrolery -->
        <script src="{{ asset('assets/js/angular/controllers/MainAdminController.js') }}"></script>
        <script src="{{ asset('assets/js/angular/controllers/TranslationsController.js') }}"></script>
        <script src="{{ asset('assets/js/angular/controllers/UsersMessagesController.js') }}"></script>

    </body>
</html>
