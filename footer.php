<footer>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.19.0/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.19.0/dist/sweetalert2.min.js"></script>
<script>
window.onload = function() {
    Swal.fire({
        title: 'Welcome!',
        text: 'This is your custom popup message.',
        icon: 'info',
        confirmButtonText: 'Got it!'
    });
};
</script>

    <div class="footer-container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
    </div>
   

<?php wp_footer(); ?>
</body>
</html>
