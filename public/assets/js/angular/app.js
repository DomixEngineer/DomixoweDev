var DomixoweDev = angular.module('DomixoweDev', ['ngRoute'], setGlobalConfiguration);

// Wstępna konfiguracja routingu
DomixoweDev.config(function($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: 'assets/js/angular/views/home.htm'
    })
    .when('/translations-managment', {
        templateUrl: 'assets/js/angular/views/translations.htm',
        controller: 'TranslationsController'
    })
    .when('/users-messages', {
        templateUrl: 'assets/js/angular/views/usersMessages.htm',
        controller: 'UsersMessagesController'
    })
});

// Globalna konfiguracja
function setGlobalConfiguration($interpolateProvider) {

    // Ustawienie domyślnych delimiterów
    $interpolateProvider.startSymbol('${');
    $interpolateProvider.endSymbol('}');

}

// Funkcja pomocnicza
function fakeLoopIterator(scope) {
    var array = [];
    for (var x = 0; x <= scope; x++) {
        array.push(x);
    }
    return array;
}

// Injection funkcji pomocniczej
DomixoweDev.value('fakeLoopIterator', fakeLoopIterator);
