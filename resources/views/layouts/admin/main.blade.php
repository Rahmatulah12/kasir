@include('layouts.admin.header')
<div id="wrapper">
    @include('layouts.admin.sidebar')
    <div id="page-wrapper">
        @yield('content')
    </div>
</div>
@include('layouts.admin.footer')