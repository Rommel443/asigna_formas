<!DOCTYPE html>
<html>

<head>
    @include('partials.head')
</head>

<body class="theme-red">
    <!-- Page Loader -->  
    @include('partials.page_loader')
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar --> 
    @include('partials.search_bar')
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    @include('partials.top_bar')
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @include('partials.info')
            <!-- #User Info -->
            <!-- Menu -->
            @include('partials.menu')
            <!-- #Menu -->
            <!-- Footer -->
            @include('partials.footer')
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        @include('partials.right_sidebar')
        <!-- #END# Right Sidebar -->
    </section>

    @yield('content')

    
    @include('partials.javascripts')
</body>

</html>
