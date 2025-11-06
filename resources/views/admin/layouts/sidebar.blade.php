<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box" style="display: flex; justify-content: center; align-items: center">
        <a href="{{ route('admin.dashboard') }}" class="logo-dark">
            <img src="{{ asset('assets/imgs/white.png') }}" style="width: 150px; height: 150px;" class="logo-sm"
                alt="logo sm">
            <img src="{{ asset('assets/imgs/white.png') }}" style="width: 150px; height: 150px;" class="logo-lg"
                alt="logo dark">
        </a>

        <a href="{{ route('admin.dashboard') }}" class="logo-light">
            <img src="{{ asset('assets/imgs/white.png') }}" style="width: 150px; height: 150px;" class="logo-sm"
                alt="logo sm">
            <img src="{{ asset('assets/imgs/white.png') }}" style="width: 150px; height: 150px;" class="logo-lg"
                alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">General</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- ========== App Menu End ========== -->
