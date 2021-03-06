<div class="container">
    <div class="container-left">
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Język</td>
                    <td>Klucz translacji</td>
                    <td>Wartość</td>
                    <td>Akcje</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="translation in translations">
                    <td>
                        ${ translation.id }
                    </td>
                    <td>
                        ${ translation.language }
                    </td>
                    <td>
                        ${ translation.translation_key }
                    </td>
                    <td>
                        ${ translation.value }
                    </td>
                    <td>
                        <a href="#" @click="deleteTranslation(translation)">Usuń</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container-right">
        <form class="form" v-on:submit.prevent="createTranslation()">
            <div class="form-row">
                <label for="langSelect" class="form-row-label">Język</label>
                <select class="form-row-select" id="langSelect" v-model="formData.lang">
                    <option value="PL">PL</option>
                    <option value="EN">EN</option>
                </select>
            </div>
            <div class="form-row">
                <label for="key" class="form-row-label">Klucz translacji</label>
                <input type="text" class="form-row-input" placeholder="Klucz translacji" id="key" v-model="formData.transKey">
            </div>
            <div class="form-row">
                <label for="value" class="form-row-label">Wartość</label>
                <textarea class="form-row-input" v-model="formData.value">
                </textarea>
            </div>
            <div class="form-row">
                <button class="form-row-btn">Dodaj translacje</button>
            </div>
        </form>
    </div>
</div>