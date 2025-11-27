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

/* ************ Custom Cards ************ */
.stat-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    border: 1px solid var(--bs-border-color);
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}

.stat-card-icon-lg {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-card-change {
    font-size: 0.8rem;
}

.stat-card-change.positive {
    color: var(--bs-success);
}

.stat-card-change.negative {
    color: var(--bs-danger);
}

/* User cards */
.user-card .user-avatar-lg {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    object-fit: cover;
}

/* Progress cards */
.progress-card .progress {
    height: 6px;
}

/* Icon cards */
.icon-card {
    text-align: center;
    padding: 1.5rem;
    transition: transform 0.2s ease;
}

.icon-card:hover {
    transform: translateY(-2px);
}

.icon-card .card-icon {
    font-size: 2rem;
    margin-bottom: 1rem;
}

/* Activity cards */
.activity-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--bs-border-color);
}

.activity-item:last-child {
    border-bottom: none;
}

.activity-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
}

/* Task cards */
.task-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--bs-border-color);
}

.task-item:last-child {
    border-bottom: none;
}

.task-checkbox:checked + .task-label {
    text-decoration: line-through;
    color: var(--bs-secondary-color);
}

/* Notification cards */
.notification-item {
    padding: 0.75rem 0;
    border-bottom: 1px solid var(--bs-border-color);
}

.notification-item:last-child {
    border-bottom: none;
}

.notification-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    display: inline-block;
}

/* Chart cards */
.chart-card .chart-container {
    height: 200px;
}

/* Product cards */
.product-card .product-image {
    height: 140px;
    object-fit: cover;
    width: 100%;
}

/* Card with actions */
.card-with-actions .card-actions {
    opacity: 0;
    transition: opacity 0.2s ease;
}

.card-with-actions:hover .card-actions {
    opacity: 1;
}

/* Card gradients */
.card-gradient-primary {
    background: linear-gradient(135deg, var(--bs-primary) 0%, #0d6efd 100%);
    color: white;
}

.card-gradient-success {
    background: linear-gradient(135deg, var(--bs-success) 0%, #198754 100%);
    color: white;
}

.card-gradient-warning {
    background: linear-gradient(135deg, var(--bs-warning) 0%, #ffc107 100%);
    color: white;
}

.card-gradient-info {
    background: linear-gradient(135deg, var(--bs-info) 0%, #0dcaf0 100%);
    color: white;
}

/* Card hover effects */
.card-hover-lift {
    transition: all 0.3s ease;
}

.card-hover-lift:hover {
    transform: translateY(-5px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
}

/* Card borders */
.card-border-primary {
    border-left: 4px solid var(--bs-primary);
}

.card-border-success {
    border-left: 4px solid var(--bs-success);
}

.card-border-warning {
    border-left: 4px solid var(--bs-warning);
}

.card-border-danger {
    border-left: 4px solid var(--bs-danger);
}

/* Card status indicators */
.card-status {
    position: absolute;
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
    border-radius: 0 var(--card-border-radius) var(--card-border-radius) 0;
}

.card-status-online {
    background-color: var(--bs-success);
}

.card-status-offline {
    background-color: var(--bs-secondary);
}

.card-status-busy {
    background-color: var(--bs-warning);
}

.card-status-error {
    background-color: var(--bs-danger);
}

/* Card loading state */
.card-loading {
    position: relative;
    overflow: hidden;
}

.card-loading::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    transform: translateX(-100%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    100% {
        transform: translateX(100%);
    }
}

/* Card badges */
.card-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    z-index: 1;
}

/* Responsive card adjustments */
@media (max-width: 767.98px) {
    .stat-card-icon-lg {
        width: 40px;
        height: 40px;
        font-size: 1.25rem;
    }
    
    .user-card .user-avatar-lg {
        width: 48px;
        height: 48px;
    }
    
    .icon-card {
        padding: 1rem;
    }
    
    .icon-card .card-icon {
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
    }
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

/* ************ Fix for Bootstrap focus ring ************ */
.tagify {
    --tags-focus-border-color: #86b7fe;
    --tags-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
}

/* ************ Codemirror settings ************ */
.CodeMirror {
    height: auto;
}

/* ************ Custom Multi-File Drop Zone ************ */
.custom-file-drop {
    background-color: var(--bs-body-bg);
    border: 2px dashed var(--bs-border-color);
    border-radius: var(--card-border-radius);
    padding: 3.5rem 2rem;
    text-align: center;
    position: relative;
    cursor: pointer;
    transition: all var(--transition-speed) ease-in-out;
    user-select: none;
}

.custom-file-drop:hover {
    border-color: var(--bs-primary);
    background-color: var(--bs-primary-bg-subtle);
}

.custom-file-drop.dragover {
    background-color: var(--bs-primary-bg-subtle);
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.15);
}

.custom-file-drop input[type="file"] {
    position: absolute;
    inset: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 2;
}

.custom-file-drop__title {
    font-size: 1.25rem;
    font-weight: 500;
    color: var(--bs-body-color);
    margin-bottom: 0.5rem;
    pointer-events: none;
}

.custom-file-drop__or {
    color: var(--bs-secondary-color);
    margin: 1rem 0;
    font-size: 0.9rem;
    pointer-events: none;
}

.custom-file-drop__button {
    background-color: var(--bs-primary);
    color: white;
    border: none;
    padding: 0.55rem 1.5rem;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: background-color var(--transition-speed);
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}

.custom-file-drop__button:hover {
    background-color: #0d5bde;
}

.custom-file-drop__filename {
    margin-top: 1rem;
    color: var(--bs-secondary-color);
    font-size: 0.875rem;
    font-weight: 500;
    min-height: 1.5em;
    pointer-events: none;
}
/*750*/

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
                        <span>Starter Admin</span>
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
                                data-bs-target="#pageDropdownMenu"
                            >
                                <span>
                                    <i class="ri-git-branch-line me-2"></i>
                                    Page Examples
                                </span>
                                <i class="ri-arrow-right-s-line toggle-arrow"></i>
                            </a>
                            <div class="collapse ps-4" id="pageDropdownMenu">
                                <a href="sign-in.php" class="nav-link active" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Sign In
                                </a>
                                <a href="sign-up.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Sign Up
                                </a>
                                <a href="forgot-password.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Forgot Password
                                </a>
                                <a href="reset-password.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Reset Password
                                </a>
                                <a href="404.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> 404 Not Found
                                </a>
                                <a href="500.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> 500 Error
                                </a>
                                <a href="lock.php" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Lock
                                </a>
                            </div>
                        </nav>
                    </div>
                    <div class="sidebar-section">
                        <div class="sidebar-section-title">Sample Dropdown</div>
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
                                    Dropdowns
                                </span>
                                <i class="ri-arrow-right-s-line toggle-arrow"></i>
                            </a>
                            <div class="collapse ps-4" id="pageExamplesMenu">
                                <a href="#!" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Dropdown One
                                </a>
                                <a href="#!" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Dropdown Two
                                </a>
                                <a href="#!" class="nav-link" target="_blank">
                                    <i class="ri-checkbox-blank-circle-line"></i> Dropdown Three
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </aside>
            <div class="sidebar-backdrop" data-toggle="sidebar"></div>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
                <?php include_once 'includes/_top_navbar.php'; ?>
                <!-- Content -->
                <main class="flex-grow-1 p-3 p-md-4">
                    
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

                /**
                 * Initialize jQuery Validation
                 */
                $("form").validate();
            })();
        </script>
    </body>
</html>