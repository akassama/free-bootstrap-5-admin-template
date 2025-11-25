<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8" />
        <title>Bootstrap 5 Admin Starter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include_once 'includes/_header_assets.php'; ?>
    </head>
    <body>
        <div class="layout">
            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="sidebar-header d-flex justify-content-between align-items-center">
                    <div class="sidebar-brand">
                        <i class="ri-flashlight-line text-primary"></i>
                        <span>Laravel</span>
                    </div>
                    <button class="btn btn-sm btn-outline-secondary d-md-none" type="button" data-toggle="sidebar">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="sidebar-body"  id="sidebar-body">
                    <?php include_once 'includes/_sidebar.php'; ?>
                </div>
            </aside>
            <div class="sidebar-backdrop" data-toggle="sidebar"></div>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
                <!-- Top navbar -->
                <nav class="navbar navbar-expand top-navbar bg-body sticky-top px-3 px-md-4">
                    <div class="container-fluid px-0">
                        <div class="d-flex align-items-center gap-2">
                            <button
                                class="btn btn-sm btn-outline-secondary d-md-inline-flex d-inline-flex"
                                type="button"
                                aria-label="Toggle side update the iconbar"
                                data-toggle="sidebar"
                            >
                                <i class="ri-menu-fold-line"></i>
                            </button>
                            <span class="navbar-brand-text d-none d-md-inline-block">Dashboard</span>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <!-- Search bar -->
                            <div class="position-relative search-form d-none d-sm-block">
                                <i class="ri-search-line search-icon"></i>
                                <input type="search" class="form-control" placeholder="Search..." />
                            </div>
                            <!-- User dropdown -->
                            <div class="dropdown">
                                <button
                                    class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2"
                                    type="button"
                                    id="userDropdown"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <span
                                        class="d-inline-flex justify-content-center align-items-center rounded-circle bg-primary text-white"
                                        style="width: 28px; height: 28px; font-size: 0.8rem"
                                    >
                                        A
                                    </span>
                                    <span class="d-none d-sm-inline">Abdoulie</span>
                                    <i class="ri-arrow-down-s-line"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                    <li>
                                        <a class="dropdown-item" href="profile.php"
                                            ><i class="ri-settings-3-line me-2"></i>Settings
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item js-logout" href="#">
                                            <i class="ri-logout-box-r-line me-2"></i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Content -->
                <main class="flex-grow-1 p-3 p-md-4">
                    <!-- Forms Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forms</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Forms</h4>
                            <p class="text-secondary mb-0">Advanced Inputs</p>
                        </div>
                        
                        <!-- Sample Form Card -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Sample Form</h5>
                            </div>
                            <div class="card-body">
                                <form id="sampleForm">
                                    <div class="row">
                                        <!-- Input Field -->
                                        <div class="col-md-6 mb-3">
                                            <label for="name" class="form-label">Full Name <span class="required"></span></label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                                        </div>
                                        
                                        <!-- Email Address -->
                                        <div class="col-md-6 mb-3">
                                            <label for="email" class="form-label">Email Address <span class="required"></span></label>
                                            <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- Select Option -->
                                        <div class="col-md-4 mb-3">
                                            <label for="department" class="form-label">Department</label>
                                            <select class="form-select" id="department">
                                                <option selected disabled>Select a department</option>
                                                <option value="hr">Human Resources</option>
                                                <option value="it">Information Technology</option>
                                                <option value="finance">Finance</option>
                                                <option value="marketing">Marketing</option>
                                                <option value="sales">Sales</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Date Input -->
                                        <div class="col-md-4 mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="date">
                                        </div>
                                        
                                        <!-- Input Group -->
                                        <div class="col-md-4 mb-3">
                                            <label for="website" class="form-label">Website</label>
                                            <div class="input-group">
                                                <span class="input-group-text">https://</span>
                                                <input type="text" class="form-control" id="website" placeholder="example.com">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Multi Select (Select2) -->
                                    <div class="mb-3">
                                        <label for="skills" class="form-label">Skills</label>
                                        <select class="form-select select2-options" id="skills" multiple="multiple">
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                            <option value="javascript">JavaScript</option>
                                            <option value="php">PHP</option>
                                            <option value="python">Python</option>
                                            <option value="laravel">Laravel</option>
                                            <option value="react">React</option>
                                            <option value="vue">Vue.js</option>
                                            <option value="java">Java</option>
                                        </select>
                                        <div class="form-text">Select multiple skills that apply to you (HTML, Java...).</div>
                                    </div>
                                    
                                    <!-- Textarea -->
                                    <div class="mb-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" rows="3" placeholder="Tell us about yourself"></textarea>
                                    </div>
                                    
                                    <!-- Tags Textarea -->
                                    <div class="mb-3">
                                        <label for="tags" class="form-label">Tags</label>
                                        <textarea class="form-control tags-input" id="tags" rows="3" placeholder="Tags comma separated"></textarea>
                                    </div>
                                    
                                    <!-- File Input -->
                                    <div class="mb-3">
                                        <label for="avatar" class="form-label">Profile Picture</label>
                                        <input class="form-control" type="file" id="avatar">
                                        <div class="form-text">Accepted formats: JPG, PNG, GIF. Max size: 2MB.</div>
                                    </div>
                                    
                                    <!-- Checkboxes -->
                                    <div class="mb-3">
                                        <label class="form-label">Interests</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest1">
                                            <label class="form-check-label" for="interest1">
                                                Technology
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest2">
                                            <label class="form-check-label" for="interest2">
                                                Sports
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest3">
                                            <label class="form-check-label" for="interest3">
                                                Music
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="interest4">
                                            <label class="form-check-label" for="interest4">
                                                Travel
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <!-- Radios -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Experience Level</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience1" checked>
                                                <label class="form-check-label" for="experience1">
                                                    Beginner
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience2">
                                                <label class="form-check-label" for="experience2">
                                                    Intermediate
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="experience" id="experience3">
                                                <label class="form-check-label" for="experience3">
                                                    Advanced
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <!-- Switches -->
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Preferences</label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="notifications" checked>
                                                <label class="form-check-label" for="notifications">Email Notifications</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="newsletter">
                                                <label class="form-check-label" for="newsletter">Newsletter</label>
                                            </div>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="publicProfile">
                                                <label class="form-check-label" for="publicProfile">Public Profile</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Range Slider with numbers -->
                                    <div class="mb-4">
                                        <label for="satisfaction" class="form-label">Satisfaction Level: <span id="rangeValue">5</span></label>
                                        <input type="range" class="form-range" id="satisfaction" min="1" max="10" value="5">
                                        <div class="d-flex justify-content-between small text-secondary">
                                            <span>1 (Poor)</span>
                                            <span>10 (Excellent)</span>
                                        </div>
                                    </div>
                                    
                                    <!-- Form Actions -->
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-save-line"></i> Save Changes
                                        </button>
                                        <button type="reset" class="btn btn-outline-secondary">
                                            <i class="ri-refresh-line"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Additional Form Examples Card -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Additional Form Examples</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-3">Validation States</h6>
                                        
                                        <!-- Valid Input -->
                                        <div class="mb-3">
                                            <label for="validInput" class="form-label">Valid Input</label>
                                            <input type="text" class="form-control is-valid" id="validInput" value="Correct value">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                        <!-- Invalid Input -->
                                        <div class="mb-3">
                                            <label for="invalidInput" class="form-label">Invalid Input</label>
                                            <input type="text" class="form-control is-invalid" id="invalidInput" value="Wrong value">
                                            <div class="invalid-feedback">
                                                Please provide a valid value.
                                            </div>
                                        </div>
                                        
                                        <!-- Disabled Input -->
                                        <div class="mb-3">
                                            <label for="disabledInput" class="form-label">Disabled Input</label>
                                            <input type="text" class="form-control" id="disabledInput" value="Disabled field" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <h6 class="mb-3">Input Sizes</h6>
                                        
                                        <!-- Small Input -->
                                        <div class="mb-3">
                                            <label for="smallInput" class="form-label">Small Input</label>
                                            <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small input">
                                        </div>
                                        
                                        <!-- Default Input -->
                                        <div class="mb-3">
                                            <label for="defaultInput" class="form-label">Default Input</label>
                                            <input type="text" class="form-control" id="defaultInput" placeholder="Default input">
                                        </div>
                                        
                                        <!-- Large Input -->
                                        <div class="mb-3">
                                            <label for="largeInput" class="form-label">Large Input</label>
                                            <input type="text" class="form-control form-control-lg" id="largeInput" placeholder="Large input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>

                <footer class="footer py-3 px-3 px-md-4 border-top mt-auto">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
                        <div class="text-secondary small">
                            <span>&copy; <script>document.write(new Date().getFullYear())</script></span>
                            <span class="fw-semibold">Laravel Admin</span>.
                            <span>All rights reserved.</span>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="#" class="text-decoration-none small">Privacy Policy</a>
                            <a href="#" class="text-decoration-none small">Terms of Service</a>
                            <a href="#" class="text-decoration-none small">Support</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <?php include_once 'includes/_footer_assets.php'; ?>
        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
