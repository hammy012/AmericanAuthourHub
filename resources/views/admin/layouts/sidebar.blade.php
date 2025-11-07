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

            <li class="menu-title mt-2">Services</li>

            <li class="nav-item">
                <a class="nav-link" href="#sidebarServices" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarServices">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:handshake-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Services </span>
                </a>
                <div class="collapse" id="sidebarServices">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('admin.services.create') }}">Add</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('admin.services.index') }}">List</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title mt-2">FAQs</li>

            <li class="nav-item">
                <a class="nav-link" href="#sidebarFaqs" data-bs-toggle="collapse" role="button" aria-expanded="false"
                    aria-controls="sidebarFaqs">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> FAQs </span>
                </a>
                <div class="collapse" id="sidebarFaqs">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('admin.add-new-faq') }}">Add</a>
                        </li>
                        <li class="sub-nav-item">
                            <a class="sub-nav-link" href="{{ route('admin.faqs.index') }}">List</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="menu-title mt-2">Profile setting</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.profile-view') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:user-circle-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Profile </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.business-setting') }}">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                    </span>
                    <span class="nav-text"> Business Setting </span>
                </a>
            </li>


        </ul>
    </div>
</div>
<!-- ========== App Menu End ========== -->
