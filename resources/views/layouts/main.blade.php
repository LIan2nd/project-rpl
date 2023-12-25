@include('partials.head')

<body>
    <div class="page-wrapper">

        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
        @include('partials.script')
</body>
