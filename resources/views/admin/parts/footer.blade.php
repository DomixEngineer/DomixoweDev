</div>

<script src="{{ asset('assets/js/axios.min.js') }}"></script>
<script src="{{ asset('assets/js/vue.js') }}"></script>
<script src="{{ asset($script) }}"></script>

<!-- Nawigacja -->
<script>
        var nav = document.getElementById('admin-navbar');
        var selected_module = "{{ $module }}";
        function setNavActive(element)
        {
            document.getElementById(element).className += " " + "active";
        }
        setNavActive(selected_module);
</script>

</body>
</html>