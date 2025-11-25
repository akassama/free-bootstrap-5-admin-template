<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8" />
        <title>Bootstrap 5 Admin Starter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Remixicon -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

        <!-- DataTables (Bootstrap 5) -->
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css"
        />

        <!-- Toastr -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        />

        <style>
            /* ************ Roots Variable ************ */
            :root {
                --sidebar-width: 240px;
                --top-navbar-height: 56px;
                --card-border-radius: 0.5rem;
                --card-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
                --transition-speed: 0.2s;
            }

            body {
                min-height: 100vh;
            }

            .layout {
                display: flex;
                min-height: 100vh;
                background-color: var(--bs-body-bg);
            }

            /* ************ Sidebar ************ */
            .sidebar {
                width: var(--sidebar-width);
                border-right: 1px solid var(--bs-border-color);
                background-color: var(--bs-body-bg);
                padding-top: 0.75rem;
                position: sticky;
                top: 0;
                align-self: flex-start;
                height: 100vh;
                transition: margin-left var(--transition-speed) ease-in-out;
            }

            .sidebar-header {
                padding: 0.5rem 1rem 1rem;
            }

            .sidebar-brand {
                font-weight: 600;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                gap: 0.4rem;
            }

            .sidebar .nav-link {
                display: flex;
                align-items: center;
                gap: 0.75rem;
                border-radius: 0.5rem;
                padding: 0.6rem 0.9rem;
                color: var(--bs-body-color);
                font-size: 0.95rem;
                margin: 0.1rem 0.75rem;
            }

            .sidebar .nav-link i {
                font-size: 1.1rem;
            }

            .sidebar .nav-link.active,
            .sidebar .nav-link:hover {
                background-color: var(--bs-primary-bg-subtle);
                color: var(--bs-primary);
            }

            .sidebar-section-title {
                font-size: 0.75rem;
                text-transform: uppercase;
                letter-spacing: 0.06em;
                margin: 0.75rem 0.75rem 0.25rem;
                color: var(--bs-secondary-color);
            }

            body.sidebar-collapsed .sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }

            /* ************ Top navbar ************ */
            .top-navbar {
                border-bottom: 1px solid var(--bs-border-color);
                height: var(--top-navbar-height);
            }

            .navbar-brand-text {
                font-weight: 600;
            }

            /* ************ Search bar ************ */
            .search-form {
                max-width: 300px;
            }

            .search-form .form-control {
                border-radius: 1.5rem;
                padding-left: 2.5rem;
            }

            .search-form .search-icon {
                position: absolute;
                left: 1rem;
                top: 50%;
                transform: translateY(-50%);
                color: var(--bs-secondary-color);
                z-index: 5;
            }

            /* ************ Main content ************ */
            .content-wrapper {
                flex: 1 1 auto;
                min-width: 0;
            }

            .page {
                max-width: 1200px;
                margin: 0 auto;
            }

            /* ************ Dashboard cards ************ */
            .stat-card-icon {
                width: 32px;
                height: 32px;
                border-radius: 999px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
            }

            .stat-card-label {
                font-size: 0.85rem;
                text-transform: uppercase;
                letter-spacing: 0.06em;
                color: var(--bs-secondary-color);
            }

            .stat-card-value {
                font-size: 1.25rem;
                font-weight: 600;
            }

            /* ************ Responsive cards ************ */
            .card {
                border-radius: var(--card-border-radius);
                box-shadow: var(--card-box-shadow);
                border: 2.0px solid var(--bs-border-color);
            }

            .card-header {
                background-color: var(--bs-body-bg);
                border-bottom: 1px solid var(--bs-border-color);
                padding: 0.75rem 1rem;
            }

            .card-title {
                font-size: 1rem;
                font-weight: 600;
                margin-bottom: 0;
            }

            /* ************ Chart canvas ************ */
            .chart-canvas {
                width: 100% !important;
                height: 260px !important;
            }

            /* ************ Table styles ************ */
            .table-card .table {
                margin-bottom: 0;
            }

            .table-card .table th {
                border-top: none;
                font-weight: 600;
                font-size: 0.875rem;
                color: var(--bs-secondary-color);
            }

            /* ************ User avatars ************ */
            .user-avatar {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                object-fit: cover;
            }

            /* ************ Profile layout ************ */
            .profile-sidebar {
                border-right: 1px solid var(--bs-border-color);
            }

            /* ************ Breadcrumb ************ */
            .breadcrumb {
                background-color: transparent;
                padding: 0.5rem 0;
                margin-bottom: 1rem;
            }

            .breadcrumb-item a {
                color: var(--bs-primary);
                text-decoration: none;
            }

            .breadcrumb-item.active {
                color: var(--bs-secondary-color);
            }

            /* ************ Placeholder content ************ */
            .placeholder-content {
                min-height: 200px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                color: var(--bs-secondary-color);
            }

            .placeholder-content i {
                font-size: 3rem;
                margin-bottom: 1rem;
                opacity: 0.5;
            }

            /* ************ Theme buttons ************ */
            .btn-theme {
                min-width: 90px;
            }

            .btn-theme.active {
                background-color: var(--bs-primary);
                border-color: var(--bs-primary);
                color: #fff;
            }

            /* ************ Footer ************ */
            .footer {
                background-color: var(--bs-body-bg);
            }

            .footer a {
                color: var(--bs-secondary-color);
                transition: color var(--transition-speed);
            }

            .footer a:hover {
                color: var(--bs-primary);
            }

            @media (max-width: 767.98px) {
                .sidebar {
                    position: fixed;
                    z-index: 1040;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    margin-left: calc(-1 * var(--sidebar-width));
                }

                body.sidebar-collapsed .sidebar {
                    margin-left: 0;
                }

                body.sidebar-collapsed .sidebar-backdrop {
                    display: block;
                }

                .sidebar-backdrop {
                    position: fixed;
                    inset: 0;
                    background-color: rgba(0, 0, 0, 0.25);
                    z-index: 1030;
                    display: none;
                }

                .search-form {
                    max-width: 200px;
                }
            }
        </style>
    </head>
    <body>
        <div class="layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-header d-flex justify-content-between align-items-center">
                    <div class="sidebar-brand">
                        <i class="ri-flashlight-line text-primary"></i>
                        <span>Laravel</span>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary d-md-none" type="button" data-toggle="sidebar">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="sidebar-body"  id="sidebar-body">
                    <?php include_once 'includes/_sidebar.php'; ?>
                </div>
            </aside>
            <div class="sidebar-backdrop" data-toggle="sidebar"></div>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
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
                <!-- Content -->
                <main class="flex-grow-1 p-3 p-md-4">
                    <!-- Blank Page Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Blank Page</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Example Card</h5>
                            </div>
                            <div class="card-body">
                                <p>This is a Blank Page with breadcrumb and card layout.</p>
                                <p>You can use this as a starting point for building new pages in your application.</p>

                                <div class="d-flex justify-content-between mt-3">
                                    <a href="#!" class="btn btn-outline-secondary">
                                        <i class="ri-arrow-left-fill"></i> Back
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line"></i> Submit
                                    </button>
                                </div>
                                </div>
                        </div>
                    </section>
                </main>
                <footer class="footer py-3 px-3 px-md-4 border-top mt-auto">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
                        <div class="text-secondary small">
                            <span>&copy; <script>document.write(new Date().getFullYear())</script></span>
                            <span class="fw-semibold">Laravel Admin</span>.
                            <span>All rights reserved.</span>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-decoration-none small">Privacy Policy</a>
                            <a href="#" class="text-decoration-none small">Terms of Service</a>
                            <a href="#" class="text-decoration-none small">Support</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- jQuery (required for DataTables) -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
        <!-- Toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            /**
             * Simple client-side page switching
             */
            (function () {
                /**
                 * Sidebar toggle
                 */
                const sidebarToggles = document.querySelectorAll('[data-toggle="sidebar"]');
                const body = document.body;

                sidebarToggles.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        body.classList.toggle("sidebar-collapsed");
                    });
                });

                /**
                 * Hamburger icon swap: fold → fold-2 when sidebar collapses
                 */
                const hamburgerIcon = document.querySelector('.top-navbar button[data-toggle="sidebar"] i');

                const updateHamburgerIcon = () => {
                    const collapsed = document.body.classList.contains('sidebar-collapsed');
                    hamburgerIcon.classList.toggle('ri-menu-fold-line', !collapsed);
                    hamburgerIcon.classList.toggle('ri-menu-fold-2-line', collapsed);
                };

                // Update on every toggle click
                document.querySelectorAll('[data-toggle="sidebar"]').forEach(btn => {
                    btn.addEventListener('click', () => {
                        setTimeout(updateHamburgerIcon, 50);
                    });
                });

                // Initial state on page load
                updateHamburgerIcon();

                /**
                 * Theme handling
                 */
                const themeButtons = document.querySelectorAll("[data-theme-value]");

                function getStoredTheme() {
                    return localStorage.getItem("preferredTheme");
                }

                function storeTheme(theme) {
                    localStorage.setItem("preferredTheme", theme);
                }

                function systemPrefersDark() {
                    return window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
                }

                function setTheme(theme) {
                    // Resolve final theme used by Bootstrap
                    let resolved = theme;
                    if (theme === "system") {
                        resolved = systemPrefersDark() ? "dark" : "light";
                    }

                    document.documentElement.setAttribute("data-bs-theme", resolved);
                    storeTheme(theme);

                    // Update active state on buttons
                    themeButtons.forEach((btn) => {
                        const value = btn.getAttribute("data-theme-value");
                        btn.classList.toggle("active", value === theme);
                    });
                }

                const storedTheme = getStoredTheme();
                setTheme(storedTheme || "system");

                // React to theme button clicks
                themeButtons.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        const value = btn.getAttribute("data-theme-value");
                        setTheme(value);
                    });
                });

                // React to system preference changes when using "system"
                if (window.matchMedia) {
                    window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", () => {
                        if (getStoredTheme() === "system") {
                            setTheme("system");
                        }
                    });
                }

                /**
                 * Arrow toggle for collapsible sidebar menus
                 */
                document.querySelectorAll(".bs-dropdown-toggle").forEach((toggle) => {
                    const arrow = toggle.querySelector(".toggle-arrow");
                    const target = document.querySelector(toggle.dataset.bsTarget);

                    if (!target) return;

                    target.addEventListener("show.bs.collapse", () => {
                        arrow.classList.remove("ri-arrow-right-s-line");
                        arrow.classList.add("ri-arrow-down-s-line");
                    });

                    target.addEventListener("hide.bs.collapse", () => {
                        arrow.classList.remove("ri-arrow-down-s-line");
                        arrow.classList.add("ri-arrow-right-s-line");
                    });
                });

                /**
                 * Initialize Chart.js demo charts
                 */
                const activityCtx = document.getElementById("recentActivityChart");
                if (activityCtx && window.Chart) {
                    new Chart(activityCtx, {
                        type: "bar",
                        data: {
                            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                            datasets: [
                                {
                                    label: "Events",
                                    data: [12, 19, 7, 15, 9, 14, 10],
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },
                            },
                            plugins: {
                                legend: {
                                    display: false,
                                },
                            },
                        },
                    });
                }

                const performanceCtx = document.getElementById("performanceMetricsChart");
                if (performanceCtx && window.Chart) {
                    new Chart(performanceCtx, {
                        type: "pie",
                        data: {
                            labels: ["Completed", "In Progress", "Pending"],
                            datasets: [
                                {
                                    data: [55, 30, 15],
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    position: "bottom",
                                },
                            },
                        },
                    });
                }

                const engagementCtx = document.getElementById("userEngagementChart");
                if (engagementCtx && window.Chart) {
                    new Chart(engagementCtx, {
                        type: "line",
                        data: {
                            labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
                            datasets: [
                                {
                                    label: "Active Users",
                                    data: [40, 55, 48, 65],
                                    tension: 0.4,
                                    fill: false,
                                    borderColor: '#36a2eb',
                                    backgroundColor: '#36a2eb',
                                },
                                {
                                    label: "New Signups",
                                    data: [20, 25, 30, 35],
                                    tension: 0.4,
                                    fill: false,
                                    borderColor: '#4bc0c0',
                                    backgroundColor: '#4bc0c0',
                                },
                                {
                                    label: "Inactive Users",
                                    data: [10, 15, 12, 8],
                                    tension: 0.4,
                                    fill: false,
                                    borderColor: '#ff6384',
                                    backgroundColor: '#ff6384',
                                }
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top',
                                },
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },
                            },
                        },
                    });
                }

                /**
                 * Initialize DataTable for Recent Users
                 */
                if (window.jQuery && $("#recentUsersTable").length) {
                    $("#recentUsersTable").DataTable({
                        pageLength: 5,
                        lengthChange: false,
                        ordering: true,
                        searching: true,
                        info: false,
                    });
                }

                /**
                 * Toastr sample notification
                 */
                if (window.toastr) {
                    toastr.options = {
                        positionClass: "toast-bottom-right",
                        timeOut: 3000,
                    };
                    toastr.success("You are logged in.", "Welcome back");
                }

                /**
                 * SweetAlert2 logout confirmation
                 */
                const logoutLinks = document.querySelectorAll(".js-logout");
                logoutLinks.forEach((link) => {
                    link.addEventListener("click", function (e) {
                        e.preventDefault();
                        if (!window.Swal) return;
                        // Show a confirmation modal
                        Swal.fire({
                            title: "Ready to log out?",
                            text: "You can always log back in to continue where you left off.",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No',
                            reverseButtons: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Redirect to the sign-out link
                                window.location.href = 'https://example.com/?logout=true';
                            }
                        });
                    });
                });
            })();
        </script>
    </body>
</html>
