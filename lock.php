<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Locked — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
    <!-- Auth CSS -->
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>
<body>

    <div class="lock-card card">
        <img src="https://ui-avatars.com/api/?name=Abdoulie&background=0D8ABC&color=fff" alt="Abdoulie" class="user-avatar" />
        <h2 class="lock-title">Abdoulie</h2>
        <p class="lock-desc">This account is locked. Please enter your password to continue.</p>
        <form>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required />
            </div>
            <button type="submit" class="btn btn-primary btn-unlock">
                <i class="ri-lock-line me-1"></i> Unlock
            </button>
        </form>
        <div class="footer-links">
            <a href="sign-in.php">Sign out</a>
        </div>
    </div>

    <script>
        const theme = localStorage.getItem("preferredTheme") || "system";
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const resolved = theme === "system" ? (prefersDark ? "dark" : "light") : theme;
        document.documentElement.setAttribute("data-bs-theme", resolved);
    </script>
</body>
</html>