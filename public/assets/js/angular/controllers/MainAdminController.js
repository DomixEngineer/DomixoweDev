DomixoweDev.controller('mainAdminController', function($scope, $location, $rootScope, $http) {

    // Ustawienie bazowego adresu URL do odwoływania się do API
    $rootScope.baseUrl = '10.0.0.10';

    // Nawigacja
    $scope.navbarItems = [
        {
            displayName: 'Dashboard',
            url: '/',
            id: 0
        },
        {
            displayName: 'Menadżer translacji',
            url: '/translations-managment',
            id: 1
        },
        {
            displayName: 'Wiadomości od użytkowników',
            url: '/users-messages',
            id: 2
        },
        {
            displayName: 'Zarządzanie treścią',
            url: '/content-manage',
            id: 3
        },
        {
            displayName: 'Użytkownicy',
            url: '/users-manage',
            id: 4
        },
        {
            displayName: 'Wyloguj się',
            url: '/logout',
            id: 5
        }
    ];

    // Do operowania na nawigacji
    $scope.activeItem = 0;

    // Operacje na nawigacji
    $scope.setActiveItem = function(item) {
        $scope.activeItem = item.id;
        $location.path(item.url);
    }

    // Wylogowanie się
    $scope.logout = function() {
        $http.get('/api/admin/logout')
            .success(function(data) {
                console.log(data);
            });
    }

    // Funkcja do wykonywania poszczególnych operacji / akcji na poszczególnych przedmiotach nawigacyjnych
    $scope.recognizeNavItem = function(item) {
        if (item.url == '/logout') {
            $scope.logout();
            var url = location.protocol + '//' + $rootScope.baseUrl;
            window.location.replace(url);
        }
    }

    // Wczytanie aktywowanej zakładki na podstawie adresu URL
    $scope.init = function() {
        var currentPath = $location.path();
        $scope.navbarItems.filter(function(item) {
            if (currentPath == item.url) {
                $scope.activeItem = item.id;
                return;
            }
        });
    }
    $scope.init();

});