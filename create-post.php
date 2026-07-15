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
                     <li class="breadcrumb-item"><a href="posts.php">Posts</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Create New Post</li>
                  </ol>
               </nav>
               <!-- Page Header -->
               <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
                  <div>
                     <h4 class="mb-1">Create New Post</h4>
                     <p class="text-secondary mb-0">Fill in the details below to publish a new blog post or article.</p>
                  </div>
                  <div class="d-flex gap-2">
                     <a href="posts.php" class="btn btn-outline-secondary">
                     <i class="ri-arrow-left-line"></i> Back to Posts
                     </a>
                     <button type="submit" form="postForm" name="action" value="draft" class="btn btn-outline-primary">
                     <i class="ri-file-text-line"></i> Save Draft
                     </button>
                     <button type="submit" form="postForm" name="action" value="publish" class="btn btn-primary">
                     <i class="ri-send-plane-fill"></i> Publish Post
                     </button>
                  </div>
               </div>
               <!-- Post Form -->
               <form id="postForm" class="validate-form" action="save-post.php" method="POST" enctype="multipart/form-data" novalidate>
                  <div class="row g-4">
                     <!-- LEFT COLUMN: Main Content -->
                     <div class="col-lg-8">
                        <!-- Basic Details Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-article-line me-2"></i>Basic Details</h5>
                           </div>
                           <div class="card-body">
                              <!-- Title -->
                              <div class="mb-3">
                                 <label for="postTitle" class="form-label required">Post Title</label>
                                 <!-- Added js-slug-source and data-slug-target -->
                                 <input type="text" class="form-control form-control-lg js-slug-source" data-slug-target="postSlug" id="postTitle" name="title" placeholder="Enter an engaging title" required>
                                 <div class="invalid-feedback">Please provide a post title.</div>
                              </div>
                              <!-- Slug -->
                              <div class="mb-3">
                                 <label for="postSlug" class="form-label required">Slug</label>
                                 <div class="input-group">
                                    <span class="input-group-text">yourdomain.com/post/</span>
                                    <!-- Added js-slug-target -->
                                    <input type="text" class="form-control js-slug-target" id="postSlug" name="slug" placeholder="auto-generated-slug" required>
                                    <!-- Added js-slug-generate, data-slug-source, and data-slug-target -->
                                    <button type="button" class="btn btn-outline-secondary js-slug-generate" data-slug-source="postTitle" data-slug-target="postSlug" title="Generate from title">
                                    <i class="ri-magic-line"></i>
                                    </button>
                                 </div>
                                 <div class="invalid-feedback">Please provide a URL slug.</div>
                              </div>
                              <!-- Excerpt -->
                              <div class="mb-3">
                                 <label for="postExcerpt" class="form-label">Excerpt</label>
                                 <textarea class="form-control" id="postExcerpt" name="excerpt" rows="3" placeholder="A short summary of the post (optional, used for meta descriptions)"></textarea>
                                 <div class="form-text">Briefly summarize the post. This is often used in search engine results and social media shares.</div>
                              </div>
                           </div>
                        </div>
                        <!-- Content Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-edit-box-line me-2"></i>Content</h5>
                           </div>
                           <div class="card-body">
                              <div class="mb-3">
                                 <label for="postContent" class="form-label required">Post Content</label>
                                 <textarea class="trumbowyg-editor" name="content" id="postContent" placeholder="Start writing your masterpiece..." required></textarea>
                                 <div class="invalid-feedback">Post content cannot be empty.</div>
                              </div>
                           </div>
                        </div>
                        <!-- Featured Image Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h6 class="card-title mb-0"><i class="ri-image-line me-2"></i>Featured Image</h6>
                           </div>
                           <div class="card-body">
                              <div class="featured-image-preview" id="featuredPreview">
                                 <i class="ri-image-add-line"></i>
                                 <span class="small">No image selected</span>
                              </div>
                              <input type="file" class="form-control mt-2" id="featuredImage" name="featured_image"
                                 accept="image/*">
                              <div class="form-text">Recommended size: 1200x630px. Max file size: 2MB. Accepted formats: JPG, PNG, WebP.</div>
                           </div>
                        </div>
                     </div>
                     <!-- RIGHT COLUMN: Settings & Metadata -->
                     <div class="col-lg-4">
                        <!-- Publish Settings Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-calendar-event-line me-2"></i>Publish Settings</h5>
                           </div>
                           <div class="card-body">
                              <!-- Status -->
                              <div class="mb-3">
                                 <label for="postStatus" class="form-label required">Status</label>
                                 <select class="form-select" id="postStatus" name="status" required>
                                    <option value="draft" selected>Draft</option>
                                    <option value="published">Published</option>
                                    <option value="scheduled">Scheduled</option>
                                    <option value="archived">Archived</option>
                                 </select>
                              </div>
                              <!-- Publish Date -->
                              <div class="mb-3">
                                 <label for="publishDate" class="form-label">Publish Date</label>
                                 <input type="text" class="form-control jui-datetimepicker" id="publishDate" name="publish_date" placeholder="DD/MM/YYYY HH:mm">
                                 <div class="form-text">Leave blank to publish immediately when status is 'Published'.</div>
                              </div>
                              <!-- Featured Toggle -->
                              <div class="form-check form-switch mb-2">
                                 <input class="form-check-input" type="checkbox" role="switch" id="isFeatured" name="is_featured" value="1">
                                 <label class="form-check-label" for="isFeatured">Feature this post</label>
                                 <div class="form-text">Featured posts appear at the top of the homepage.</div>
                              </div>
                           </div>
                        </div>
                        <!-- Taxonomy Card -->
                        <div class="card mb-4">
                           <div class="card-header">
                              <h5 class="card-title"><i class="ri-price-tag-3-line me-2"></i>Taxonomy</h5>
                           </div>
                           <div class="card-body">
                              <!-- Categories as Checkboxes -->
                              <div class="mb-4">
                                 <label class="form-label required d-block">Categories</label>
                                 <div class="d-flex flex-wrap gap-3" id="categoryCheckboxes">
                                    <div class="form-check">
                                       <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="technology" id="cat-tech">
                                       <label class="form-check-label" for="cat-tech">Technology</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="design" id="cat-design">
                                       <label class="form-check-label" for="cat-design">Design</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="business" id="cat-business">
                                       <label class="form-check-label" for="cat-business">Business</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="lifestyle" id="cat-lifestyle">
                                       <label class="form-check-label" for="cat-lifestyle">Lifestyle</label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input category-checkbox" type="checkbox" name="categories[]" value="tutorials" id="cat-tutorials">
                                       <label class="form-check-label" for="cat-tutorials">Tutorials</label>
                                    </div>
                                 </div>
                                 <!-- Custom error message for checkbox group -->
                                 <div class="field-error text-danger mt-1" id="category-error" style="display: none; font-size: 0.8rem;">Please select at least one category.</div>
                              </div>
                              <!-- Tags -->
                              <div class="mb-3">
                                 <label for="postTags" class="form-label">Tags</label>
                                 <textarea class="form-control tags-input" id="postTags" name="tags" rows="2" placeholder="e.g., bootstrap, webdev, tutorial"></textarea>
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
                                    <input type="text" class="form-control tags-input" id="seoFocusKeyword" name="seo_focus_keyword" placeholder="Primary keyword">
                                 </div>
                                 <!-- SEO Title -->
                                 <div class="mb-3">
                                    <label for="seoTitle" class="form-label">SEO Title</label>
                                    <input type="text" class="form-control" id="seoTitle" name="seo_title" placeholder="Overrides default post title">
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
                  <!-- Mobile Sticky Action Bar (Optional but great for UX) -->
                  <div class="d-lg-none position-fixed bottom-0 start-0 end-0 bg-body border-top p-3 shadow-lg" style="z-index: 1030;">
                     <div class="d-flex gap-2">
                        <button type="submit" form="postForm" name="action" value="draft" class="btn btn-outline-primary flex-grow-1">Save Draft</button>
                        <button type="submit" form="postForm" name="action" value="publish" class="btn btn-primary flex-grow-1">Publish</button>
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