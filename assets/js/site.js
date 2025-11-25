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
     * Initialize a Quill editor for a specific element with a given class.
     *
     * @constructor
     * @param {string|HTMLElement} selector - The CSS selector or HTMLElement where the Quill editor should be initialized.
     * @param {Object} options - Configuration options for the Quill editor.
     * @param {string} options.theme - The theme to be used for the Quill editor.
     * @returns {Quill} - The Quill editor instance.
     */
    const quill = new Quill('#quill-editor', {
        theme: 'snow'
    });


});