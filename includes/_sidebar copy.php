<script>
    /**
 * Dynamically activate sidebar nav link based on current URL path
 */
(function setActiveNavLink() {
    // Get current path (e.g., /profile, /admin/forms, /index)
    const path = window.location.pathname;

    // Normalize: strip trailing slash and leading slash
    const cleanPath = path.replace(/\/$/, '').replace(/^\/+/, '');
    var lastPath = window.location.pathname.split("/").pop();

    // Determine if it's an index page. This handles both "index.php" and an empty string for the root.
    const isIndexPage = isEmpty(lastPath) || removeExtension(lastPath) === "index";

    const navIdPrefix = "nav-id-";
    var targetNavLinkName = "";

    //if is index, set index (dashboard) as active
    if(isIndexPage){
        lastPath = "index";
    }

    targetNavLinkName = navIdPrefix + removeExtension(lastPath);
    // Get the element by its ID
    const navLink = document.getElementById(targetNavLinkName);

    // Check if the element exists
    if (navLink) {
        // Add the 'active' class to the element's classList
        navLink.classList.add("active");
        console.log("Nav link set to active:", navLink);
    } else {
        console.log("Nav link with ID '" + targetNavLinkName + "' not found.");
    }

})();

function removeExtension(filename) {
  return (
    filename.substring(0, filename.lastIndexOf('.')) || filename
  );
}

function isEmpty(str) {
    return (!str || str.length === 0 );
}
</script>

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
    <div class="sidebar-body"  id="sidebar-body">
        <div class="sidebar-section">
            <div class="sidebar-section-title">Menu</div>
            <nav class="nav flex-column mb-2">
                <a href="index.php" class="nav-link" id="nav-id-index">
                    <i class="ri-home-2-line"></i>
                    <span class="sidebar-text">Dashboard</span>
                </a>
                <a href="profile.php" class="nav-link" id="nav-id-profile">
                    <i class="ri-user-3-line"></i>
                    <span class="sidebar-text">Profile</span>
                </a>
                <a href="forms.php" class="nav-link" id="nav-id-forms">
                    <i class="ri-news-line"></i>
                    <span class="sidebar-text">Forms</span>
                </a>
                <a href="tables.php" class="nav-link" id="nav-id-tables">
                    <i class="ri-table-view"></i>
                    <span class="sidebar-text">Tables</span>
                </a>
                <a href="editors.php" class="nav-link" id="nav-id-editors">
                    <i class="ri-code-block"></i>
                    <span class="sidebar-text">Editors</span>
                </a>
                <a href="cards.php" class="nav-link" id="nav-id-cards">
                    <i class="ri-id-card-line"></i>
                    <span class="sidebar-text">Cards</span>
                </a>
                <a href="charts.php" class="nav-link" id="nav-id-charts">
                    <i class="ri-pie-chart-fill"></i>
                    <span class="sidebar-text">Charts</span>
                </a>
                <a href="layout.php" class="nav-link" id="nav-id-layout">
                    <i class="ri-file-text-line"></i>
                    <span class="sidebar-text">Layout</span>
                </a>
            </nav>
        </div>
        <div class="sidebar-section">
            <div class="sidebar-section-title">Dropdown</div>
            <nav class="nav flex-column mb-2">
                <!-- Dropdown (Expandable) -->
                <a href="#" class="nav-link d-flex justify-content-between align-items-center bs-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#pageDropdownMenu" data-nav-dropdown-link="page-examples">
                    <span>
                        <i class="ri-git-branch-line me-2"></i>
                        Page Examples
                    </span>
                    <i class="ri-arrow-right-s-line toggle-arrow"></i>
                </a>
                <div class="collapse ps-4" id="pageDropdownMenu">
                    <a href="sign-in.php" class="nav-link" target="_blank" id="nav-id-sign-in">
                        <i class="ri-checkbox-blank-circle-line"></i> Sign In
                    </a>
                    <a href="sign-up.php" class="nav-link" target="_blank" id="nav-id-sign-up">
                        <i class="ri-checkbox-blank-circle-line"></i> Sign Up
                    </a>
                    <a href="forgot-password.php" class="nav-link" target="_blank" id="nav-id-forgot-password">
                        <i class="ri-checkbox-blank-circle-line"></i> Forgot Password
                    </a>
                    <a href="reset-password.php" class="nav-link" target="_blank" id="nav-id-reset-password">
                        <i class="ri-checkbox-blank-circle-line"></i> Reset Password
                    </a>
                    <a href="404.php" class="nav-link" target="_blank" id="nav-id-404">
                        <i class="ri-checkbox-blank-circle-line"></i> 404 Not Found
                    </a>
                    <a href="500.php" class="nav-link" target="_blank" id="nav-id-500">
                        <i class="ri-checkbox-blank-circle-line"></i> 500 Error
                    </a>
                    <a href="lock.php" class="nav-link" target="_blank" id="nav-id-lock">
                        <i class="ri-checkbox-blank-circle-line"></i> Lock
                    </a>
                </div>
            </nav>
        </div>
        <div class="sidebar-section">
            <div class="sidebar-section-title">Sample Dropdown</div>
            <nav class="nav flex-column mb-2">
                <!-- Dropdown (Expandable) -->
                <a href="#" class="nav-link d-flex justify-content-between align-items-center bs-dropdown-toggle" data-bs-toggle="collapse" data-bs-target="#pageExamplesMenu"  data-nav-dropdown-link="sample-dropdown">
                    <span>
                        <i class="ri-git-branch-line me-2"></i>
                        Dropdowns
                    </span>
                    <i class="ri-arrow-right-s-line toggle-arrow"></i>
                </a>
                <div class="collapse ps-4" id="pageExamplesMenu">
                    <a href="dropdown-1.php" class="nav-link" target="_blank" id="nav-id-dropdown-1">
                        <i class="ri-checkbox-blank-circle-line"></i> Dropdown One
                    </a>
                    <a href="dropdown-2.php" class="nav-link" target="_blank" id="nav-id-dropdown-2">
                        <i class="ri-checkbox-blank-circle-line"></i> Dropdown Two
                    </a>
                </div>
            </nav>
        </div>
    </div>
</aside>
<div class="sidebar-backdrop" data-toggle="sidebar"></div>