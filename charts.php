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
            <?php include_once 'includes/_sidebar.php'; ?>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
                <?php include_once 'includes/_top_navbar.php'; ?>
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
