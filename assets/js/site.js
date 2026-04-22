(function () {
    /**
     * Sidebar toggle with persistence
     */
    const sidebarToggles = document.querySelectorAll('[data-toggle="sidebar"]');
    const body = document.body;

    // Restore sidebar state on page load
    const sidebarCollapsed = localStorage.getItem('sidebarCollapsed') === 'true';
    if (sidebarCollapsed) {
        body.classList.add('sidebar-collapsed');
    }

    sidebarToggles.forEach((btn) => {
        btn.addEventListener("click", () => {
            body.classList.toggle("sidebar-collapsed");
            localStorage.setItem("sidebarCollapsed", body.classList.contains("sidebar-collapsed"));
        });
    });

    /**
     * Hamburger icon swap: fold → fold-2 when sidebar collapses
     */
    const hamburgerIcon = document.querySelector('.top-navbar button[data-toggle="sidebar"] i');

    const updateHamburgerIcon = () => {
        const collapsed = document.body.classList.contains('sidebar-collapsed');
        hamburgerIcon.classList.toggle('ri-menu-fold-line', !collapsed);
        hamburgerIcon.classList.toggle('ri-menu-fold-2-line', collapsed);
    };

    // Update on every toggle click
    document.querySelectorAll('[data-toggle="sidebar"]').forEach(btn => {
        btn.addEventListener('click', () => {
            setTimeout(updateHamburgerIcon, 50);
        });
    });

    // Initial state on page load
    updateHamburgerIcon();

    /**
     * Theme handling
     */
    const themeButtons = document.querySelectorAll("[data-theme-value]");

    function getStoredTheme() {
        return localStorage.getItem("preferredTheme");
    }

    function storeTheme(theme) {
        localStorage.setItem("preferredTheme", theme);
    }

    function systemPrefersDark() {
        return window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
    }

    function setTheme(theme) {
        // Resolve final theme used by Bootstrap
        let resolved = theme;
        if (theme === "system") {
            resolved = systemPrefersDark() ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", resolved);
        storeTheme(theme);

        // Update active state on buttons
        themeButtons.forEach((btn) => {
            const value = btn.getAttribute("data-theme-value");
            btn.classList.toggle("active", value === theme);
        });
    }

    const storedTheme = getStoredTheme();
    setTheme(storedTheme || "system");

    // React to theme button clicks
    themeButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            const value = btn.getAttribute("data-theme-value");
            setTheme(value);
        });
    });

    // React to system preference changes when using "system"
    if (window.matchMedia) {
        window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", () => {
            if (getStoredTheme() === "system") {
                setTheme("system");
            }
        });
    }

    /**
     * Arrow toggle for collapsible sidebar menus
     */
    document.querySelectorAll(".bs-dropdown-toggle").forEach((toggle) => {
        const arrow = toggle.querySelector(".toggle-arrow");
        const target = document.querySelector(toggle.dataset.bsTarget);

        if (!target) return;

        target.addEventListener("show.bs.collapse", () => {
            arrow.classList.remove("ri-arrow-right-s-line");
            arrow.classList.add("ri-arrow-down-s-line");
        });

        target.addEventListener("hide.bs.collapse", () => {
            arrow.classList.remove("ri-arrow-down-s-line");
            arrow.classList.add("ri-arrow-right-s-line");
        });
    });

    /**
     * Initialize Select2 for multi-select
     */
    if (window.jQuery && $('.select2-options').length) {
        $('.select2-options').select2({
            placeholder: "Select your skills",
            allowClear: true,
            width: '100%',
            minimumInputLength: 2,
            maximumInputLength: 25
        });
    }


    /**
     * Initialize DataTable
     */
    if (window.jQuery && $(".datatable").length) {
        $(".datatable").DataTable({
            pageLength: 5,
            lengthChange: false,
            ordering: true,
            searching: true,
            info: false,
        });
    }

    /**
     * Initialize jQuery Validation
     */
    $("form").validate();

})();

$(document).ready(function() {

    /**
     * Initialize tagify
     */
    var allTagInputs = document.querySelectorAll('.tags-input');
    allTagInputs.forEach(function(inputElement) {
        new Tagify(inputElement, {
            dropdown: {
                enabled: 0,
                closeOnSelect: false
            }
        });
    });

    /**
     * Initialize CodeMirror for the JavaScript editor.
     * @type {CodeMirror.EditorFromTextArea}
     */
	document.querySelectorAll('.js-editor').forEach((el) => {
        CodeMirror.fromTextArea(el, {
			mode: 'javascript',
			theme: 'dracula',
			styleActiveLine: true,
			matchBrackets: true,
			lineNumbers: true
        });
    });
    
    /**
     * Initialize CodeMirror for the CSS editor.
     * @type {CodeMirror.EditorFromTextArea}
     */
	document.querySelectorAll('.css-editor').forEach((el) => {
        CodeMirror.fromTextArea(el, {
			mode: 'css',
			theme: 'dracula',
			styleActiveLine: true,
			matchBrackets: true,
			lineNumbers: true
        });
    });
    
    /**
     * Initializes CodeMirror for each text area with the class `code-editor`.
     * @param {NodeListOf<HTMLTextAreaElement>} textAreas - List of text area elements with class `code-editor`.
     */
    document.querySelectorAll('.code-editor').forEach((el) => {
        CodeMirror.fromTextArea(el, {
            theme: 'dracula', 
            lineNumbers: true, 
            mode: 'javascript'
        });
    });

    /**
     * Initialize CKEditor
     */
    ClassicEditor.create( document.querySelector('.text-editor') )
        .then( editor => {
                console.log( editor );
        })
        .catch( error => {
                console.error( error );
    });

    /**
     * Initialize on any textarea with this class
     */
    $('.trumbowyg-editor').trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in some browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ]
    });

    /**
     * Initialize Summernote on all elements with class 'summernote'
    */
      $('.summernote').summernote({
          height: 250,
          placeholder: 'Type something here...',
          tabsize: 2
      });


    /**
     * Initialize a Quill editor for a specific element with a given class 'quill-editor'.
    */
    document.querySelectorAll('.quill-editor').forEach(function (editorElement) {
      const targetId = editorElement.getAttribute('data-quill-target');
      const targetTextarea = document.getElementById(targetId);

      if (!targetTextarea) {
        console.warn('Quill target textarea not found:', targetId);
        return;
      }

      // Initialize Quill
      const quill = new Quill(editorElement, {
        theme: 'snow',
        modules: {
          toolbar: [
            [{ 'header': [1, 2, 3, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'color': [] }, { 'background': [] }],
            ['link', 'image'],
            ['clean']
          ]
        },
        placeholder: 'Write here...'
      });

      // Sync to textarea on every content change
      quill.on('text-change', function () {
        targetTextarea.value = quill.root.innerHTML;
      });

      // Also ensure the textarea is updated on form submit (redundant but safe)
      const form = editorElement.closest('form');
      if (form) {
        form.addEventListener('submit', function () {
          targetTextarea.value = quill.root.innerHTML;
        });
      }
    });

    /**
     * Initialize jQuery UI Datepicker and jQuery-UI-Timepicker-addon
    */
    const date = new Date();
    const currentDate = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    $(".jui-datepicker").datepicker({
        dateFormat: "dd/mm/yy",
    });
    $(".jui-future-datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        minDate: currentDate
    });
    $(".jui-past-datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        maxDate: currentDate
    });

    // --- Datetime Pickers  ---
    $(".jui-timepicker").timepicker({
        timeFormat: 'h:mm tt',
        controlType: 'select',
        oneLine: true
    });
    $(".jui-datetimepicker").datetimepicker({
        dateFormat: "dd/mm/yy",
        timeFormat: 'HH:mm',
        controlType: 'select',
        oneLine: true
    });

    /**
     * Initialize native range sliders
     */
    $('.form-slider').each(function() {
        const $slider = $(this);
        const min = parseInt($slider.data('form-slider-min')) || 0;
        const max = parseInt($slider.data('form-slider-max')) || 10;
        const targetId = $slider.data('form-slider-target');
        
        // Set min/max attributes for the native range input
        $slider.attr({
            'min': min,
            'max': max,
            'value': min
        });
        
        // Add event listener for input changes
        $slider.on('input change', function() {
            const value = $(this).val();
            console.log('Value changed:', value); // Debug log
            if (targetId) {
                $('#' + targetId).text(value);
            }
        });
        
        // Set initial value display
        if (targetId) {
            $('#' + targetId).text(min);
        }
        
        // Trigger initial update
        $slider.trigger('input');
    });
    

    /**
     * Set custom dropfile 
     */
    const fileInput = document.querySelector('.files-input');

    // Only proceed if the 'files-input' element exists
    if (fileInput) {
        const fileNameDisplay = document.getElementById('file-name');
        const dropArea = document.getElementById('dropcontainer');

        function updateFileName() {
            const files = fileInput.files;

            if (files.length === 0) {
                fileNameDisplay.textContent = 'No files chosen';
            } else if (files.length === 1) {
                fileNameDisplay.textContent = files[0].name;
            } else {
                fileNameDisplay.textContent = `${files.length} files selected`;
            }
        }

        // Update display when files are selected via input
        fileInput.addEventListener('change', updateFileName);

        // Drag & drop visual feedback
        ['dragover', 'dragenter'].forEach(evt => {
            dropArea.addEventListener(evt, e => {
                e.preventDefault();
                dropArea.classList.add('dragover');
            });
        });

        ['dragleave', 'drop'].forEach(evt => {
            dropArea.addEventListener(evt, e => {
                e.preventDefault();
                dropArea.classList.remove('dragover');
            });
        });

        // Handle actual file drop
        dropArea.addEventListener('drop', e => {
            e.preventDefault();
            dropArea.classList.remove('dragover');

            if (e.dataTransfer.files.length) {
                // Create a new DataTransfer object to assign files to input
                const dataTransfer = new DataTransfer();
                for (const file of e.dataTransfer.files) {
                    dataTransfer.items.add(file);
                }
                fileInput.files = dataTransfer.files;
                updateFileName();
            }
        });

        // Optional: Make the button also trigger the input
        const dropButton = document.querySelector('.custom-file-drop__button');
        if (dropButton) {
            dropButton.addEventListener('click', () => {
                fileInput.click();
            });
        }
    }

});


