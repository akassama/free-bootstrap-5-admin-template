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
                     <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Create New Category</li>
                  </ol>
               </nav>
               <!-- Page Header -->
               <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                  <div>
                     <h4 class="mb-1">Create New Category</h4>
                     <p class="text-secondary mb-0">Add a new category to organize your posts and content.</p>
                  </div>
                  <div class="d-flex gap-2">
                     <a href="categories.php" class="btn btn-outline-secondary">
                     <i class="ri-arrow-left-line"></i> Back to Categories
                     </a>
                     <button type="submit" form="categoryForm" class="btn btn-primary">
                     <i class="ri-save-line"></i> Create Category
                     </button>
                  </div>
               </div>
               <!-- Category Form -->
               <form id="categoryForm" class="validate-form" action="save-category.php" method="POST" novalidate>
                  <div class="row g-4">
                     <!-- LEFT COLUMN: Main Details -->
                     <div class="col-lg-8">
                        <!-- Basic Details Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-folder-add-line me-2"></i>Basic Details</h5>
                           </div>
                           <div class="card-body">
                              <!-- Category Name -->
                              <div class="mb-3">
                                 <label for="categoryName" class="form-label required">Category Name</label>
                                 <!-- Added js-slug-source and data-slug-target -->
                                 <input type="text" class="form-control form-control-lg js-slug-source" data-slug-target="categorySlug" id="categoryName" name="name" placeholder="e.g., Web Development" required>
                                 <div class="invalid-feedback">Please provide a category name.</div>
                              </div>
                              <!-- Slug -->
                              <div class="mb-3">
                                 <label for="categorySlug" class="form-label required">Slug</label>
                                 <div class="input-group">
                                    <span class="input-group-text">yourdomain.com/category/</span>
                                    <!-- Added js-slug-target -->
                                    <input type="text" class="form-control js-slug-target" id="categorySlug" name="slug" placeholder="auto-generated-slug" required>
                                    <!-- Added js-slug-generate, data-slug-source, and data-slug-target -->
                                    <button type="button" class="btn btn-outline-secondary js-slug-generate" data-slug-source="categoryName" data-slug-target="categorySlug" title="Generate from name">
                                    <i class="ri-magic-line"></i>
                                    </button>
                                 </div>
                                 <div class="invalid-feedback">Please provide a URL slug.</div>
                                 <div class="form-text">The "slug" is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</div>
                              </div>
                              <!-- Parent Category -->
                              <div class="mb-3">
                                 <label for="parentCategory" class="form-label">Parent Category</label>
                                 <select class="form-select" id="parentCategory" name="parent_id">
                                    <option value="0" selected>None (Top Level)</option>
                                    <option value="1">Technology</option>
                                    <option value="2">Design</option>
                                    <option value="3">Business</option>
                                    <option value="4">&nbsp;&nbsp;&nbsp;Frontend Development</option>
                                    <option value="5">&nbsp;&nbsp;&nbsp;Backend Development</option>
                                 </select>
                                 <div class="form-text">Categories can have a hierarchy. You might have a "Web Development" parent category with "Frontend" and "Backend" as child categories.</div>
                              </div>
                              <!-- Description -->
                              <div class="mb-3">
                                 <label for="categoryDescription" class="form-label">Description</label>
                                 <textarea class="form-control" id="categoryDescription" name="description" rows="4" placeholder="Briefly describe what this category is about (optional)"></textarea>
                                 <div class="form-text">The description is not prominent by default, but some themes may show it.</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- RIGHT COLUMN: Settings & Metadata -->
                     <div class="col-lg-4">
                        <!-- Display Settings Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-settings-3-line me-2"></i>Display Settings</h5>
                           </div>
                           <div class="card-body">
                              <!-- Status -->
                              <div class="mb-3">
                                 <label class="form-label d-block mb-2">Status</label>
                                 <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="categoryStatus" name="status" value="1" checked>
                                    <label class="form-check-label" for="categoryStatus">Active</label>
                                 </div>
                                 <div class="form-text">Inactive categories will not be displayed on the frontend.</div>
                              </div>
                              <!-- Display Order -->
                              <div class="mb-3">
                                 <label for="displayOrder" class="form-label">Display Order</label>
                                 <input type="number" class="form-control" id="displayOrder" name="display_order" value="0" min="0">
                                 <div class="form-text">Categories are usually ordered alphabetically, but you can set a custom numeric order here (0 is default).</div>
                              </div>
                           </div>
                        </div>
                        <!-- SEO Settings Card -->
                        <div class="card mb-4">
                           <div class="card-header d-flex justify-content-between align-items-center">
                              <h5 class="card-title mb-0"><i class="ri-search-eye-line me-2"></i>SEO Settings</h5>
                              <button class="btn btn-sm btn-link text-decoration-none" type="button" data-bs-toggle="collapse" data-bs-target="#seoCollapse" aria-expanded="true">
                              <i class="ri-arrow-down-s-line"></i>
                              </button>
                           </div>
                           <div class="collapse show" id="seoCollapse">
                              <div class="card-body">
                                 <!-- Focus Keyword -->
                                 <div class="mb-3">
                                    <label for="seoFocusKeyword" class="form-label">Focus Keywords</label>
                                    <input type="text" class="form-control tags-input" id="seoFocusKeyword" name="seo_focus_keyword" placeholder="Primary keyword for this category">
                                 </div>
                                 <!-- SEO Title -->
                                 <div class="mb-3">
                                    <label for="seoTitle" class="form-label">SEO Title</label>
                                    <input type="text" class="form-control" id="seoTitle" name="seo_title" placeholder="Overrides default category title">
                                    <div class="form-text">Recommended length: 50-60 characters.</div>
                                 </div>
                                 <!-- SEO Description -->
                                 <div class="mb-3">
                                    <label for="seoDescription" class="form-label">Meta Description</label>
                                    <textarea class="form-control" id="seoDescription" name="seo_description" rows="3" placeholder="Brief description for search engines"></textarea>
                                    <div class="form-text">Recommended length: 150-160 characters.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Mobile Sticky Action Bar -->
                  <div class="d-lg-none position-fixed bottom-0 start-0 end-0 bg-body border-top p-3 shadow-lg" style="z-index: 1030;">
                     <div class="d-flex gap-2">
                        <button type="submit" form="categoryForm" class="btn btn-primary flex-grow-1">
                        <i class="ri-save-line"></i> Create Category
                        </button>
                     </div>
                  </div>
                  <!-- Add bottom padding on mobile to account for sticky bar -->
                  <div class="d-lg-none" style="height: 80px;"></div>
               </form>
            </main>
            <?php include_once 'includes/_footer.php'; ?>
         </div>
      </div>
      <?php include_once 'includes/_footer_assets.php'; ?>
      <?php include_once 'includes/_site_scripts.php'; ?>
   </body>
</html>