<!-- Top navbar -->
<nav class="navbar navbar-expand top-navbar bg-body sticky-top px-3 px-md-4">
    <div class="container-fluid px-0">
        <div class="d-flex align-items-center gap-2">
            <button
                class="btn btn-sm btn-outline-secondary d-md-inline-flex d-inline-flex"
                type="button"
                aria-label="Toggle side update the iconbar"
                data-toggle="sidebar"
            >
                <i class="ri-menu-fold-line"></i>
            </button>
            <span class="navbar-brand-text d-none d-md-inline-block">Dashboard</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <!-- Search bar -->
            <div class="position-relative search-form d-none d-sm-block">
                <i class="ri-search-line search-icon"></i>
                <input type="search" class="form-control" placeholder="Search..." />
            </div>
            <!-- User dropdown -->
            <div class="dropdown">
                <button
                    class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2"
                    type="button"
                    id="userDropdown"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                >
                    <span
                        class="d-inline-flex justify-content-center align-items-center rounded-circle bg-primary text-white"
                        style="width: 28px; height: 28px; font-size: 0.8rem"
                    >
                        A
                    </span>
                    <span class="d-none d-sm-inline">Abdoulie</span>
                    <i class="ri-arrow-down-s-line"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li>
                        <a class="dropdown-item" href="profile.php"
                            ><i class="ri-settings-3-line me-2"></i>Settings
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item js-logout" href="#">
                            <i class="ri-logout-box-r-line me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>