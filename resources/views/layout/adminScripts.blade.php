<script>
    tinymce.init({
        selector: '#content',
        plugins: 'lists link',
        toolbar: 'bold italic underline | bullist numlist | link',
        menubar: false,
        // Disable image and file uploads
        images_upload_handler: function(blobInfo, success, failure) {
            failure('Image uploads are disabled.');
        }
    });
</script>
<script>
    function toggleMobileMenu() {
        const menu = document.getElementById("hamburgerMenu");
        menu.classList.toggle("hidden");
    }

    function toggleUserMenu(event) {
        const userMenu = event.currentTarget.nextElementSibling;
        userMenu.classList.toggle("hidden");
    }
</script>
