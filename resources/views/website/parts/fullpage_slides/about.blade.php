<section class="section about" data-anchor="about">
    <div class="mainContainer">
        <div class="about-left">
            <div class="about-left-avatar">
                <img 
                src="{{ asset('assets/images/main/dominik-casual-photo.png') }}" 
                class="about-left-avatar-image" 
                alt="Dominik Dziewulski programista aplikacji">
            </div>
            <div class="about-left-decorator">
                <img 
                src="{{ asset('assets/images/main/avatar-bottom-pattern.png') }}"
                class="about-left-decorator-pattern" 
                alt="wzorek">
            </div>
        </div>
        <div class="about-right">
            <div class="about-right-top">
                <h1 class="about-right-top-header">
                {{ translate('landingpage.secondslide.whoami') }}<br>
                <b>{{ translate('landingpage.secondslide.hello') }}</b>
                </h1>
            </div>
            <div class="about-right-bottom">
                <p class="about-right-bottom-text">
                <!-- Programista “<b>Fullstack developer</b>” z pasji, posiadam obecnie trzyletnie doświadczenie 
                komercyjne w branży informatycznej. Aktualnie <b>studiuję także informatykę</b> na uczelni 
                “Wyższa Szkoła Bankowa” w Chorzowie, uczę się w trybie zaocznym i znajduję się na 
                ostatnim roku studiów (studia inżynierskie). -->
                {{ translate('landingpage.secondslide.firstRow.programmer') }} <b> "Fullstack developer" </b>
                {{ translate('landingpage.secondslide.firstRow.passion') }}
                {{ translate('landingpage.secondslide.firstRow.studies') }}
                
                </p>
                <p class="about-right-bottom-text">
                {{ translate('landingpage.secondslide.firstRow.myhistory') }}
                <!-- Swoją przygodę z programowaniem rozpocząłem ponad 10 lat temu pisząc proste "moduły"
                na system Commodore64 (język BASIC). <br>
                W swojej ścieżce zawodowej przewinąłem się już przez wiele różnych języków (C++, C#, Java) itp..
                Lecz aktualnie w obecnej chwili jestem fullstack developerem opierającym się głównie na takich
                technologiach jak PHP, SQL, JavaScript, różnego rodzaju silniki sklepowe, systemy CMS / CRM i wiele
                innych. -->
                </p>
                <p class="about-right-bottom-text">
                Osoby zainteresowane mą personą oraz partnerów biznesowych zapraszam do sekcji kontaktu.
                </p>
            </div>
        </div>
    </div>
</section>