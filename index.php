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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" />
        <!-- Toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <!-- Tempus Dominus Datepicker Styles -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/css/tempus-dominus.min.css"
            crossorigin="anonymous"
        />
        <!-- Select2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Site CSS -->
        <link rel="stylesheet" href="assets/css/site.css" />
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
                <div class="sidebar-body">
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Menu</div>
                        <nav class="nav flex-column mb-2">
                            <a href="index.php" class="nav-link active">
                                <i class="ri-home-2-line"></i>
                                <span class="sidebar-text">Dashboard</span>
                            </a>
                            <a href="profile.php" class="nav-link">
                                <i class="ri-user-3-line"></i>
                                <span class="sidebar-text">Profile</span>
                            </a>
                            <a href="forms.php" class="nav-link">
                                <i class="ri-news-line"></i>
                                <span class="sidebar-text">Forms</span>
                            </a>
                            <a href="tables.php" class="nav-link">
                                <i class="ri-table-view"></i>
                                <span class="sidebar-text">Tables</span>
                            </a>
                            <a href="editors.php" class="nav-link">
                                <i class="ri-code-block"></i>
                                <span class="sidebar-text">Editors</span>
                            </a>
                            <a href="cards.php" class="nav-link">
                                <i class="ri-id-card-line"></i>
                                <span class="sidebar-text">Cards</span>
                            </a>
                            <a href="charts.php" class="nav-link">
                                <i class="ri-pie-chart-fill"></i>
                                <span class="sidebar-text">Charts</span>
                            </a>
                            <a href="layout.php" class="nav-link">
                                <i class="ri-file-text-line"></i>
                                <span class="sidebar-text">Layout</span>
                            </a>
                        </nav>
                    </div>
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Dropdown</div>
                        <nav class="nav flex-column mb-2">
                            <!-- Dropdown (Expandable) -->
                            <a
                                href="#"
                                class="nav-link d-flex justify-content-between align-items-center bs-dropdown-toggle"
                                data-bs-toggle="collapse"
                                data-bs-target="#pageExamplesMenu"
                            >
                                <span>
                                    <i class="ri-git-branch-line me-2"></i>
                                    Page Examples
                                </span>
                                <i class="ri-arrow-right-s-line toggle-arrow"></i>
                            </a>
                            <div class="collapse ps-4" id="pageExamplesMenu">
                                <a href="sign-in.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> Sign In
                                </a>
                                <a href="sign-up.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> Sign Up
                                </a>
                                <a href="forgot-password.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> Forgot Password
                                </a>
                                <a href="reset-password.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> Reset Password
                                </a>
                                <a href="404.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> 404 Not Found
                                </a>
                                <a href="500.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> 500 Error
                                </a>
                                <a href="lock.php" class="nav-link">
                                    <i class="ri-checkbox-blank-circle-line"></i> Lock
                                </a>
                            </div>
                        </nav>
                    </div>
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
                                            <table
                                                class="table table-hover align-middle datatable"
                                                id="recentUsersTable"
                                                style="width: 100%"
                                            >
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
                </main>
                <footer class="footer py-3 px-3 px-md-4 border-top mt-auto">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
                        <div class="text-secondary small">
                            <span
                                >&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script></span
                            >
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

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- Charts -->
        <script src="assets/js/charts.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
        <!-- Toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Tempus Dominus Datepicker JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/js/tempus-dominus.min.js"
            crossorigin="anonymous"
        ></script>
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- jQuery-Validation -->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
        <!-- Site JS -->
        <script src="assets/js/site.js"></script>

        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
