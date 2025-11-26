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