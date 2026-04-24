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
            <form id="signUpForm" class="validate-form" method="POST" action="process-sign-up.php">
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
                <!-- Password field with show/hide toggle (keeps compare-val-1 class) -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control compare-val-1" id="password" name="password" required />
                        <button class="btn btn-outline-secondary toggle-password" type="button" aria-label="Show password">
                            <i class="ri-eye-off-line"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password field with show/hide toggle -->
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control compare-val-2" id="confirmPassword" name="confirmPassword" required />
                        <button class="btn btn-outline-secondary toggle-password" type="button" aria-label="Show password">
                            <i class="ri-eye-off-line"></i>
                        </button>
                    </div>
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

        // Compare two input values based on classes .compare-val-1 and .compare-val-2
        // Displays error message after the container of .compare-val-2 (outside input group)
        // Removes error message when values match.
        $(document).ready(function() {
            function validateMatch() {
                var $input1 = $('.compare-val-1');
                var $input2 = $('.compare-val-2');
                
                if ($input1.length === 0 || $input2.length === 0) return;
                
                var val1 = $input1.val();
                var val2 = $input2.val();
                
                // Determine the container after which we should place the error
                // If the input is inside an .input-group, place error after the .input-group
                // Otherwise place after the input itself
                var $container = $input2.closest('.input-group').length ? $input2.closest('.input-group') : $input2;
                var $existingError = $container.parent().find('.match-error');
                
                if (val1 !== val2) {
                    if ($existingError.length === 0) {
                        var $errorSpan = $('<span class="match-error text-danger" style="font-size:0.875rem; margin-top:0.25rem; display:block;">Passwords do not match</span>');
                        $container.after($errorSpan);
                    }
                } else {
                    $existingError.remove();
                }
            }
            
            // Trigger validation when typing in confirm password field
            $(document).on('input', '.compare-val-2', validateMatch);
            
            // Also re-validate when first password field changes (if confirm is not empty)
            $(document).on('input', '.compare-val-1', function() {
                var $input2 = $('.compare-val-2');
                if ($input2.length && $input2.val().length > 0) {
                    validateMatch();
                } else {
                    var $container = $input2.closest('.input-group').length ? $input2.closest('.input-group') : $input2;
                    $container.parent().find('.match-error').remove();
                }
            });
        });

        $(document).ready(function() {
            // Initialize jQuery Validate on all forms with class "validate-form"
            $("form.validate-form").each(function() {
                $(this).validate({
                    errorElement: "span",
                    errorClass: "field-error text-danger",
                    highlight: function(element) {
                        $(element).addClass("is-invalid");
                    },
                    unhighlight: function(element) {
                        $(element).removeClass("is-invalid");
                    },
                    errorPlacement: function(error, element) {
                        if (element.parent().hasClass("input-group")) {
                            error.insertAfter(element.parent());
                        } else {
                            error.insertAfter(element);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>