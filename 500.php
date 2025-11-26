<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>500 Server Error — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
</head>
<body>
    <div class="error-card card">
        <i class="ri-bug-2-line error-icon"></i>
        <h1 class="error-title">500</h1>
        <p class="error-message">Something went wrong on our end. Please try again later.</p>
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