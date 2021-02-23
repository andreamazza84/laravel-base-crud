        <header id="header">
            <div class="menu menu-left">
                MyBlogLogo
            </div>
            <ul class="menu menu-right">
                <li><a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('blog') }}" class="{{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('contacts') }}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}">Contatti</a></li>
                <li><a href="{{ route('posts.index') }}" class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}">Admin</a></li>
            </ul>
        </header>   
        <main id="main">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <footer id="footer">

        </footer>
    </body>
</html>

