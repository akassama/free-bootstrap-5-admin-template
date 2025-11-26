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
                                    
                                    <!-- Multiple File Input -->
                                    <div class="mb-3">
                                        <label for="multiple-files" class="form-label">Multiple Files</label>
                                        <input class="form-control" type="file" id="multiple-files" multiple>
                                    </div>
                                    
                                    <!-- File Input 2 - Custom Styled Drop Area -->
                                    <div class="mb-3">
                                        <label class="form-label">Drop Files:</label>
                                        <div class="custom-file-drop" id="dropcontainer">
                                            <input type="file" 
                                                id="images" 
                                                accept="image/*" 
                                                multiple 
                                                required>
                                            <div class="custom-file-drop__title">Drop files here</div>
                                            <div class="custom-file-drop__or">or</div>
                                            <button type="button" class="custom-file-drop__button">
                                                Choose files
                                            </button>
                                            <div class="custom-file-drop__filename" id="file-name">No files chosen</div>
                                        </div>
                                        <div class="form-text mt-2">Accepted formats: JPG, PNG, GIF. Max size: 2MB.</div>
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
                                        <label for="satisfaction" class="form-label">Satisfaction Level:</label>
                                        <input type="range" class="form-range form-slider" 
                                            data-form-slider-min="0" data-form-slider-max="10" data-form-slider-target="satisfaction-value"/>
                                        Value: <span id="satisfaction-value"></span>
                                        <div class="d-flex justify-content-between small text-secondary">
                                            <span>1 (Poor)</span>
                                            <span>10 (Excellent)</span>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="rating" class="form-label">Rating:</label>
                                        <input type="range" class="form-range form-slider" 
                                            data-form-slider-min="0" data-form-slider-max="5" data-form-slider-target="rating-value"/>
                                        Value: <span id="rating-value"></span>
                                        <div class="d-flex justify-content-between small text-secondary">
                                            <span>1 <i class="ri-star-fill"></i></span>
                                            <span>5 <i class="ri-star-fill"></i></span>
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
                        
                        <!-- jQuery-UI Datetime Picker -->
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">jQuery-UI Date Pickers</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="Date01">Datepicker 1:</label>
                                        <input type="text" class="form-control jui-datepicker" id="Date01" name="Date01" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="Date02">Datepicker 2:</label>
                                        <input type="text" class="form-control jui-datepicker" id="Date02" name="Date02" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="Date03">Future Datepicker:</label>
                                        <input type="text" class="form-control jui-future-datepicker" id="Date03" name="Date03" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="Date04">Past Datepicker:</label>
                                        <input type="text" class="form-control jui-past-datepicker" id="Date04" name="Date04" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="Time01">Time Only:</label>
                                        <input type="text" class="form-control jui-timepicker" id="Time01" name="Time01" required autocomplete="off">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3 mt-3">
                                        <label for="DateTime01">Date & Time:</label>
                                        <input type="text" class="form-control jui-datetimepicker" id="DateTime01" name="DateTime01" required autocomplete="off">
                                        </div>
                                    </div>
                                </div>
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

                <?php include_once 'includes/_footer.php'; ?>
            </div>
        </div>

        <?php include_once 'includes/_footer_assets.php'; ?>
        <?php include_once 'includes/_site_scripts.php'; ?>
    </body>
</html>
