<section class="section about" data-anchor="about">
    <div class="blockAlignment">
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
                    {{ translate('landingpage.secondslide.firstRow.programmer') }} <b> "Fullstack developer" </b>
                    {{ translate('landingpage.secondslide.firstRow.passion') }}
                    {{ translate('landingpage.secondslide.firstRow.studies') }}
                    
                    </p>
                    <p class="about-right-bottom-text">
                    {{ translate('landingpage.secondslide.firstRow.myhistory') }}
                    </p>
                    <p class="about-right-bottom-text">
                        {{ translate('landingpage.secondslide.firstRow.interestedPeople') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>