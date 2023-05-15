@include('admin.head')

<body>
    @include('admin.navbar')
    @include('admin.sidebar')
    <div class="body_overlay"></div>

    @yield('content')

    @include('admin.footer')