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
            <h1>Create Account</h1>
            <p>Fill in your details to create a new account</p>
        </div>
        <div class="auth-body">
            <form id="signUpForm">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="John" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Doe" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="signupEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="signupEmail" placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required />
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required />
                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">
                            I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Create Account</button>
            </form>

            <div class="divider">
                <span class="divider-text">Or sign up with</span>
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
            Already have an account? <a href="sign-in.php">Sign in</a>
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