(function () {
    /**
     * Sidebar toggle
     */
    const sidebarToggles = document.querySelectorAll('[data-toggle="sidebar"]');
    const body = document.body;

    sidebarToggles.forEach((btn) => {
        btn.addEventListener("click", () => {
            body.classList.toggle("sidebar-collapsed");
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