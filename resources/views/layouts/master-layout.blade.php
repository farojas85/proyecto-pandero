@auth
    @include('layouts.partials.template-master')
@else
    @include('layouts.partials.template-guest')
@endauth
