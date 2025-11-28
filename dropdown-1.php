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
            <?php include_once 'includes/_sidebar.php'; ?>
            <!-- Main area -->
            <div class="content-wrapper d-flex flex-column">
                <?php include_once 'includes/_top_navbar.php'; ?>
                <!-- Content -->
                <main class="flex-grow-1 p-3 p-md-4">
                    <!-- Dropdown Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dropdown Page</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Dropdown Page</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Example Card</h5>
                            </div>
                            <div class="card-body">
                                <p>This is a Dropdown Page with breadcrumb and card layout.</p>

                                <div class="d-flex justify-content-between mt-3">
                                    <a href="index.php" class="btn btn-outline-secondary">
                                        <i class="ri-arrow-left-fill"></i> Back
                                    </a>

                                    <button type="submit" class="btn btn-primary">
                                        <i class="ri-save-line"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <?php include_once 'includes/_footer.php'; ?>
            </div>
        </div>

        <?php include_once 'includes/_footer_assets.php'; ?>
        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
