<!-- ========== Topbar Start ========== -->
<header class="topbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="d-flex align-items-center">
                <!-- Menu Toggle Button -->
                <div class="topbar-item">
                    <button type="button" class="button-toggle-menu me-2">
                        <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle"></iconify-icon>
                    </button>
                </div>

                <!-- Menu Toggle Button -->
                <div class="topbar-item">
                    <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Welcome!</h4>
                </div>
            </div>

            <div class="d-flex align-items-center gap-1">

                <!-- Theme Color (Light/Dark) -->
                <div class="topbar-item">
                    <button type="button" class="topbar-button" id="light-dark-mode">
                        <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                    </button>
                </div>


                <!-- User -->
                <div class="dropdown topbar-item">
                    <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            {{ Auth::guard('admin')->user()->name ?? 'Guest' }}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Hammad!</h6>
                        <a class="dropdown-item" href="">
                            <span class="align-middle">Profile</span>
                        </a>

                        <div class="dropdown-divider my-1"></div>

                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <a class="dropdown-item text-danger" href="javascript:void(0)"
                                onclick="this.closest('form').submit()">
                                <span class="align-middle">Logout</span>
                            </a>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
