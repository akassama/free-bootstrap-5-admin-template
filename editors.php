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
                                <h2>CodeMirror Editor</h2>
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
                                <h2>Summernote Editor</h2>
                                <label for="post_content" class="form-label">Post Content:</label>
                                <textarea class="form-control summernote" name="post_content">
                                    <p>Hello! This is the <b>latest</b> Summernote.</p>
                                </textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <h2>Quill Editor</h2>
                                <div class="quill-editor" data-quill-target="quill-hidden-data" id="comment"></div>
                                <textarea name="text" id="quill-hidden-data" style="display:none;"></textarea>
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
