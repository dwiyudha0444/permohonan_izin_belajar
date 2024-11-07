@include('dashboard.head')

<body class="g-sidenav-show  bg-gray-100">
    @include('dashboard.sidbarUser')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('dashboard.navbarUser')
        @yield('content')
    </main>

    @include('dashboard.bottom')
