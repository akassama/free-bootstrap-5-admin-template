<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Forgot Password — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
</head>
<body>
    <div class="auth-card card">
        <div class="auth-header">
            <i class="ri-flashlight-line brand-icon"></i>
            <h1>Forgot Password</h1>
            <p>Enter your email to receive a password reset link</p>
        </div>
        <div class="auth-body">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    <i class="ri-send-plane-line me-1"></i> Send Reset Link
                </button>
            </form>
        </div>
        <div class="auth-footer">
            <a href="sign-in.php">← Back to Sign In</a>
        </div>
    </div>

    <script>
        // Theme persistence
        const theme = localStorage.getItem("preferredTheme") || "system";
        const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const resolved = theme === "system" ? (prefersDark ? "dark" : "light") : theme;
        document.documentElement.setAttribute("data-bs-theme", resolved);
    </script>
</body>
</html>