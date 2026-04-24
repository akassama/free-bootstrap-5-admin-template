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
            <form id="signInForm" class="validate-form" method="POST" action="process-sign-in.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required />
                        <button class="btn btn-outline-secondary toggle-password" type="button" aria-label="Show password">
                            <i class="ri-eye-off-line"></i>
                        </button>
                    </div>
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

    <script>
    // ----- PASSWORD SHOW/HIDE TOGGLE (class-based, reusable for any .toggle-password button) -----
    // Uses jQuery and Bootstrap input-group structure.
    // Supports multiple password fields on the same page.
    $(document).ready(function() {
        // Attach click event to all elements with class 'toggle-password'
        $('.toggle-password').on('click', function(e) {
            e.preventDefault();   // avoid any unexpected button behaviors
            const $btn = $(this);
            // Find the nearest parent .input-group and then locate the password input inside it
            const $input = $btn.closest('.input-group').find('input');
            
            // safety: if no input found, exit
            if (!$input.length) return;
            
            // Toggle the input type between 'password' and 'text'
            const currentType = $input.attr('type');
            const newType = currentType === 'password' ? 'text' : 'password';
            $input.attr('type', newType);
            
            // Toggle the icon (Remixicon classes): default hidden = eye-off, visible = eye-line
            const $icon = $btn.find('i');
            if (newType === 'text') {
                // password visible: show open eye icon
                $icon.removeClass('ri-eye-off-line').addClass('ri-eye-line');
                // optional: change button aria label for accessibility
                $btn.attr('aria-label', 'Hide password');
            } else {
                // password hidden: show closed eye icon
                $icon.removeClass('ri-eye-line').addClass('ri-eye-off-line');
                $btn.attr('aria-label', 'Show password');
            }
        });
    });
    </script>

    
</body>
</html>