<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DomixoweDev - Logowanie</title>
        <link rel="stylesheet" href="{{ asset('assets/css/admin-login.css') }}">
    </head>
    <body>
        <div class="login" id="admin-login">
            <template v-if="!isLoggedIn">
                <h1 class="login-header">DomixoweCMS - Logowanie</h1>
                <form class="login-form" v-on:submit.prevent="submitForm()">
                    <div class="login-form-row">
                        <div class="login-form-row-form_group">
                            <label for="email" class="login-form-row-form_group-label">Adres E-mail</label>
                            <input 
                                class="login-form-row-form_group-input" 
                                type="email" 
                                placeholder="email" 
                                id="email"
                                v-model="formData.email"
                            >
                        </div>
                    </div>
                    <div class="login-form-row">
                        <div class="login-form-row-form_group">
                            <label for="password" class="login-form-row-form_group-label">Hasło</label>
                            <input 
                                class="login-form-row-form_group-input" 
                                type="password" 
                                placeholder="hasło" 
                                id="password"
                                v-model="formData.password"
                            >
                        </div>
                    </div>
                    <div class="login-form-row">
                        <div class="login-form-row-form_group">
                            <button class="login-form-row-form_group-login_button">Zaloguj się</button>
                        </div>
                    </div>
                </form>
            </template>
            <template v-else>
                <h1>Pomyślnie zalogowano</h1>
            </template>
        </div>
        <script src="{{ asset('assets/js/axios.min.js') }}"></script>
        <script src="{{ asset('assets/js/vue.js') }}"></script>
        <script src="{{ asset('assets/js/admin.js') }}"></script>
    </body>
</html>
