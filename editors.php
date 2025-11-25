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
                    <!-- Text Editors Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Text Editors Page</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Text Editors Page</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h2>CodeMirror Examples</h2>
                                <p>JavaScript Code:</p>
                                <textarea class="form-control js-editor" id="javascript-editor">console.log('Hello, world!');</textarea>
                                <p>CSS Code:</p>
                                <textarea class="form-control css-editor" id="css-editor">body { background-color: #282a36; }</textarea>
                                <p>Code Editor:</p>
                                <textarea class="form-control code-editor" id="editor" name="editor"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <h2>CK Editor</h2>
                                <form action="/action_page.php">
                                    <div class="mb-3 mt-3">
                                    <label for="ckeditor">Text:</label>
                                    <textarea class="form-control text-editor" rows="3" id="ckeditor" name="ckeditor"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 mt-3">
                                <h2>Trumbowyg Editor</h2>
                                <div class="mb-3 mt-3">
                                <label for="treditor" class="form-label">Description:</label>
                                <textarea class="trumbowyg-editor" name="treditor" id="treditor" placeholder="Start typing...">
                                    <p>It is very lightweight.</p>
                                </textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <label for="post_content" class="form-label">Post Content:</label>
                                <textarea class="form-control summernote" name="post_content">
                                    <p>Hello! This is the <b>latest</b> Summernote.</p>
                                </textarea>
                            </div>
                            <div class="col-12 my-5">
                                <div id="quill-editor">
                                <p>Hello World!</p>
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
