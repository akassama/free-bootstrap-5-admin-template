<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <title>Sign In — Bootstrap 5 Admin Starter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include_once 'includes/_header_assets.php'; ?>
    <!-- Auth CSS -->
    <link rel="stylesheet" href="assets/css/auth.css" />
</head>
<body>
    <div class="auth-card card">
        <div class="auth-header">
            <i class="ri-flashlight-line brand-icon"></i>
            <h1>Sign In</h1>
            <p>Enter your credentials to access your account</p>
        </div>
        <div class="auth-body">
            <form id="signInForm">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember" />
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="forgot-password.php">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    <i class="ri-login-box-line me-1"></i> Sign In
                </button>
            </form>

                <div class="divider">
                    <span class="divider-text">Or continue with</span>
                </div>

                <div class="social-login">
                    <button class="social-btn github">
                        <i class="ri-github-fill"></i>
                        <span class="d-none d-sm-inline">GitHub</span>
                    </button>
                    <button class="social-btn google">
                        <i class="ri-google-fill"></i>
                        <span class="d-none d-sm-inline">Google</span>
                    </button>
                </div>
                <div class="social-login">
                    <button class="social-btn facebook">
                        <i class="ri-facebook-fill"></i>
                        <span class="d-none d-sm-inline">Facebook</span>
                    </button>
                    <button class="social-btn twitter-x">
                        <i class="ri-twitter-x-fill"></i>
                        <span class="d-none d-sm-inline">Twitter</span>
                    </button>
                </div>
        </div>
        <div class="auth-footer">
            Don't have an account? <a href="sign-up.php">Sign up</a>
        </div>
    </div>

    <?php include_once 'includes/_footer_assets.php'; ?>
    <!-- Site JS for theme -->
    <script>
        (function () {
            // Theme handling
            const theme = localStorage.getItem("preferredTheme") || "system";
            function systemPrefersDark() {
                return window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
            }
            let resolved = theme;
            if (theme === "system") {
                resolved = systemPrefersDark() ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", resolved);

        })();
    </script>
</body>
</html>