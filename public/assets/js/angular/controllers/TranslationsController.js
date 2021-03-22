DomixoweDev.controller('TranslationsController', function($scope, $http, $rootScope) {

    // Wstępna konfiguracja
    $scope.config = {
        loading: true,
        moduleTitle: 'Menadżer translacji',
        selectedLanguage: 'ALL'
    }

    $scope.languages = [
        {
            title: 'Polskie tłumaczenia',
            value: 'PL'
        },
        {
            title: 'Angielskie tłumaczenia',
            value: 'EN'
        },
        {
            title: 'Wszystkie tłumaczenia',
            value: 'ALL'
        }
    ]

    // Translacje
    $scope.translations = [];

    // Metoda inicjalizacyjna
    $scope.init = function() {
        $scope.config.loading = true;
        $http.get('/api/admin/translations')
            .success(function(data) {
                data.forEach(function(item) {
                    item.edit = false;
                });
                $scope.config.loading = false;
                $scope.translations = data;
            });
    };

    // Metoda do pobierania translacji na podstawie danego języka
    $scope.getTranslations = function(language) {
        $scope.config.selectedLanguage = language;
        if (language == 'ALL') {
            $scope.init();
        } else {
            $scope.config.loading = true;
            $http.get('/api/admin/translations/' + language)
                .success(function(data) {
                    $scope.translations = data;
                    $scope.config.loading = false;
                });
        }
    };

    // Usuwanie danej translacji
    $scope.deleteTranslation = function(translation) {
        var confirmation = confirm('Czy chcesz usunąć translację o id ' + translation.id + ' ?');
        if (confirmation)
        {
            $http.post('/api/admin/translation/' + translation.id, {})
                .success(function(data) {
                    $scope.getTranslations($scope.config.selectedLanguage);
                });
        }
    }

    // Operacja na templatce danej translacji (zmiana statusu edycji)
    $scope.toggleEdit = function(translation) {
        if (translation.edit == false) {
            translation.edit = true;
        } else {
            translation.edit = false;
        }
    }

    // Zapis zmian w danym tłumaczeniu
    $scope.saveChanges = function(translation) {
        var confirmation = confirm('Czy chcesz zapisać zmiany w translacji o id ' + translation.id + ' ?');
        console.log('nowy translate', translation);
        if (confirmation)
        {
            $http.post('/api/admin/translation/' + translation.id + '/edit', translation)
                .success(function(data) {
                    $scope.getTranslations($scope.config.selectedLanguage);
                })
        }
    }

    $scope.init();
});