<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8" />
        <title>Forms - Bootstrap 5 Admin Starter</title>
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/css/tempus-dominus.min.css" crossorigin="anonymous"/>
        <!-- Select2 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- jQuery UI CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.css">
        <!-- Tabulator CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabulator/6.3.1/css/tabulator.min.css" />
        <!-- Grid.js -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gridjs/dist/theme/mermaid.min.css">
        <!-- Tempus Dominus CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.10.4/dist/css/tempus-dominus.min.css">
        <!--Summernote css-->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.1/dist/summernote-lite.min.css" rel="stylesheet">
        <!-- Site CSS -->
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
                overflow-y: auto;
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

            /* ************ Form elements ************ */
            .form-label {
                font-weight: 500;
                margin-bottom: 0.5rem;
                color: var(--bs-body-color);
            }

            .form-control,
            .form-select {
                border: 1px solid var(--bs-border-color);
                border-radius: 0.375rem;
                padding: 0.5rem 0.75rem;
                font-size: 0.875rem;
                background-color: var(--bs-body-bg);
                color: var(--bs-body-color);
            }

            .form-control:focus,
            .form-select:focus {
                border-color: var(--bs-primary);
                box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.1);
            }

            .form-control::placeholder {
                color: var(--bs-secondary-color);
                opacity: 0.7;
            }

            /* ************ Form validation states ************ */
            .form-control.is-valid {
                border-color: var(--bs-success);
            }

            .form-control.is-invalid {
                border-color: var(--bs-danger);
            }

            .invalid-feedback {
                font-size: 0.8rem;
                color: var(--bs-danger);
                margin-top: 0.25rem;
            }

            /* ************ Checkboxes and radios ************ */
            .form-check-input {
                border: 1px solid var(--bs-border-color);
                background-color: var(--bs-body-bg);
            }

            .form-check-input:checked {
                background-color: var(--bs-primary);
                border-color: var(--bs-primary);
            }

            .form-check-input:focus {
                border-color: var(--bs-primary);
                box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.1);
            }

            .form-check-label {
                font-size: 0.875rem;
                color: var(--bs-body-color);
            }

            /* ************ Form groups and layouts ************ */
            .form-group {
                margin-bottom: 1rem;
            }

            .form-row {
                display: flex;
                flex-wrap: wrap;
                margin-right: -0.5rem;
                margin-left: -0.5rem;
            }

            .form-row > .form-group {
                padding-right: 0.5rem;
                padding-left: 0.5rem;
                flex: 1 0 0%;
            }

            /* ************ Required field indicator ************ */
            .required::after {
                content: "*";
                color: var(--bs-danger);
                margin-left: 0.25rem;
            }

            /* ************ Form help text ************ */
            .form-text {
                font-size: 0.8rem;
                color: var(--bs-secondary-color);
                margin-top: 0.25rem;
            }

            /* ************ Disabled form elements ************ */
            .form-control:disabled,
            .form-select:disabled {
                background-color: var(--bs-secondary-bg);
                opacity: 0.6;
                cursor: not-allowed;
            }

            /* ************ Readonly form elements ************ */
            .form-control[readonly] {
                background-color: var(--bs-secondary-bg);
            }

            /* ************ File input ************ */
            .form-control[type="file"] {
                padding: 0.375rem 0.75rem;
            }

            /* ************ Form actions ************ */
            .form-actions {
                padding: 1rem 0;
                border-top: 1px solid var(--bs-border-color);
                margin-top: 1.5rem;
                display: flex;
                gap: 0.5rem;
            }

            /* ************ Compact form variant ************ */
            .form-compact .form-group {
                margin-bottom: 0.75rem;
            }

            .form-compact .form-label {
                font-size: 0.8rem;
                margin-bottom: 0.25rem;
            }

            .form-compact .form-control,
            .form-compact .form-select {
                padding: 0.375rem 0.5rem;
                font-size: 0.8rem;
            }

            /* ************ Form Switch Styles ************ */
            .form-switch .form-check-input {
                width: 3em;
                height: 1.5em;
                margin-right: 0.5rem;
            }

            /* ************ Select2 Customization ************ */
            .select2-container--default .select2-selection--multiple {
                border: 1px solid var(--bs-border-color);
                border-radius: 0.375rem;
                background-color: var(--bs-body-bg);
                color: var(--bs-body-color);
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice {
                background-color: var(--bs-primary-bg-subtle);
                border: 1px solid var(--bs-primary-border-subtle);
                color: var(--bs-primary);
            }

            /* ************ Responsive form adjustments ************ */
            @media (max-width: 767.98px) {
                .form-row > .form-group {
                    flex: 0 0 100%;
                    margin-bottom: 0.75rem;
                }
                
                .form-actions {
                    flex-direction: column;
                }
                
                .form-actions .btn {
                    width: 100%;
                }
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
                <div class="sidebar-body">
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Menu</div>
                        <nav class="nav flex-column mb-2">
                            <a href="index.php" class="nav-link">
                                <i class="ri-home-2-line"></i>
                                <span class="sidebar-text">Dashboard</span>
                            </a>
                            <a href="profile.php" class="nav-link">
                                <i class="ri-user-3-line"></i>
                                <span class="sidebar-text">Profile</span>
                            </a>
                            <a href="forms.php" class="nav-link active">
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
                                aria-label="Toggle sidebar"
                                data-toggle="sidebar"
                            >
                                <i class="ri-menu-fold-line"></i>
                            </button>
                            <span class="navbar-brand-text d-none d-md-inline-block">Forms</span>
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
                    <!-- Forms Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forms</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Forms</h4>
                            <p class="text-secondary mb-0">Advanced Inputs</p>
                        </div>
                        
                        <!-- Sample Form Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Sample Form</h5>
                            </div>
                            <div class="card-body">
                                <form id="sampleForm">
                                    <div class="row">
                                        <!-- Input Field -->
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Full Name <span class="required"></span></label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                                        </div>
                                        
                                        <!-- Email Address -->
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address <span class="required"></span></label>
                                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- Select Option -->
                                        <div class="col-md-4 mb-3">
                                            <label for="department" class="form-label">Department</label>
                                            <select class="form-select" id="department">
                                                <option selected disabled>Select a department</option>
                                                <option value="hr">Human Resources</option>
                                                <option value="it">Information Technology</option>
                                                <option value="finance">Finance</option>
                                                <option value="marketing">Marketing</option>
                                                <option value="sales">Sales</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Date Input -->
                                        <div class="col-md-4 mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                        
                                        <!-- Input Group -->
                                        <div class="col-md-4 mb-3">
                                            <label for="website" class="form-label">Website</label>
                                            <div class="input-group">
                                                <span class="input-group-text">https://</span>
                                                <input type="text" class="form-control" id="website" placeholder="example.com">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Multi Select (Select2) -->
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Skills</label>
                                        <select class="form-select" id="skills" multiple="multiple">
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                            <option value="javascript">JavaScript</option>
                                            <option value="php">PHP</option>
                                            <option value="python">Python</option>
                                            <option value="laravel">Laravel</option>
                                            <option value="react">React</option>
                                            <option value="vue">Vue.js</option>
                                        </select>
                                        <div class="form-text">Select multiple skills that apply to you.</div>
                                    </div>
                                    
                                    <!-- Textarea -->
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" rows="3" placeholder="Tell us about yourself"></textarea>
                                    </div>
                                    
                                    <!-- File Input -->
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Profile Picture</label>
                                        <input class="form-control" type="file" id="avatar">
                                        <div class="form-text">Accepted formats: JPG, PNG, GIF. Max size: 2MB.</div>
                                    </div>
                                    
                                    <!-- Checkboxes -->
                                    <div class="mb-3">
                                        <label class="form-label">Interests</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest1">
                                            <label class="form-check-label" for="interest1">
                                                Technology
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest2">
                                            <label class="form-check-label" for="interest2">
                                                Sports
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest3">
                                            <label class="form-check-label" for="interest3">
                                                Music
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest4">
                                            <label class="form-check-label" for="interest4">
                                                Travel
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- Radios -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Experience Level</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience1" checked>
                                                <label class="form-check-label" for="experience1">
                                                    Beginner
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience2">
                                                <label class="form-check-label" for="experience2">
                                                    Intermediate
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience3">
                                                <label class="form-check-label" for="experience3">
                                                    Advanced
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <!-- Switches -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Preferences</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="notifications" checked>
                                                <label class="form-check-label" for="notifications">Email Notifications</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="newsletter">
                                                <label class="form-check-label" for="newsletter">Newsletter</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="publicProfile">
                                                <label class="form-check-label" for="publicProfile">Public Profile</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Range Slider with numbers -->
                                    <div class="mb-4">
                                        <label for="satisfaction" class="form-label">Satisfaction Level: <span id="rangeValue">5</span></label>
                                        <input type="range" class="form-range" id="satisfaction" min="1" max="10" value="5">
                                        <div class="d-flex justify-content-between small text-secondary">
                                            <span>1 (Poor)</span>
                                            <span>10 (Excellent)</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Form Actions -->
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-save-line"></i> Save Changes
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary">
                                            <i class="ri-refresh-line"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Additional Form Examples Card -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Additional Form Examples</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-3">Validation States</h6>
                                        
                                        <!-- Valid Input -->
                                        <div class="mb-3">
                                            <label for="validInput" class="form-label">Valid Input</label>
                                            <input type="text" class="form-control is-valid" id="validInput" value="Correct value">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                        <!-- Invalid Input -->
                                        <div class="mb-3">
                                            <label for="invalidInput" class="form-label">Invalid Input</label>
                                            <input type="text" class="form-control is-invalid" id="invalidInput" value="Wrong value">
                                            <div class="invalid-feedback">
                                                Please provide a valid value.
                                            </div>
                                        </div>
                                        
                                        <!-- Disabled Input -->
                                        <div class="mb-3">
                                            <label for="disabledInput" class="form-label">Disabled Input</label>
                                            <input type="text" class="form-control" id="disabledInput" value="Disabled field" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <h6 class="mb-3">Input Sizes</h6>
                                        
                                        <!-- Small Input -->
                                        <div class="mb-3">
                                            <label for="smallInput" class="form-label">Small Input</label>
                                            <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small input">
                                        </div>
                                        
                                        <!-- Default Input -->
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Default Input</label>
                                            <input type="text" class="form-control" id="defaultInput" placeholder="Default input">
                                        </div>
                                        
                                        <!-- Large Input -->
                                        <div class="mb-3">
                                            <label for="largeInput" class="form-label">Large Input</label>
                                            <input type="text" class="form-control form-control-lg" id="largeInput" placeholder="Large input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <?php include_once 'includes/_footer.php'; ?>
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
        <script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.9.4/dist/js/tempus-dominus.min.js" crossorigin="anonymous"></script>
        <!-- Select2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <!-- jQuery-Validation -->
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
        <!-- clipboard.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
        <!-- jQuery UI CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
        <!-- Tabulator JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tabulator/6.3.1/js/tabulator.min.js"></script>
        <!-- Grid.js -->
        <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
        <!-- Tempus Dominus JS -->
        <script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.10.4/dist/js/tempus-dominus.min.js"></script>
        <!-- Moment.js (required for Tempus Dominus) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
        <!-- Summernote JS -->
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <!-- Tippy JS -->
        <script src="https://unpkg.com/tippy.js@6"></script>
        <!--Site JS-->    
        <script>
            (function () {
                /**
                 * Sidebar toggle with persistence
                 */
                const sidebarToggles = document.querySelectorAll('[data-toggle="sidebar"]');
                const body = document.body;

                // Restore sidebar state on page load
                const sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
                if (sidebarCollapsed) {
                    body.classList.add('sidebar-collapsed');
                }

                sidebarToggles.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        body.classList.toggle("sidebar-collapsed");
                        localStorage.setItem("sidebarCollapsed", body.classList.contains("sidebar-collapsed"));
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
                 * Initialize Select2 for multi-select
                 */
                if (window.jQuery && $('#skills').length) {
                    $('#skills').select2({
                        placeholder: "Select your skills",
                        allowClear: true,
                        width: '100%'
                    });
                }

                /**
                 * Form validation and submission
                 */
                if (window.jQuery && $('#sampleForm').length) {
                    $('#sampleForm').validate({
                        rules: {
                            name: {
                                required: true,
                                minlength: 2
                            },
                            email: {
                                required: true,
                                email: true
                            }
                        },
                        messages: {
                            name: {
                                required: "Please enter your name",
                                minlength: "Your name must be at least 2 characters long"
                            },
                            email: {
                                required: "Please enter your email address",
                                email: "Please enter a valid email address"
                            }
                        },
                        submitHandler: function(form) {
                            // Show success message
                            toastr.success('Form submitted successfully!', 'Success');
                            // In a real application, you would submit the form here
                            return false; // Prevent actual form submission for this demo
                        }
                    });
                }

                /**
                 * Initialize DataTable
                 */
                if (window.jQuery && $(".datatable").length) {
                    $(".datatable").DataTable({
                        pageLength: 5,
                        lengthChange: false,
                        ordering: true,
                        searching: true,
                        info: false,
                    });
                }
            })();
        </script>
    </body>
</html>