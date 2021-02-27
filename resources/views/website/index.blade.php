@include('website.parts.header')
@include('website.parts.nav')

<div id="fullpage" class="app">
    @include('website.parts.fullpage_slides.hello')
    @include('website.parts.fullpage_slides.about')
    @include('website.parts.fullpage_slides.workshop')
    @include('website.parts.fullpage_slides.experience')
    @include('website.parts.fullpage_slides.contact')
</div>

<script src="{{ asset('assets/js/axios.min.js') }}"></script>
<script src="{{ asset('assets/js/vue.js') }}"></script>
<script src="{{ asset('assets/js/fullpage.min.js') }}"></script>
<script src="{{ asset('assets/js/fullpage.extensions.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>