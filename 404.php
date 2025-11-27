<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>404 Not Found — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
    <!-- Auth CSS -->
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>
<body>
    <div class="error-card card">
        <i class="ri-error-warning-line error-icon"></i>
        <h1 class="error-title">404</h1>
        <p class="error-message">Sorry, the page you’re looking for doesn’t exist.</p>
        <a href="index.php" class="btn btn-primary btn-home">
            <i class="ri-home-2-line me-1"></i> Go Home
        </a>
    </div>

    <script>
        const theme = localStorage.getItem("preferredTheme") || "system";
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const resolved = theme === "system" ? (prefersDark ? "dark" : "light") : theme;
        document.documentElement.setAttribute("data-bs-theme", resolved);
    </script>
</body>
</html>