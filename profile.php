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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css"/>

        <!-- Toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>

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
                    <!-- Profile Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
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
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="ri-save-line"></i> Save
                                                    </button>
                                                </form>
                                                <hr />
                                                <div>
                                                    <h6 class="mb-2 text-danger">Delete account</h6>
                                                    <p class="text-secondary small mb-3">
                                                        Delete your account and all of its resources.
                                                    </p>
                                                    <button type="button" class="btn btn-outline-danger btn-sm">
                                                        <i class="ri-error-warning-line"></i> Delete account
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
                                                        <i class="ri-edit-2-line"></i> Update password
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
