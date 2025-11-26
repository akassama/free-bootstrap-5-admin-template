<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8" />
        <title>Bootstrap 5 Admin Starter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include_once 'includes/_header_assets.php'; ?>
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
                    <!-- ChartsPage -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ChartsPage</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">ChartsPage</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        
                        <!-- First Row: 2 Cards -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Recent Activity</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="recentActivityChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Performance Metrics</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="performanceMetricsChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- Second Row: Full Width Chart -->
                        <div class="row g-4 mb-4">
                            <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <h5 class="card-title mb-0">User Engagement (Line)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="userEngagementChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- New Row: Revenue + Sales by Category -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Revenue Overview (Area)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="revenueChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Sales by Category (Doughnut)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="salesCategoryChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- New Row: Monthly Users + Browser Stats -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Monthly Users (Stacked Area)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="monthlyUsersChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Browser Stats (Polar Area)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="browserStatsChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                        </div>

                        <!-- New Row: Interactive Bar + Force-Directed Graph Alternative -->
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Interactive Bar Chart (Hover Tooltips)</h5>
                                </div>
                                <div class="card-body">
                                <canvas id="interactiveBarChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="card h-100">
                                <div class="card-header">
                                <h5 class="card-title mb-0">Top Referrers (Radar Chart)</h5>
                                <small class="opacity-75">Alternative to Force-Directed Graph (pure Chart.js)</small>
                                </div>
                                <div class="card-body">
                                <canvas id="radarChart" class="chart-canvas"></canvas>
                                </div>
                            </div>
                            </div>
                        </div>

                    </section>
                </main>
                <?php include_once 'includes/_footer.php'; ?>
            </div>
        </div>

        <?php include_once 'includes/_footer_assets.php'; ?>
        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
