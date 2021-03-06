<section class="section contact" data-anchor="contact">
    <div class="blockAlignCenter">
        <div class="mainContainer">
            <div class="contact-heading">
                <h2 class="contact-heading-header">{{ translate('landingpage.fifthslide.contact.header') }}</h2>
            </div>
            <div class="contact-container">
                <div class="contact-container-left">
                    <h4 class="contact-container-left-heading">{{ translate('landingpage.fifthslide.contact.contactData') }}</h4>  
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
                    <template v-if="!formSended">
                        <form class="contact-container-right-form" v-on:submit.prevent="submitForm">
                            <div class="contact-container-right-form-row">
                                <div class="long-col">
                                    <input 
                                    class="contact-container-right-form-row-input long" 
                                    placeholder="{{ translate('landingpage.fifthslide.contact.name') }}"
                                    v-model="formData.name"
                                    >
                                    <p 
                                    class="contact-container-right-form-row-error" 
                                    id="form-name"
                                    v-if="formErrors.name"
                                    >
                                    ${ formErrors.name[0] }
                                    </p>
                                </div>
                            </div>
                            <div class="contact-container-right-form-row">
                                <div class="short-col">
                                    <input 
                                    class="contact-container-right-form-row-input short" 
                                    placeholder="{{ translate('landingpage.fifthslide.contact.phoneNumber') }}"
                                    v-model="formData.phoneNumber"
                                    >
                                    <p 
                                    class="contact-container-right-form-row-error" 
                                    id="form-phone"
                                    v-if="formErrors.phoneNumber"
                                    >
                                    ${ formErrors.phoneNumber[0] }
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
                                    v-if="formErrors.email"
                                    >
                                    ${ formErrors.email[0] }
                                    </p>
                                </div>
                            </div>
                            <div class="contact-container-right-form-row">
                                <div class="long-col">
                                    <textarea 
                                    class="contact-container-right-form-row-input" 
                                    placeholder="{{ translate('landingpage.fifthslide.contact.message') }}"
                                    v-model="formData.message"
                                    ></textarea>
                                    <p 
                                    class="contact-container-right-form-row-error" 
                                    id="form-message"
                                    v-if="formErrors.message"
                                    >
                                    ${ formErrors.message[0] }
                                    </p>
                                </div>
                            </div>
                            <div class="contact-container-right-form-row">
                                <div class="long-col">
                                    <button class="contact-container-right-form-row-sendBtn">{{ translate('landingpage.fifthslide.contact.sendButton') }}</button>
                                </div>
                            </div>
                        </form>
                    </template>
                    <template v-else>
                        <h1 class="contact-container-right-thankyou">
                            {{ translate('landingpage.fifthslide.contact.thanksMessage') }}
                        </h1>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>