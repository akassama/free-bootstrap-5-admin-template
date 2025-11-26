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
                    <!-- DataTables Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">DataTables</h4>
                            <p class="text-secondary mb-0">Responsive DataTables. Highly flexible tool that many advanced features to any HTML table</p>
                        </div>

                        <!-- Users Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Users</h5>
                            </div>
                            <div class="card-body">
                                <!-- DataTable -->
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover align-middle datatable"
                                        id="recentUsersTable"
                                        style="width: 100%"
                                    >
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Joined</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img
                                                            src="https://ui-avatars.com/api/?name=Jane+Doe&background=0D8ABC&color=fff"
                                                            alt="Jane Doe"
                                                            class="user-avatar me-2"
                                                        />
                                                        <div>
                                                            <div class="fw-semibold">Jane Doe</div>
                                                            <small class="text-secondary">Administrator</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>jane.doe@example.com</td>
                                                <td>
                                                    <span class="badge text-bg-success">Active</span>
                                                </td>
                                                <td>2024-09-12</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img
                                                            src="https://ui-avatars.com/api/?name=John+Smith&background=FF6B6B&color=fff"
                                                            alt="John Smith"
                                                            class="user-avatar me-2"
                                                        />
                                                        <div>
                                                            <div class="fw-semibold">John Smith</div>
                                                            <small class="text-secondary">Editor</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>john.smith@example.com</td>
                                                <td>
                                                    <span class="badge text-bg-warning">Pending</span>
                                                </td>
                                                <td>2024-10-03</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img
                                                            src="https://ui-avatars.com/api/?name=Fatou+Kamara&background=34A853&color=fff"
                                                            alt="Fatou Kamara"
                                                            class="user-avatar me-2"
                                                        />
                                                        <div>
                                                            <div class="fw-semibold">Fatou Kamara</div>
                                                            <small class="text-secondary">Viewer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>fatou.kamara@example.com</td>
                                                <td>
                                                    <span class="badge text-bg-secondary">Inactive</span>
                                                </td>
                                                <td>2024-08-21</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img
                                                            src="https://ui-avatars.com/api/?name=Abdoulie+Kassama&background=6366F1&color=fff"
                                                            alt="Abdoulie Kassama"
                                                            class="user-avatar me-2"
                                                        />
                                                        <div>
                                                            <div class="fw-semibold">Abdoulie Kassama</div>
                                                            <small class="text-secondary">Owner</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>abdoulie.kassama@example.com</td>
                                                <td>
                                                    <span class="badge text-bg-success">Active</span>
                                                </td>
                                                <td>2024-07-05</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Messages Table -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Contact Messages</h5>
                            </div>
                            <div class="card-body">
                                <!-- Bulk Actions Toolbar -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">
                                            <i class="ri-refresh-line"></i> Refresh
                                        </button>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <select class="form-select form-select-sm" style="width: auto;">
                                            <option>Bulk Actions</option>
                                            <option>Mark as Read</option>
                                            <option>Mark as Unread</option>
                                            <option>Delete</option>
                                        </select>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Apply</button>
                                    </div>
                                </div>
                                <!-- DataTable -->
                                <div class="table-responsive">
                                    <table class="table table-hover datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" id="selectAllMessages">
                                                        <label class="form-check-label" for="selectAllMessages"></label>
                                                    </div>
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Message</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg1">
                                                        <label class="form-check-label" for="msg1"></label>
                                                    </div>
                                                </td>
                                                <td>John Doe</td>
                                                <td class="text-truncate" style="max-width: 300px;">Hello, I have a question about...</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg2">
                                                        <label class="form-check-label" for="msg2"></label>
                                                    </div>
                                                </td>
                                                <td>Jane Smith</td>
                                                <td class="text-truncate" style="max-width: 300px;">Thanks for your help with the previous issue...</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check mb-0">
                                                        <input class="form-check-input" type="checkbox" value="" id="msg3">
                                                        <label class="form-check-label" for="msg3"></label>
                                                    </div>
                                                </td>
                                                <td>Bob Johnson</td>
                                                <td class="text-truncate" style="max-width: 300px;">Is there an update on the project timeline?</td>
                                                <td>
                                                    <div class="d-flex gap-1">
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-eye-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-mail-line"></i></button>
                                                        <button class="btn btn-sm btn-outline-secondary"><i class="ri-delete-bin-line"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Site Traffic Table (Bootstrap Only) -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Site Traffic</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Traffic Source</th>
                                                <th scope="col">Source Type</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Global Rank</th>
                                                <th scope="col">Traffic Share</th>
                                                <th scope="col">Change</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Google</td>
                                                <td>Organic Search</td>
                                                <td>Search Engines</td>
                                                <td>1</td>
                                                <td>45.2%</td>
                                                <td><span class="text-success">+2.1%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Direct</td>
                                                <td>Direct</td>
                                                <td>Direct</td>
                                                <td>-</td>
                                                <td>23.5%</td>
                                                <td><span class="text-danger">-1.3%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Facebook</td>
                                                <td>Social Media</td>
                                                <td>Social Networks</td>
                                                <td>4</td>
                                                <td>12.8%</td>
                                                <td><span class="text-success">+0.8%</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>YouTube</td>
                                                <td>Video</td>
                                                <td>Video Platforms</td>
                                                <td>2</td>
                                                <td>8.9%</td>
                                                <td><span class="text-muted">0.0%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </section>
                </main>
                
                <footer class="footer py-3 px-3 px-md-4 border-top mt-auto">
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
                        <div class="text-secondary small">
                            <span
                                >&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script></span
                            >
                            <span class="fw-semibold">Starter Admin</span>.
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
