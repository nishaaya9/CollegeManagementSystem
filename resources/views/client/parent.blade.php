@include('client.head')

<body>
    @include('client.header')
    <div class="body_overlay"></div>

    @yield('content')

    @include('client.footer')