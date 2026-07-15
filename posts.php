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
                            <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                        </ol>
                    </nav>

                    <!-- Page Header -->
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                        <div>
                            <h4 class="mb-1">Blog Posts</h4>
                            <p class="text-secondary mb-0">Manage all your published, draft, and archived posts.</p>
                        </div>
                        <a href="create-post.php" class="btn btn-primary">
                            <i class="ri-add-line"></i> New Post
                        </a>
                    </div>

                    <!-- Blogs Table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title mb-0">All Posts</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle datatable" id="blogsTable" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 280px;">Post</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-end" style="min-width: 120px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Row 1: With Featured Image -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <!-- Featured Image -->
                                                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=100&h=100&fit=crop" 
                                                        alt="Post Thumbnail" 
                                                        class="rounded border" 
                                                        style="width: 48px; height: 48px; object-fit: cover; flex-shrink: 0;">
                                                    <div class="min-width-0">
                                                        <div class="fw-semibold text-truncate" title="Getting Started with Bootstrap 5">Getting Started with Bootstrap 5</div>
                                                        <small class="text-secondary text-truncate d-block">A comprehensive guide to building modern UIs...</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Abdoulie+Kassama&background=6366F1&color=fff" alt="Abdoulie" class="user-avatar" />
                                                    <span>Abdoulie K.</span>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-light text-dark border">Technology</span></td>
                                            <td><span class="badge text-bg-success">Published</span></td>
                                            <td>Oct 24, 2024</td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="#" class="btn btn-sm btn-outline-secondary" title="View"><i class="ri-eye-line"></i></a>
                                                    <a href="edit-post.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
                                                    <button class="btn btn-sm btn-outline-danger js-delete-confirm" title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 2: WITHOUT Featured Image (Fallback Placeholder) -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <!-- Fallback Placeholder -->
                                                    <div class="d-flex align-items-center justify-content-center bg-light border rounded text-secondary" 
                                                        style="width: 48px; height: 48px; flex-shrink: 0;">
                                                        <i class="ri-image-line" style="font-size: 1.25rem;"></i>
                                                    </div>
                                                    <div class="min-width-0">
                                                        <div class="fw-semibold text-truncate" title="10 Tips for Better Web Design">10 Tips for Better Web Design</div>
                                                        <small class="text-secondary text-truncate d-block">Improve your layout and user experience today.</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=Jane+Doe&background=0D8ABC&color=fff" alt="Jane" class="user-avatar" />
                                                    <span>Jane Doe</span>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-light text-dark border">Design</span></td>
                                            <td><span class="badge text-bg-warning">Draft</span></td>
                                            <td>Oct 20, 2024</td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="#" class="btn btn-sm btn-outline-secondary" title="View"><i class="ri-eye-line"></i></a>
                                                    <a href="edit-post.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
                                                    <button class="btn btn-sm btn-outline-danger js-delete-confirm" title="Delete"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Row 3: With Featured Image -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=100&h=100&fit=crop" 
                                                        alt="Post Thumbnail" 
                                                        class="rounded border" 
                                                        style="width: 48px; height: 48px; object-fit: cover; flex-shrink: 0;">
                                                    <div class="min-width-0">
                                                        <div class="fw-semibold text-truncate" title="Understanding Serverless Architecture">Understanding Serverless Architecture</div>
                                                        <small class="text-secondary text-truncate d-block">How serverless computing is changing the backend...</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <img src="https://ui-avatars.com/api/?name=John+Smith&background=FF6B6B&color=fff" alt="John" class="user-avatar" />
                                                    <span>John Smith</span>
                                                </div>
                                            </td>
                                            <td><span class="badge text-bg-light text-dark border">Technology</span></td>
                                            <td><span class="badge text-bg-secondary">Archived</span></td>
                                            <td>Sep 15, 2024</td>
                                            <td class="text-end">
                                                <div class="d-flex gap-1 justify-content-end">
                                                    <a href="#" class="btn btn-sm btn-outline-secondary" title="View"><i class="ri-eye-line"></i></a>
                                                    <a href="edit-post.php" class="btn btn-sm btn-outline-primary" title="Edit"><i class="ri-pencil-line"></i></a>
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
