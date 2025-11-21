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
                overflow-x: hidden;
            }
            .layout {
                display: flex;
                min-height: 100vh;
                background-color: var(--bs-body-bg);
            }
            /* Sidebar */
            .sidebar {
                width: var(--sidebar-width);
                border-right: 1px solid var(--bs-border-color);
                background-color: var(--bs-body-bg);
                padding-top: 0.75rem;
                position: sticky;
                top: 0;
                align-self: flex-start;
                height: 100vh;
                transition:
                    transform var(--transition-speed) ease-in-out,
                    margin-left var(--transition-speed) ease-in-out;
                z-index: 1040;
            }
            .sidebar-header {
                padding: 0.5rem 1rem 1rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 0.25rem;
            }
            .sidebar-brand {
                font-weight: 600;
                font-size: 1.1rem;
                display: flex;
                align-items: center;
                gap: 0.4rem;
                white-space: nowrap;
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
                white-space: nowrap;
                transition: all var(--transition-speed) ease;
            }
            .sidebar .nav-link i {
                font-size: 1.1rem;
                width: 24px;
                text-align: center;
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
            /* Simple Bootstrap-style Dropdown */
            .sidebar-dropdown {
                position: relative;
            }
            .sidebar-dropdown-toggle {
                cursor: pointer;
                transition: all var(--transition-speed) ease;
            }
            .sidebar-dropdown-toggle .dropdown-arrow {
                /* Default state: arrow pointing right */
                transition: transform var(--transition-speed) ease;
                margin-left: auto;
                transform: rotate(0deg); /* Explicitly define the default rotation */
            }
            /* Rotated state when dropdown is open: arrow pointing down (visually 90 degrees from right) */
            .sidebar-dropdown-toggle[aria-expanded="true"] .dropdown-arrow {
                transform: rotate(90deg); /* Rotate 90 degrees clockwise */
            }
            .sidebar-dropdown-menu {
                padding-left: 0.5rem;
                margin: 0;
                list-style: none;
            }
            .sidebar-dropdown-menu .nav-link {
                padding-left: 2.5rem;
                margin: 0.1rem 0.75rem;
                font-size: 0.9rem;
                border-radius: 0.375rem;
            }
            .sidebar-dropdown-menu .nav-link:hover {
                background-color: var(--bs-primary-bg-subtle);
                color: var(--bs-primary);
            }
            /* Top navbar */
            .top-navbar {
                border-bottom: 1px solid var(--bs-border-color);
                height: var(--top-navbar-height);
            }
            .navbar-brand-text {
                font-weight: 600;
            }
            /* Search bar */
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
            /* Main content */
            .content-wrapper {
                flex: 1 1 auto;
                min-width: 0;
                transition: margin-left var(--transition-speed) ease-in-out;
            }
            .page {
                max-width: 1200px;
                margin: 0 auto;
            }
            /* Dashboard cards */
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
            /* Responsive cards */
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
            /* Chart canvas */
            .chart-canvas {
                width: 100% !important;
                height: 260px !important;
            }
            /* Table styles */
            .table-card .table {
                margin-bottom: 0;
            }
            .table-card .table th {
                border-top: none;
                font-weight: 600;
                font-size: 0.875rem;
                color: var(--bs-secondary-color);
            }
            /* User avatars */
            .user-avatar {
                width: 32px;
                height: 32px;
                border-radius: 50%;
                object-fit: cover;
            }
            /* Profile layout */
            .profile-sidebar {
                border-right: 1px solid var(--bs-border-color);
            }
            /* Breadcrumb */
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
            /* Placeholder content */
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
            /* Mobile sidebar styles */
            @media (max-width: 767.98px) {
                .sidebar {
                    position: fixed;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    transform: translateX(-100%);
                }
                .sidebar.show {
                    transform: translateX(0);
                }
                .sidebar-backdrop {
                    position: fixed;
                    inset: 0;
                    background-color: rgba(0, 0, 0, 0.25);
                    z-index: 1035;
                    display: none;
                }
                .sidebar-backdrop.show {
                    display: block;
                }
                .search-form {
                    max-width: 200px;
                }
            }
            
            /* Footer */
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
            
            /* Theme buttons */
            .btn-theme {
                min-width: 90px;
            }
            .btn-theme.active {
                background-color: var(--bs-primary);
                border-color: var(--bs-primary);
                color: #fff;
            }

            /* Desktop sidebar collapse */
            @media (min-width: 768px) {
                .sidebar-collapsed .sidebar {
                    width: 60px;
                }
                .sidebar-collapsed .sidebar-brand span,
                .sidebar-collapsed .sidebar-text,
                .sidebar-collapsed .sidebar-section-title {
                    display: none;
                }
                .sidebar-collapsed .sidebar .nav-link {
                    justify-content: center;
                    padding: 0.6rem;
                }
                .sidebar-collapsed .sidebar-dropdown-toggle .dropdown-arrow {
                    display: none;
                }
                .sidebar-collapsed .content-wrapper {
                    margin-left: 0;
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
                    <button class="btn btn-sm btn-outline-secondary d-md-none" type="button" id="closeSidebar">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="sidebar-body">
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Menu</div>
                        <nav class="nav flex-column mb-2">
                            <a href="#" class="nav-link active" data-page-target="dashboard">
                                <i class="ri-home-2-line"></i>
                                <span class="sidebar-text">Dashboard</span>
                            </a>
                            <a href="#" class="nav-link" data-page-target="profile">
                                <i class="ri-user-3-line"></i>
                                <span class="sidebar-text">Profile</span>
                            </a>
                            <a href="#" class="nav-link" data-page-target="starter">
                                <i class="ri-file-text-line"></i>
                                <span class="sidebar-text">Starter Template</span>
                            </a>
                        </nav>
                    </div>
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Dropdown</div>
                        <nav class="nav flex-column mb-2">
                            <!-- Simple Bootstrap-style Dropdown -->
                            <div class="sidebar-dropdown">
                                <a
                                    href="#"
                                    class="nav-link sidebar-dropdown-toggle d-flex align-items-center"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#dropdownMenu"
                                    aria-expanded="false"
                                    aria-controls="dropdownMenu"
                                >
                                    <i class="ri-git-branch-line"></i>
                                    <span class="sidebar-text ms-2">Dropdown level</span>
                                    <i class="ri-arrow-right-s-line dropdown-arrow ms-auto"></i>
                                </a>
                                <div class="collapse sidebar-dropdown-menu" id="dropdownMenu">
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="dropdown-level1">
                                        <i class="ri-checkbox-blank-circle-line"></i> Level One
                                    </a>
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="dropdown-level2">
                                        <i class="ri-checkbox-blank-circle-line"></i> Level Two
                                    </a>
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="dropdown-level3">
                                        <i class="ri-checkbox-blank-circle-line"></i> Level Three
                                    </a>
                                </div>
                            </div>
                            <!-- Second Dropdown Example -->
                            <div class="sidebar-dropdown">
                                <a href="#" class="nav-link sidebar-dropdown-toggle d-flex align-items-center"
                                data-bs-toggle="collapse"
                                data-bs-target="#dropdownMenuTwo"
                                aria-expanded="false"
                                aria-controls="dropdownMenuTwo">
                                    <i class="ri-settings-3-line"></i>
                                    <span class="sidebar-text ms-2">Settings</span>
                                    <i class="ri-arrow-right-s-line dropdown-arrow ms-auto"></i>
                                </a>

                                <div class="collapse sidebar-dropdown-menu" id="dropdownMenuTwo">
                                    
                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="settings-general">
                                        <i class="ri-checkbox-blank-circle-line me-2"></i> 
                                        General Settings
                                    </a>

                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="settings-security">
                                        <i class="ri-checkbox-blank-circle-line me-2"></i> 
                                        Security
                                    </a>

                                    <a href="#" class="nav-link d-flex align-items-center justify-content-start" data-page-target="settings-privacy">
                                        <i class="ri-checkbox-blank-circle-line me-2"></i> 
                                        Privacy
                                    </a>
                                    
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </aside>
            <div class="sidebar-backdrop" id="sidebarBackdrop"></div>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand top-navbar bg-body sticky-top px-3 px-md-4">
                    <div class="container-fluid px-0">
                        <div class="d-flex align-items-center gap-2">
                            <button
                                class="btn btn-sm btn-outline-secondary"
                                type="button"
                                aria-label="Toggle sidebar"
                                id="toggleSidebar"
                            >
                                <i class="ri-menu-line"></i>
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
                                        <a class="dropdown-item" href="#" data-page-target="profile"
                                            ><i class="ri-settings-3-line me-2"></i>Settings</a
                                        >
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item js-logout" href="#"
                                            ><i class="ri-logout-box-r-line me-2"></i>Logout</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Content -->
                <main class="flex-grow-1 p-3 p-md-4">
                    <!-- Dashboard Page -->
                    <section class="page" data-page="dashboard">
                        <div class="mb-3">
                            <h4 class="mb-1">Dashboard</h4>
                            <p class="text-secondary mb-0">Welcome to the dashboard</p>
                        </div>
                        <div class="row g-3 mb-4">
                            <div class="col-md-3 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label mb-1">Total Users</div>
                                                <div class="stat-card-value">1,248</div>
                                                <div class="text-secondary small">↑ 12% this month</div>
                                            </div>
                                            <div class="stat-card-icon bg-primary-subtle text-primary">
                                                <i class="ri-user-3-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label mb-1">Total Revenue</div>
                                                <div class="stat-card-value">$32,450</div>
                                                <div class="text-secondary small">↑ 8% this month</div>
                                            </div>
                                            <div class="stat-card-icon bg-success-subtle text-success">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label mb-1">Total Orders</div>
                                                <div class="stat-card-value">872</div>
                                                <div class="text-secondary small">↓ 3% this month</div>
                                            </div>
                                            <div class="stat-card-icon bg-purple-100 text-primary">
                                                <i class="ri-shopping-bag-3-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label mb-1">Total Visitors</div>
                                                <div class="stat-card-value">14,203</div>
                                                <div class="text-secondary small">↑ 5% this month</div>
                                            </div>
                                            <div class="stat-card-icon bg-warning-subtle text-warning">
                                                <i class="ri-eye-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive Cards Section -->
                        <div class="row g-3 mb-4">
                            <!-- 2 cards in one row -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Recent Activity</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="recentActivityChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Performance Metrics</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="performanceMetricsChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 1 card in one row -->
                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">User Engagement</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="userEngagementChart" class="chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Table in card -->
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Recent Users</h5>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="table-responsive">
                                            <table class="table table-hover align-middle" id="recentUsersTable" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Email</th>
                                                        <th>Status</th>
                                                        <th>Joined</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img
                                                                    src="https://ui-avatars.com/api/?name=Jane+Doe&background=0D8ABC&color=fff"
                                                                    alt="Jane Doe"
                                                                    class="user-avatar me-2"
                                                                />
                                                                <div>
                                                                    <div class="fw-semibold">Jane Doe</div>
                                                                    <small class="text-secondary">Administrator</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>jane.doe@example.com</td>
                                                        <td>
                                                            <span class="badge text-bg-success">Active</span>
                                                        </td>
                                                        <td>2024-09-12</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-secondary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img
                                                                    src="https://ui-avatars.com/api/?name=John+Smith&background=FF6B6B&color=fff"
                                                                    alt="John Smith"
                                                                    class="user-avatar me-2"
                                                                />
                                                                <div>
                                                                    <div class="fw-semibold">John Smith</div>
                                                                    <small class="text-secondary">Editor</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>john.smith@example.com</td>
                                                        <td>
                                                            <span class="badge text-bg-warning">Pending</span>
                                                        </td>
                                                        <td>2024-10-03</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-secondary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img
                                                                    src="https://ui-avatars.com/api/?name=Fatou+Kamara&background=34A853&color=fff"
                                                                    alt="Fatou Kamara"
                                                                    class="user-avatar me-2"
                                                                />
                                                                <div>
                                                                    <div class="fw-semibold">Fatou Kamara</div>
                                                                    <small class="text-secondary">Viewer</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>fatou.kamara@example.com</td>
                                                        <td>
                                                            <span class="badge text-bg-secondary">Inactive</span>
                                                        </td>
                                                        <td>2024-08-21</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-secondary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <img
                                                                    src="https://ui-avatars.com/api/?name=Abdoulie+Kassama&background=6366F1&color=fff"
                                                                    alt="Abdoulie Kassama"
                                                                    class="user-avatar me-2"
                                                                />
                                                                <div>
                                                                    <div class="fw-semibold">Abdoulie Kassama</div>
                                                                    <small class="text-secondary">Owner</small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>abdoulie.kassama@example.com</td>
                                                        <td>
                                                            <span class="badge text-bg-success">Active</span>
                                                        </td>
                                                        <td>2024-07-05</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-outline-secondary">
                                                                <i class="ri-eye-line"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Profile Page -->
                    <section class="page d-none" data-page="profile">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="#" data-page-target="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Profile</h4>
                            <p class="text-secondary mb-0">Update your profile settings</p>
                        </div>
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-3 border-end">
                                    <div class="list-group list-group-flush" id="profile-tabs" role="tablist">
                                        <button
                                            class="list-group-item list-group-item-action active"
                                            id="profile-tab"
                                            data-bs-toggle="list"
                                            data-bs-target="#tab-profile"
                                            type="button"
                                            role="tab"
                                            aria-controls="tab-profile"
                                        >
                                            Profile
                                        </button>
                                        <button
                                            class="list-group-item list-group-item-action"
                                            id="password-tab"
                                            data-bs-toggle="list"
                                            data-bs-target="#tab-password"
                                            type="button"
                                            role="tab"
                                            aria-controls="tab-password"
                                        >
                                            Password
                                        </button>
                                        <button
                                            class="list-group-item list-group-item-action"
                                            id="appearance-tab"
                                            data-bs-toggle="list"
                                            data-bs-target="#tab-appearance"
                                            type="button"
                                            role="tab"
                                            aria-controls="tab-appearance"
                                        >
                                            Appearance
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <!-- Profile tab -->
                                            <div
                                                class="tab-pane fade show active"
                                                id="tab-profile"
                                                role="tabpanel"
                                                aria-labelledby="profile-tab"
                                            >
                                                <h6 class="mb-3">Profile details</h6>
                                                <form class="mb-4">
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" value="Abdoulie" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input
                                                            type="email"
                                                            class="form-control"
                                                            value="akassama@yahoo.com"
                                                        />
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                                <hr />
                                                <div>
                                                    <h6 class="mb-2 text-danger">Delete account</h6>
                                                    <p class="text-secondary small mb-3">
                                                        Delete your account and all of its resources.
                                                    </p>
                                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                                        Delete account
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Password tab -->
                                            <div
                                                class="tab-pane fade"
                                                id="tab-password"
                                                role="tabpanel"
                                                aria-labelledby="password-tab"
                                            >
                                                <h6 class="mb-3">Update password</h6>
                                                <form class="mb-2">
                                                    <div class="mb-3">
                                                        <label class="form-label">Current password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">New password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Confirm new password</label>
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">
                                                        Update password
                                                    </button>
                                                </form>
                                            </div>
                                            <!-- Appearance tab -->
                                            <div
                                                class="tab-pane fade"
                                                id="tab-appearance"
                                                role="tabpanel"
                                                aria-labelledby="appearance-tab"
                                            >
                                                <h6 class="mb-3">Appearance</h6>
                                                <p class="text-secondary small mb-3">
                                                    Update the appearance settings for your account.
                                                </p>
                                                <div class="mb-2">Theme</div>
                                                <div class="btn-group mb-3" role="group" aria-label="Theme">
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary btn-theme"
                                                        data-theme-value="light"
                                                    >
                                                        <i class="ri-sun-line me-1"></i> Light
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary btn-theme"
                                                        data-theme-value="dark"
                                                    >
                                                        <i class="ri-moon-line me-1"></i> Dark
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-outline-secondary btn-theme"
                                                        data-theme-value="system"
                                                    >
                                                        <i class="ri-computer-line me-1"></i> System
                                                    </button>
                                                </div>
                                                <p class="text-secondary small mb-0">
                                                    Your selection will be remembered the next time you visit this page.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Starter Template Page -->
                    <section class="page d-none" data-page="starter">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="#" data-page-target="dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Starter Template</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Starter Template</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Example Card</h5>
                            </div>
                            <div class="card-body">
                                <p>This is a starter template with breadcrumb and card layout.</p>
                                <p>You can use this as a starting point for building new pages in your application.</p>
                                <button class="btn btn-primary">Example Action</button>
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
                const pages = document.querySelectorAll("[data-page]");
                const pageLinks = document.querySelectorAll("[data-page-target]");
                function showPage(name) {
                    pages.forEach((page) => {
                        page.classList.toggle("d-none", page.dataset.page !== name);
                    });
                    document.querySelectorAll(".sidebar .nav-link").forEach((link) => {
                        const target = link.getAttribute("data-page-target");
                        link.classList.toggle("active", target === name);
                    });
                }
                pageLinks.forEach((link) => {
                    link.addEventListener("click", function (e) {
                        e.preventDefault();
                        const target = this.getAttribute("data-page-target");
                        if (target) {
                            showPage(target);
                            
                            // Auto-expand sidebar when clicking on navigation items
                            // Check if sidebar is collapsed on desktop
                            if (window.innerWidth >= 768 && body.classList.contains('sidebar-collapsed')) {
                                body.classList.remove('sidebar-collapsed');
                            }
                        }
                    });
                });
                showPage("dashboard");
                /**
                 * Sidebar toggle functionality
                 */
                const sidebar = document.querySelector('.sidebar');
                const sidebarBackdrop = document.getElementById('sidebarBackdrop');
                const toggleSidebarBtn = document.getElementById('toggleSidebar');
                const closeSidebarBtn = document.getElementById('closeSidebar');
                const body = document.body;
                function toggleSidebar() {
                    if (window.innerWidth < 768) {
                        // Mobile behavior
                        sidebar.classList.toggle('show');
                        sidebarBackdrop.classList.toggle('show');
                    } else {
                        // Desktop behavior - toggle collapsed state
                        body.classList.toggle('sidebar-collapsed');
                    }
                }
                function closeSidebar() {
                    if (window.innerWidth < 768) {
                        sidebar.classList.remove('show');
                        sidebarBackdrop.classList.remove('show');
                    }
                }
                // Event listeners
                toggleSidebarBtn.addEventListener('click', toggleSidebar);
                closeSidebarBtn.addEventListener('click', closeSidebar);
                sidebarBackdrop.addEventListener('click', closeSidebar);
                
                // Auto-expand sidebar when clicking on dropdown toggle items
                document.querySelectorAll('.sidebar-dropdown-toggle').forEach(dropdownToggle => {
                    dropdownToggle.addEventListener('click', function(e) {
                        // Auto-expand sidebar when clicking on dropdown toggle items
                        if (window.innerWidth >= 768 && body.classList.contains('sidebar-collapsed')) {
                            body.classList.remove('sidebar-collapsed');
                        }
                    });
                });
                
                // Close sidebar when clicking on a link (mobile only)
                document.querySelectorAll('.sidebar .nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth < 768) {
                            closeSidebar();
                        }
                    });
                });
                // Handle window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 768) {
                        // Reset mobile styles when switching to desktop
                        sidebar.classList.remove('show');
                        sidebarBackdrop.classList.remove('show');
                    }
                });
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
                // Removed the conflicting JavaScript for arrow rotation
                // The arrow rotation is now handled purely by CSS based on the aria-expanded attribute.
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
                                    label: "Engagement",
                                    data: [40, 55, 48, 65],
                                    tension: 0.4,
                                    fill: false,
                                },
                            ],
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false,
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