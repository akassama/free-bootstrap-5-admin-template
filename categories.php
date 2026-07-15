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
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb small mb-1">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Categories</li>
                        </ol>
                    </nav>

                    <!-- Page Header -->
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                        <div>
                            <h4 class="mb-1">Categories</h4>
                            <p class="text-secondary mb-0">Organize your content with hierarchical categories.</p>
                        </div>
                        <a href="create-category.php" class="btn btn-primary">
                            <i class="ri-add-line"></i> New Category
                        </a>
                    </div>

                    <!-- Categories Table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">All Categories</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle datatable" id="categoriesTable" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th class="text-center">Posts</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">Technology</div>
                                                <small class="text-secondary">Articles about web development, software, and gadgets.</small>
                                            </td>
                                            <td><code class="text-secondary bg-light px-2 py-1 rounded">technology</code></td>
                                            <td class="text-center"><span class="badge text-bg-light text-dark border rounded-pill">42</span></td>
                                            <td><span class="badge text-bg-success">Active</span></td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="edit-category.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
                                                    <button class="btn btn-sm btn-outline-danger js-delete-confirm" title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">Design</div>
                                                <small class="text-secondary">UI/UX trends, typography, and visual design principles.</small>
                                            </td>
                                            <td><code class="text-secondary bg-light px-2 py-1 rounded">design</code></td>
                                            <td class="text-center"><span class="badge text-bg-light text-dark border rounded-pill">28</span></td>
                                            <td><span class="badge text-bg-success">Active</span></td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="edit-category.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
                                                    <button class="btn btn-sm btn-outline-danger js-delete-confirm" title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">Legacy Systems</div>
                                                <small class="text-secondary">Older articles kept for historical reference.</small>
                                            </td>
                                            <td><code class="text-secondary bg-light px-2 py-1 rounded">legacy-systems</code></td>
                                            <td class="text-center"><span class="badge text-bg-light text-dark border rounded-pill">5</span></td>
                                            <td><span class="badge text-bg-secondary">Inactive</span></td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="edit-category.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
                                                    <button class="btn btn-sm btn-outline-danger js-delete-confirm" title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include_once 'includes/_footer.php'; ?>
            </div>
        </div>

        <?php include_once 'includes/_footer_assets.php'; ?>
        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
