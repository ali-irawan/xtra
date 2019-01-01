{{-- Currently only CSS Bootstrap is provided --}}
@if(config(_XTRA_CONFIG_CSS) == _XTRA_CONFIG_CSS_BOOTSTRAP)
    <link href="{{ xtra_assets('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
@endif
    <link href="{{ xtra_assets('xtra-themes/default/css/main.css') }}" rel="stylesheet" type="text/css" />