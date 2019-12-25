@section('sidebar')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="ti-shield menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ strpos(Route::currentRouteName(), 'admin') === false ? '' : 'active' }}">
            <a class="nav-link" href="{{ route('admin.index') }}">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Administrator</span>
            </a>
        </li>
        <li class="nav-item {{ strpos(Route::currentRouteName(), 'post') === false ? '' : 'active' }}">
            <a class="nav-link" href="{{ route('post.index') }}">
                <i class="ti-file menu-icon"></i>
                <span class="menu-title">Post</span>
            </a>
        </li>
        <li class="nav-item {{ strpos(Route::currentRouteName(), 'category') === false ? '' : 'active' }}">
            <a class="nav-link" href="{{ route('category.index') }}">
                <i class="ti-receipt menu-icon"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item {{ strpos(Route::currentRouteName(), 'gallery') === false ? '' : 'active' }}">
            <a class="nav-link" href="{{ route('gallery.index') }}">
                <i class="ti-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-palette menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li> -->
    </ul>
</nav>
@endsection