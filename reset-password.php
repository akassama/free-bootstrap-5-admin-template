<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Reset Password — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
    <!-- Auth CSS -->
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>
<body>
    <div class="auth-card card">
        <div class="auth-header">
            <i class="ri-flashlight-line brand-icon"></i>
            <h1>Reset Password</h1>
            <p>Choose a new password for your account</p>
        </div>
        <div class="auth-body">
            <form>
                <input type="hidden" name="token" value="example-reset-token" />
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="akassama@yahoo.com" readonly />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="password" name="password" required minlength="8" />
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required minlength="8" />
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    <i class="ri-lock-unlock-line me-1"></i> Reset Password
                </button>
            </form>
        </div>
        <div class="auth-footer">
            <a href="sign-in.php">← Back to Sign In</a>
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