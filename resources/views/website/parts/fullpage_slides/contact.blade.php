<section class="section contact" data-anchor="contact">
    <div class="blockAlignCenter">
        <div class="mainContainer">
            <div class="contact-heading">
                <h2 class="contact-heading-header">Kontakt</h2>
            </div>
            <div class="contact-container">
                <div class="contact-container-left">
                    <h4 class="contact-container-left-heading">Dane kontaktowe</h4>  
                    <!-- <p class="contact-container-left-singleData">
                        <span class="contact-container-left-singleData-icon">
                            <img src="{{ asset('assets/images/main/phone-icon.png') }}" class="" alt="domixowe.dev numer kontnaktowy">
                        </span>
                        <span class="contact-container-left-singleData-text">+48 664 840 233</span>
                    </p> -->
                    <p class="contact-container-left-singleData">
                        <span class="contact-container-left-singleData-icon">
                            <img src="{{ asset('assets/images/main/mail-icon.png') }}" class="" alt="domixowe.dev adres mailowy">
                        </span>
                        <span class="contact-container-left-singleData-text">contact@domixowe.dev</span>
                    </p>
                    <p class="contact-container-left-singleData">
                        <span class="contact-container-left-singleData-icon">
                            <img src="{{ asset('assets/images/main/website-icon.png') }}" class="" alt="domixowe.dev strona internetowa">
                        </span>
                        <span class="contact-container-left-singleData-text">https://domixowe.dev</span>
                    </p>
                    <p class="contact-container-left-singleData">
                        <span class="contact-container-left-singleData-icon">
                            <img src="{{ asset('assets/images/main/map-icon.png') }}" class="" alt="domixowe.dev lokalizacja">
                        </span>
                        <span class="contact-container-left-singleData-text">Polska, Bytom 41-902</span>
                    </p>
                </div>
                <div class="contact-container-right">
                    <form class="contact-container-right-form" v-on:submit.prevent="submitForm">
                        <div class="contact-container-right-form-row">
                            <div class="long-col">
                                <input 
                                class="contact-container-right-form-row-input long" 
                                placeholder="Imię"
                                v-model="formData.name"
                                >
                                <p 
                                class="contact-container-right-form-row-error" 
                                id="form-name"
                                >UZUPEŁNIJ WYMAGANE POLE
                                </p>
                            </div>
                        </div>
                        <div class="contact-container-right-form-row">
                            <div class="short-col">
                                <input 
                                class="contact-container-right-form-row-input short" 
                                placeholder="Nr. tel"
                                v-model="formData.phoneNumber"
                                >
                                <p 
                                class="contact-container-right-form-row-error" 
                                id="form-phone"
                                >NIEPOPRAWNY NUMER
                                </p>
                            </div>
                            <div class="short-col">
                                <input 
                                class="contact-container-right-form-row-input short" 
                                placeholder="E-mail"
                                v-model="formData.email"
                                >
                                <p 
                                class="contact-container-right-form-row-error" 
                                id="form-mail"
                                >NIEPOPRAWNY EMAIL
                                </p>
                            </div>
                        </div>
                        <div class="contact-container-right-form-row">
                            <div class="long-col">
                                <textarea 
                                class="contact-container-right-form-row-input" 
                                placeholder="Wiadomość"
                                v-model="formData.message"
                                ></textarea>
                                <p 
                                class="contact-container-right-form-row-error" 
                                id="form-message"
                                >
                                UZUPEŁNIJ WYMAGANE POLE
                                </p>
                            </div>
                        </div>
                        <div class="contact-container-right-form-row">
                            <div class="long-col">
                                <button class="contact-container-right-form-row-sendBtn">WYŚLIJ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>