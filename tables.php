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
                    <!-- DataTables Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">DataTables</h4>
                            <p class="text-secondary mb-0">Responsive DataTables. Highly flexible tool that many advanced features to any HTML table</p>
                        </div>

                        <!-- Users Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Users</h5>
                            </div>
                            <div class="card-body">
                                <!-- Bulk Actions Toolbar -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <i class="ri-refresh-line"></i> Refresh
                                        </button>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <select class="form-select form-select-sm" style="width: auto;">
                                            <option>Bulk Actions</option>
                                            <option>Mark as Read</option>
                                            <option>Mark as Unread</option>
                                            <option>Delete</option>
                                        </select>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Apply</button>
                                    </div>
                                </div>
                                <!-- DataTable -->
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

                        <!-- Contact Messages Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Contact Messages</h5>
                            </div>
                            <div class="card-body">
                                <!-- Bulk Actions Toolbar -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <i class="ri-refresh-line"></i> Refresh
                                        </button>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <select class="form-select form-select-sm" style="width: auto;">
                                            <option>Bulk Actions</option>
                                            <option>Mark as Read</option>
                                            <option>Mark as Unread</option>
                                            <option>Delete</option>
                                        </select>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Apply</button>
                                    </div>
                                </div>
                                <!-- DataTable -->
                                <div class="table-responsive">
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" id="selectAllMessages">
                                                        <label class="form-check-label" for="selectAllMessages"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg1">
                                                        <label class="form-check-label" for="msg1"></label>
                                                    </div>
                                                </td>
                                                <td>John Doe</td>
                                                <td class="text-truncate" style="max-width: 300px;">Hello, I have a question about...</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg2">
                                                        <label class="form-check-label" for="msg2"></label>
                                                    </div>
                                                </td>
                                                <td>Jane Smith</td>
                                                <td class="text-truncate" style="max-width: 300px;">Thanks for your help with the previous issue...</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg3">
                                                        <label class="form-check-label" for="msg3"></label>
                                                    </div>
                                                </td>
                                                <td>Bob Johnson</td>
                                                <td class="text-truncate" style="max-width: 300px;">Is there an update on the project timeline?</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Site Traffic Table (Bootstrap Only) -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Site Traffic</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Traffic Source</th>
                                                <th scope="col">Source Type</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Global Rank</th>
                                                <th scope="col">Traffic Share</th>
                                                <th scope="col">Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Google</td>
                                                <td>Organic Search</td>
                                                <td>Search Engines</td>
                                                <td>1</td>
                                                <td>45.2%</td>
                                                <td><span class="text-success">+2.1%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Direct</td>
                                                <td>Direct</td>
                                                <td>Direct</td>
                                                <td>-</td>
                                                <td>23.5%</td>
                                                <td><span class="text-danger">-1.3%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Facebook</td>
                                                <td>Social Media</td>
                                                <td>Social Networks</td>
                                                <td>4</td>
                                                <td>12.8%</td>
                                                <td><span class="text-success">+0.8%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>YouTube</td>
                                                <td>Video</td>
                                                <td>Video Platforms</td>
                                                <td>2</td>
                                                <td>8.9%</td>
                                                <td><span class="text-muted">0.0%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
