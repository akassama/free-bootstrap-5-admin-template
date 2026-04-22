<script>
    (function () {
        /**
         * Toastr sample notification
         */
        if (window.toastr) {
            toastr.options = {
                positionClass: "toast-bottom-right",
                timeOut: 3000,
            };
            toastr.success("You are logged in.", "Welcome back");
        }

        /**
         * SweetAlert2 logout confirmation
         */
        const logoutLinks = document.querySelectorAll(".js-logout");
        logoutLinks.forEach((link) => {
            link.addEventListener("click", function (e) {
                e.preventDefault();
                if (!window.Swal) return;
                // Show a confirmation modal
                Swal.fire({
                    title: "Ready to log out?",
                    text: "You can always log back in to continue where you left off.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'No',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect to the sign-out link
                        window.location.href = 'https://example.com/?logout=true';
                    }
                });
            });
        });
    })();
</script>