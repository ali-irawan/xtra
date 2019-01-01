{{-- Currently only CSS Bootstrap is provided --}}
@if(config(_XTRA_CONFIG_CSS) == _XTRA_CONFIG_CSS_BOOTSTRAP)
    <script src="{{ xtra_assets('jquery/jquery.slim.min.js') }}"></script>
    <script src="{{ xtra_assets('bootstrap/js/bootstrap.min.js') }}"></script>
@endif