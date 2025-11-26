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
                    <!-- Cards Page -->
                    <section class="page">
                        <nav aria-label="breadcrumb" class="mb-3">
                            <ol class="breadcrumb small mb-1">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cards Page</li>
                            </ol>
                        </nav>
                        <div class="mb-3">
                            <h4 class="mb-1">Cards Page</h4>
                            <p class="text-secondary mb-0">A clean starting point for your pages</p>
                        </div>
                        
                        <!-- Stat Cards -->
                        <div class="row mb-4">
                            <div class="col-md-3 mb-3">
                                <div class="card stat-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label">Total Users</div>
                                                <div class="stat-card-value">12,402</div>
                                                <div class="stat-card-change positive">
                                                    <i class="ri-arrow-up-line"></i> 12.5% from last month
                                                </div>
                                            </div>
                                            <div class="stat-card-icon bg-primary bg-opacity-10 text-primary">
                                                <i class="ri-user-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card stat-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label">Revenue</div>
                                                <div class="stat-card-value">$24,580</div>
                                                <div class="stat-card-change positive">
                                                    <i class="ri-arrow-up-line"></i> 8.2% from last month
                                                </div>
                                            </div>
                                            <div class="stat-card-icon bg-success bg-opacity-10 text-success">
                                                <i class="ri-money-dollar-circle-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card stat-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label">Orders</div>
                                                <div class="stat-card-value">1,248</div>
                                                <div class="stat-card-change negative">
                                                    <i class="ri-arrow-down-line"></i> 3.4% from last month
                                                </div>
                                            </div>
                                            <div class="stat-card-icon bg-warning bg-opacity-10 text-warning">
                                                <i class="ri-shopping-cart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card stat-card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="stat-card-label">Conversion</div>
                                                <div class="stat-card-value">4.8%</div>
                                                <div class="stat-card-change positive">
                                                    <i class="ri-arrow-up-line"></i> 1.2% from last month
                                                </div>
                                            </div>
                                            <div class="stat-card-icon bg-info bg-opacity-10 text-info">
                                                <i class="ri-line-chart-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- User Cards -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Team Members</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="https://ui-avatars.com/api/?name=Jane+Doe&background=0D8ABC&color=fff" 
                                                alt="Jane Doe" class="user-avatar me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Jane Doe</h6>
                                                <p class="text-secondary mb-0 small">Administrator</p>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown">
                                                    <i class="ri-more-2-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <img src="https://ui-avatars.com/api/?name=John+Smith&background=FF6B6B&color=fff" 
                                                alt="John Smith" class="user-avatar me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">John Smith</h6>
                                                <p class="text-secondary mb-0 small">Editor</p>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown">
                                                    <i class="ri-more-2-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <img src="https://ui-avatars.com/api/?name=Fatou+Kamara&background=34A853&color=fff" 
                                                alt="Fatou Kamara" class="user-avatar me-3">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Fatou Kamara</h6>
                                                <p class="text-secondary mb-0 small">Viewer</p>
                                            </div>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown">
                                                    <i class="ri-more-2-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">View Profile</a></li>
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Recent Activity</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="activity-item">
                                            <div class="d-flex">
                                                <div class="activity-icon bg-primary bg-opacity-10 text-primary me-3">
                                                    <i class="ri-user-add-line"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">New user registered</h6>
                                                    <p class="text-secondary mb-0 small">John Doe joined the platform</p>
                                                    <small class="text-muted">2 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex">
                                                <div class="activity-icon bg-success bg-opacity-10 text-success me-3">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">New order received</h6>
                                                    <p class="text-secondary mb-0 small">Order #12345 for $249.99</p>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex">
                                                <div class="activity-icon bg-warning bg-opacity-10 text-warning me-3">
                                                    <i class="ri-alert-line"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Server warning</h6>
                                                    <p class="text-secondary mb-0 small">High CPU usage detected</p>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="d-flex">
                                                <div class="activity-icon bg-info bg-opacity-10 text-info me-3">
                                                    <i class="ri-file-text-line"></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Document uploaded</h6>
                                                    <p class="text-secondary mb-0 small">Quarterly report.pdf</p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Progress Cards -->
                        <div class="row mb-4">
                            <div class="col-md-4 mb-3">
                                <div class="card progress-card">
                                    <div class="card-body">
                                        <h6 class="card-title">Project Completion</h6>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>75%</span>
                                            <span>100%</span>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-secondary small">15 of 20 tasks completed</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card progress-card">
                                    <div class="card-body">
                                        <h6 class="card-title">Storage Usage</h6>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>65%</span>
                                            <span>100%</span>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-secondary small">6.5 GB of 10 GB used</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card progress-card">
                                    <div class="card-body">
                                        <h6 class="card-title">Bandwidth Usage</h6>
                                        <div class="d-flex justify-content-between mb-2">
                                            <span>42%</span>
                                            <span>100%</span>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="text-secondary small">42 GB of 100 GB used</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Task Cards -->
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Tasks</h5>
                                        <span class="badge bg-primary">5 pending</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="task-item">
                                            <div class="form-check">
                                                <input class="form-check-input task-checkbox" type="checkbox" id="task1">
                                                <label class="form-check-label task-label" for="task1">
                                                    Update documentation
                                                </label>
                                            </div>
                                            <small class="text-muted">Due tomorrow</small>
                                        </div>
                                        <div class="task-item">
                                            <div class="form-check">
                                                <input class="form-check-input task-checkbox" type="checkbox" id="task2" checked>
                                                <label class="form-check-label task-label" for="task2">
                                                    Review pull requests
                                                </label>
                                            </div>
                                            <small class="text-muted">Completed</small>
                                        </div>
                                        <div class="task-item">
                                            <div class="form-check">
                                                <input class="form-check-input task-checkbox" type="checkbox" id="task3">
                                                <label class="form-check-label task-label" for="task3">
                                                    Prepare monthly report
                                                </label>
                                            </div>
                                            <small class="text-muted">Due in 3 days</small>
                                        </div>
                                        <div class="task-item">
                                            <div class="form-check">
                                                <input class="form-check-input task-checkbox" type="checkbox" id="task4">
                                                <label class="form-check-label task-label" for="task4">
                                                    Schedule team meeting
                                                </label>
                                            </div>
                                            <small class="text-muted">Due next week</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0">Notifications</h5>
                                        <span class="badge bg-danger">3 new</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="notification-item">
                                            <div class="d-flex">
                                                <span class="notification-dot bg-danger me-2 mt-1"></span>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Security Alert</h6>
                                                    <p class="text-secondary mb-0 small">Unusual login detected from new device</p>
                                                    <small class="text-muted">10 minutes ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-item">
                                            <div class="d-flex">
                                                <span class="notification-dot bg-primary me-2 mt-1"></span>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">System Update</h6>
                                                    <p class="text-secondary mb-0 small">New version available for installation</p>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-item">
                                            <div class="d-flex">
                                                <span class="notification-dot bg-success me-2 mt-1"></span>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Payment Received</h6>
                                                    <p class="text-secondary mb-0 small">Payment of $499.99 received from customer</p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Icon Cards -->
                        <div class="row mb-4">
                            <div class="col-md-3 mb-3">
                                <div class="card icon-card">
                                    <div class="card-icon text-primary">
                                        <i class="ri-download-cloud-line"></i>
                                    </div>
                                    <h5>Downloads</h5>
                                    <p class="text-secondary">1,248 files</p>
                                    <button class="btn btn-sm btn-outline-primary">View All</button>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card icon-card">
                                    <div class="card-icon text-success">
                                        <i class="ri-shield-check-line"></i>
                                    </div>
                                    <h5>Security</h5>
                                    <p class="text-secondary">All systems secure</p>
                                    <button class="btn btn-sm btn-outline-success">Check Status</button>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card icon-card">
                                    <div class="card-icon text-warning">
                                        <i class="ri-settings-3-line"></i>
                                    </div>
                                    <h5>Settings</h5>
                                    <p class="text-secondary">Manage preferences</p>
                                    <button class="btn btn-sm btn-outline-warning">Configure</button>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="card icon-card">
                                    <div class="card-icon text-info">
                                        <i class="ri-customer-service-line"></i>
                                    </div>
                                    <h5>Support</h5>
                                    <p class="text-secondary">Get help 24/7</p>
                                    <button class="btn btn-sm btn-outline-info">Contact Us</button>
                                </div>
                            </div>
                        </div>

                        <!-- Cards with Images Section -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <h5 class="mb-3">Cards with Images</h5>
                            </div>
                            
                            <!-- Product Cards -->
                            <div class="col-md-4 mb-3">
                                <div class="card product-card card-hover-lift">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                        class="card-img-top product-image" alt="Wireless Headphones">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="card-title mb-0">Wireless Headphones</h6>
                                            <span class="badge bg-success">In Stock</span>
                                        </div>
                                        <p class="text-secondary small mb-2">Premium noise-cancelling wireless headphones with 30h battery life.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h6 mb-0 text-primary">$199.99</span>
                                            <div class="card-actions">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="ri-shopping-cart-line"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card product-card card-hover-lift">
                                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                        class="card-img-top product-image" alt="Smart Watch">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="card-title mb-0">Smart Watch Series 5</h6>
                                            <span class="badge bg-warning">Low Stock</span>
                                        </div>
                                        <p class="text-secondary small mb-2">Advanced fitness tracking and heart rate monitoring with GPS.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h6 mb-0 text-primary">$299.99</span>
                                            <div class="card-actions">
                                                <button class="btn btn-sm btn-outline-primary">
                                                    <i class="ri-shopping-cart-line"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card product-card card-hover-lift">
                                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                        class="card-img-top product-image" alt="Smartphone">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h6 class="card-title mb-0">Smartphone Pro</h6>
                                            <span class="badge bg-danger">Out of Stock</span>
                                        </div>
                                        <p class="text-secondary small mb-2">Latest flagship smartphone with triple camera and 5G connectivity.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="h6 mb-0 text-primary">$899.99</span>
                                            <div class="card-actions">
                                                <button class="btn btn-sm btn-outline-secondary" disabled>
                                                    <i class="ri-notification-line"></i> Notify Me
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- User Profile Card Section -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <h5 class="mb-3">User Profile Cards</h5>
                            </div>
                            
                            <!-- Detailed Profile Card -->
                            <div class="col-md-6 mb-4">
                                <div class="card card-hover-lift">
                                    <div class="card-header bg-transparent border-bottom-0 pb-0">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h6 class="card-title mb-0">Profile Details</h6>
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown">
                                                    <i class="ri-more-2-line"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="ri-edit-line me-2"></i>Edit Profile</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="ri-share-line me-2"></i>Share Profile</a></li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li><a class="dropdown-item text-danger" href="#"><i class="ri-user-unfollow-line me-2"></i>Block User</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="position-relative d-inline-block mb-3">
                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                                alt="John Smith" class="user-avatar-lg rounded-circle shadow" width="150" height="150">
                                            <span class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-3 border-white" 
                                                style="width: 16px; height: 16px;"></span>
                                        </div>
                                        <h5 class="card-title mb-1">John Smith</h5>
                                        <p class="text-secondary mb-2">Senior Software Engineer</p>
                                        <div class="d-flex justify-content-center gap-2 mb-3">
                                            <span class="badge bg-primary">Frontend</span>
                                            <span class="badge bg-success">React</span>
                                            <span class="badge bg-info">TypeScript</span>
                                        </div>
                                        <p class="text-secondary small mb-3">
                                            Passionate about building scalable web applications and mentoring junior developers.
                                        </p>
                                        
                                        <div class="row text-center mb-3">
                                            <div class="col-4">
                                                <div class="h5 mb-1">42</div>
                                                <small class="text-secondary">Projects</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="h5 mb-1">128</div>
                                                <small class="text-secondary">Following</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="h5 mb-1">2.4K</div>
                                                <small class="text-secondary">Followers</small>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex gap-2 justify-content-center">
                                            <button class="btn btn-primary btn-sm">
                                                <i class="ri-user-follow-line me-1"></i> Follow
                                            </button>
                                            <button class="btn btn-outline-secondary btn-sm">
                                                <i class="ri-message-line me-1"></i> Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Compact Profile Card -->
                            <div class="col-md-6 mb-4">
                                <div class="card card-hover-lift">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3">
                                            <div class="position-relative">
                                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                                    alt="Sarah Johnson" class="user-avatar-lg rounded-circle" width="100" height="100">
                                                <span class="position-absolute bottom-0 end-0 bg-warning rounded-circle border border-2 border-white" 
                                                    style="width: 14px; height: 14px;"></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="d-flex justify-content-between align-items-start mb-2">
                                                    <div>
                                                        <h6 class="card-title mb-0">Sarah Johnson</h6>
                                                        <p class="text-secondary small mb-1">Lead UI/UX Designer</p>
                                                    </div>
                                                    <span class="badge bg-success">Pro Member</span>
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <div class="d-flex align-items-center text-secondary small mb-1">
                                                        <i class="ri-map-pin-line me-1"></i>
                                                        <span>San Francisco, CA</span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-secondary small mb-1">
                                                        <i class="ri-briefcase-line me-1"></i>
                                                        <span>Design Team · TechCorp Inc.</span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-secondary small">
                                                        <i class="ri-calendar-line me-1"></i>
                                                        <span>Joined March 2022</span>
                                                    </div>
                                                </div>
                                                
                                                <div class="d-flex gap-2 mb-3">
                                                    <span class="badge bg-primary bg-opacity-10 text-primary border-0">Figma</span>
                                                    <span class="badge bg-success bg-opacity-10 text-success border-0">Adobe XD</span>
                                                    <span class="badge bg-info bg-opacity-10 text-info border-0">Sketch</span>
                                                </div>
                                                
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-outline-primary btn-sm flex-fill">
                                                        <i class="ri-user-follow-line me-1"></i> Connect
                                                    </button>
                                                    <button class="btn btn-outline-secondary btn-sm">
                                                        <i class="ri-message-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Mini Profile Stats Card -->
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h6 class="card-title mb-3">Profile Completion</h6>
                                        <div class="progress mb-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="h6 mb-1">12</div>
                                                <small class="text-secondary">Posts</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="h6 mb-1">356</div>
                                                <small class="text-secondary">Likes</small>
                                            </div>
                                            <div class="col-4">
                                                <div class="h6 mb-1">89</div>
                                                <small class="text-secondary">Shares</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Profile Cards Grid -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <h5 class="mb-3">Team Profiles</h5>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-hover-lift">
                                    <div class="card-body p-3">
                                        <div class="position-relative mx-auto mb-3" style="width: fit-content;">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                                alt="Mike Chen" class="user-avatar-lg rounded-circle" width="150" height="150">
                                            <span class="position-absolute bottom-0 end-0 bg-success rounded-circle border border-2 border-white" 
                                                style="width: 14px; height: 14px;"></span>
                                        </div>
                                        <h6 class="card-title mb-1">Mike Chen</h6>
                                        <p class="text-secondary small mb-2">Backend Developer</p>
                                        <div class="d-flex justify-content-center gap-1 mb-3">
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-half-fill text-warning small"></i>
                                            <span class="text-secondary small ms-1">4.5</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="ri-linkedin-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="ri-twitter-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-dark">
                                                <i class="ri-github-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Last active: 2 hours ago</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-hover-lift">
                                    <div class="card-body p-3">
                                        <div class="position-relative mx-auto mb-3" style="width: fit-content;">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                                alt="Emma Davis" class="user-avatar-lg rounded-circle" width="150" height="150">
                                            <span class="position-absolute bottom-0 end-0 bg-warning rounded-circle border border-2 border-white" 
                                                style="width: 14px; height: 14px;"></span>
                                        </div>
                                        <h6 class="card-title mb-1">Emma Davis</h6>
                                        <p class="text-secondary small mb-2">Project Manager</p>
                                        <div class="d-flex justify-content-center gap-1 mb-3">
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <span class="text-secondary small ms-1">5.0</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="ri-linkedin-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="ri-twitter-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-dark">
                                                <i class="ri-github-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Last active: 5 minutes ago</small>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-hover-lift">
                                    <div class="card-body p-3">
                                        <div class="position-relative mx-auto mb-3" style="width: fit-content;">
                                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                                alt="Alex Rodriguez" class="user-avatar-lg rounded-circle" width="150" height="150">
                                            <span class="position-absolute bottom-0 end-0 bg-secondary rounded-circle border border-2 border-white" 
                                                style="width: 14px; height: 14px;"></span>
                                        </div>
                                        <h6 class="card-title mb-1">Alex Rodriguez</h6>
                                        <p class="text-secondary small mb-2">DevOps Engineer</p>
                                        <div class="d-flex justify-content-center gap-1 mb-3">
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-fill text-warning small"></i>
                                            <i class="ri-star-line text-warning small"></i>
                                            <span class="text-secondary small ms-1">4.0</span>
                                        </div>
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="ri-linkedin-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-info">
                                                <i class="ri-twitter-fill"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-dark">
                                                <i class="ri-github-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-transparent">
                                        <small class="text-muted">Last active: 1 day ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog/Article Cards -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <h5 class="mb-3">Recent Articles</h5>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="card card-hover-lift">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                                alt="Web Development" class="h-100 w-100" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Modern Web Development Trends 2024</h6>
                                                <p class="text-secondary small mb-2">Explore the latest technologies and frameworks shaping the future of web development.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-muted">3 days ago</small>
                                                    <span class="badge bg-primary">Technology</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <div class="card card-hover-lift">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                                alt="Data Analytics" class="h-100 w-100" style="object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Data Analytics for Business Growth</h6>
                                                <p class="text-secondary small mb-2">How data-driven decisions can transform your business strategy and increase ROI.</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="text-muted">1 week ago</small>
                                                    <span class="badge bg-success">Business</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Cards with Icons and Images -->
                        <div class="row mb-4">
                            <div class="col-12 mb-3">
                                <h5 class="mb-3">Features & Services</h5>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-border-primary card-hover-lift">
                                    <div class="card-body">
                                        <div class="stat-card-icon-lg bg-primary bg-opacity-10 text-primary mx-auto mb-3">
                                            <i class="ri-shield-check-line"></i>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                            alt="Security" class="rounded mb-3" style="width: 100%; height: 120px; object-fit: cover;">
                                        <h6 class="card-title">Enterprise Security</h6>
                                        <p class="text-secondary small">Advanced security features to protect your data and applications from threats.</p>
                                        <button class="btn btn-sm btn-outline-primary mt-2">Learn More</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-border-success card-hover-lift">
                                    <div class="card-body">
                                        <div class="stat-card-icon-lg bg-success bg-opacity-10 text-success mx-auto mb-3">
                                            <i class="ri-cloud-line"></i>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                            alt="Cloud" class="rounded mb-3" style="width: 100%; height: 120px; object-fit: cover;">
                                        <h6 class="card-title">Cloud Hosting</h6>
                                        <p class="text-secondary small">Scalable cloud infrastructure with 99.9% uptime guarantee and global CDN.</p>
                                        <button class="btn btn-sm btn-outline-success mt-2">Learn More</button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="card text-center card-border-warning card-hover-lift">
                                    <div class="card-body">
                                        <div class="stat-card-icon-lg bg-warning bg-opacity-10 text-warning mx-auto mb-3">
                                            <i class="ri-customer-service-2-line"></i>
                                        </div>
                                        <img src="https://images.unsplash.com/photo-1581291518857-4e27b48ff24e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                                            alt="Support" class="rounded mb-3" style="width: 100%; height: 120px; object-fit: cover;">
                                        <h6 class="card-title">24/7 Support</h6>
                                        <p class="text-secondary small">Round-the-clock customer support with dedicated account managers and technical experts.</p>
                                        <button class="btn btn-sm btn-outline-warning mt-2">Learn More</button>
                                    </div>
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
