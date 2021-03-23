DomixoweDev.controller('UsersMessagesController', ['$scope', '$http', 'fakeLoopIterator', function($scope, $http, fakeLoopIterator) {

    // Wstępna konfiguracja
    $scope.config = {
        loading: true,
        moduleTitle: 'Wiadomości od użytkowników'
    }

    // Funkcja sztucznego iteratora
    // Sztuczne generowanie tablicy za pomocą naszego iteratora (tylko do testów)
    $scope.fakeIterator = fakeLoopIterator(6);

    // Wiadomości od userów
    $scope.messages = [];

    // Metoda inicjalizacyjna
    $scope.init = function() {
        $scope.config.loading = true;
        $http.get('/api/admin/users-messages')
            .success(function(data) {
                $scope.config.loading = false;
                $scope.messages = data;
            });
    };

    // Funkcja pomocnicza do parsacji JSON'ów
    $scope.jsonParser = function(json) {
        return JSON.parse(json);
    }

    // Usuwanie wiadomości
    $scope.deleteMessage = function(message) {
        var confirmation = confirm('Czy chcesz usunąć wiadomość o id ' + message.id + ' ?');
        if (confirmation) {
            $http.post('/api/admin/users-messages/' + message.id + '/delete')
                .success(function(data) {
                    $scope.init();
                });
        }
    }

    // Inicjacja
    $scope.init();

}]);