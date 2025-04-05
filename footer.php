<!-- Footer -->
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-3">
                    <img id="footerLogo" src="assets/homepage_images/logo/placeholder.png" width="75" class="me-2 rounded-circle">
                    <span class="logo-text">Metro District Design</span>
                </div>
                <div class="footer-text text-center text-md-start">
                    <p><i class="bi bi-geo-alt me-2"></i><a href="#" target="_blank" style="color: white; text-decoration: none;">BASTA SA BAHAY NI JASTIN</a></p>
                    <p><i class="bi bi-envelope me-2"></i><a href="mailto:info@metrodistrictdesigns.com" style="color: white; text-decoration: none;">info@metrodistrictdesigns.com</a></p>
                    <p><i class="bi bi-telephone me-2"></i><a href="tel:09121234567" style="color: white; text-decoration: none;">0912 1234567</a> | <a href="tel:+63282965896" style="color: white; text-decoration: none;">(+632) 8296-5896</a></p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h5>Follow Us</h5>
                            <a href="#" class="social-icon facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-icon instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="text-center text-md-end mt-4">
                        <p>© 2025 Metro District Design. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Search popup functionality
        const searchToggle = document.getElementById('searchToggle');
        const searchPopup = document.getElementById('searchPopup');
        const searchInput = document.getElementById('searchInput');

        // Toggle search popup
        if (searchToggle && searchPopup) {
            searchToggle.addEventListener('click', function(e) {
                searchPopup.classList.toggle('show');
                if (searchPopup.classList.contains('show')) {
                    searchInput.focus();
                }
                e.stopPropagation();
            });

            // Close search popup when clicking outside
            document.addEventListener('click', function() {
                searchPopup.classList.remove('show');
            });

            // Prevent search popup from closing when clicking inside
            searchPopup.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }

        // Cart icon navigation
        const cartIcon = document.getElementById('cartIcon');
        if (cartIcon) {
            cartIcon.addEventListener('click', function() {
                // Navigate to Cart.php when cart icon is clicked
                window.location.href = 'Cart.php';
            });
        }
    });
</script>
</body>
</html>
